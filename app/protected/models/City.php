<?php

Yii::import('application.models.base.BaseCity');
class City extends BaseCity
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
