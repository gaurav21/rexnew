<?php

class SharedWithMeController extends Controller
{
    
    public function init() {
        if (Yii::app()->user->isGuest) {
            $this->redirect(Yii::app()->createUrl('account'));
        }
    }
	public function actionIndex()
	{
            $model = new Campaign();
            $campaigns = array();
            $campaignsSharedWithMe = MonitorlyCampaignShare::model()->findAllByAttributes(array('email' => Yii::app()->user->email));
//            print_r($campaignsSharedWithMe);die();
            if (!empty($campaignsSharedWithMe)) {
                $sharedCampId = array();
                foreach ($campaignsSharedWithMe as $key => $shared) {
 //                   print_r($shared);
                    array_push($sharedCampId, $shared['campaignid']);
                }
                $campaigns = Campaign::fetchCampaignsOnIds(implode(',', $sharedCampId));
            }
            $finalCampaigns = array();
  //             print_r($campaigns); die();
                foreach ($campaigns as $key => $value) {
                    $vendors = UserCompany::fetchVendorsInCampaign($value['id']);
                    //echo count($vendors);
//                    print_r($vendors);die();
                    $result = array();
                    for($i =0; $i < count($vendors) ; $i++) {
                        //echo $vendors[$i]['name'] . ' ww ' . $vendors[$i]['id'];
                        $listings = Listing::getListingsForCampaign($vendors[$i]['id'], $value['id']);
                        $temp = $vendors[$i];
                        $temp['listings'] = $listings;
//                        print_r($temp);die();
                        array_push($result, $temp);
                    }
                    $sDate = new DateTime($value['startDate']);
                    $eDate = new DateTime($value['endDate']);
                    
                    $val = array(
                        'id' => $value['id'],
                        'name' => $value['name'],
                        'startDate' => $sDate->format('d M Y'),
                        'endDate' => $eDate->format('d M Y'),
                        'count' => $value['count'],
                        'sites' => $result
                        );
                        
                        array_push($finalCampaigns, $val);
                }
            $this->render('index',array('model' => $model, 'campaigns' => $finalCampaigns));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}