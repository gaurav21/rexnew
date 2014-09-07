<?php

Yii::import('application.models.base.BaseUserCompany');
class UserCompany extends BaseUserCompany {
    
   public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public static function fetchVendorsList($cid) {
         $sql = 'select count(*) as cnt, companyid as id, uc.name from Listing  
            inner join UserCompany uc on uc.id = companyid and uc.id in ( select vendorcompanyid from requestedcompanyvendor where companyid ='. $cid .' and accepteddate is not null)' .
            'where companyid is not null and companyid != 0

            and status = 1 
            group by companyid 
            union  select count(*) as cnt, companyid as id, uc.name 
from Listing  
            inner join UserCompany uc on uc.id = companyid and uc.id = '.$cid ;
        $command = Yii::app()->db->createCommand($sql);
            $data = $command->queryAll();
        return $data;
    }
    
    public static function fetchVendorsInCampaign($campaignId) {
     $sql = 'select count(distinct t.siteid) as count, uc.id, uc.name from Task t
        inner join Listing l on l.id = t.siteid and l.status =1
        inner join UserCompany uc on uc.id = l.companyid
        where t.status =1 and t.campaignid = ' . $campaignId . ' group by uc.id, uc.name' ;
        $command = Yii::app()->db->createCommand($sql);
            $data = $command->queryAll();
        return $data;   
    }
}

