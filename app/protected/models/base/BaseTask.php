<?php

/**
 * This is the model class for table "Task".
 *
 * The followings are the available columns in table 'Task':
 * @property integer $id
 * @property integer $assigneduserid
 * @property integer $assignedCompanyId
 * @property integer $siteid
 * @property string $dueDate
 * @property integer $taskDone
 * @property integer $problem
 * @property string $createdDate
 * @property string $modifiedDate
 * @property integer $status
 * @property integer $createdBy
 * @property string $companyRefNumber
 * @property string $clientName
 * @property integer $clientMobNumber
 * @property integer $vehicleMakeId
 * @property string $vehicleModel
 * @property integer $typeId
 * @property string $email
 * @property integer $inspectionLocationId
 * @property string $engineNumber
 * @property string $chassisNumber
 * @property string $odometerReading
 *
 * The followings are the available model relations:
 * @property PhotoProof[] $photoProofs
 */
class BaseTask extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Task';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientName, clientMobNumber, vehicleMakeId, vehicleModel, email, inspectionLocationId', 'required'),
			array('assigneduserid, assignedCompanyId, siteid, taskDone, problem, status, createdBy, clientMobNumber, vehicleMakeId, typeId, inspectionLocationId', 'numerical', 'integerOnly'=>true),
			array('companyRefNumber, clientName, vehicleModel, email, engineNumber, chassisNumber, odometerReading', 'length', 'max'=>255),
			array('dueDate, createdDate, modifiedDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, assigneduserid, assignedCompanyId, siteid, dueDate, taskDone, problem, createdDate, modifiedDate, status, createdBy, companyRefNumber, clientName, clientMobNumber, vehicleMakeId, vehicleModel, typeId, email, inspectionLocationId, engineNumber, chassisNumber, odometerReading', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'photoProofs' => array(self::HAS_MANY, 'PhotoProof', 'taskid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'assigneduserid' => 'Assigneduserid',
			'assignedCompanyId' => 'Assigned Company',
			'siteid' => 'Siteid',
			'dueDate' => 'Due Date',
			'taskDone' => 'Task Done',
			'problem' => 'Problem',
			'createdDate' => 'Created Date',
			'modifiedDate' => 'Modified Date',
			'status' => 'Status',
			'createdBy' => 'Created By',
			'companyRefNumber' => 'Company Ref Number',
			'clientName' => 'Client Name',
			'clientMobNumber' => 'Client Mob Number',
			'vehicleMakeId' => 'Vehicle Make',
			'vehicleModel' => 'Vehicle Model',
			'typeId' => 'Type',
			'email' => 'Email',
			'inspectionLocationId' => 'Inspection Location',
			'engineNumber' => 'Engine Number',
			'chassisNumber' => 'Chassis Number',
			'odometerReading' => 'Odometer Reading',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('assigneduserid',$this->assigneduserid);
		$criteria->compare('assignedCompanyId',$this->assignedCompanyId);
		$criteria->compare('siteid',$this->siteid);
		$criteria->compare('dueDate',$this->dueDate,true);
		$criteria->compare('taskDone',$this->taskDone);
		$criteria->compare('problem',$this->problem);
		$criteria->compare('createdDate',$this->createdDate,true);
		$criteria->compare('modifiedDate',$this->modifiedDate,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('createdBy',$this->createdBy);
		$criteria->compare('companyRefNumber',$this->companyRefNumber,true);
		$criteria->compare('clientName',$this->clientName,true);
		$criteria->compare('clientMobNumber',$this->clientMobNumber);
		$criteria->compare('vehicleMakeId',$this->vehicleMakeId);
		$criteria->compare('vehicleModel',$this->vehicleModel,true);
		$criteria->compare('typeId',$this->typeId);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('inspectionLocationId',$this->inspectionLocationId);
		$criteria->compare('engineNumber',$this->engineNumber,true);
		$criteria->compare('chassisNumber',$this->chassisNumber,true);
		$criteria->compare('odometerReading',$this->odometerReading,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BaseTask the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
