<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
        array('label'=>'Test User List', 'url'=>array('test')),
        array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php 
/*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/

    echo '<pre>';
    foreach ($model as $value) {
   
        //echo  'User ID: ' .$value->id .'  ';
        echo  'Name: ' .$value->fname ;
        echo  ' ' .$value->lname . '  ';
        //array('label'=>$value->email, 'url'=>array('update'));
        //$url = yii::app()->getBaseUrl().'/'.'update'.'/'.$value->id;
        //echo $baseUrl;
        $url= Yii::app()->urlManager->createUrl('user/update/'.$value->id);
        echo 'Email: '.'<a href='.$url. '>'.$value->email.'  '.'</a>';
        echo  'Ph no: ' .$value->phonenumber . '<br />';
}
    

?>
