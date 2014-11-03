<?php
/* @var $this RexTaskController */
/* @var $model Task */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->id,
);


?>

<h1>View Task #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'assigneduserid',
		'assignedCompanyId',
		'siteid',
		'dueDate',
		'taskDone',
		'problem',
		'createdDate',
		'status',
		'createdBy',
		'companyRefNumber',
		'clientName',
		'clientMobNumber',
		'vehicleMakeId',
		'vehicleModel',
		'email',
		'inspectionLocationId',
		'engineNumber',
		'chassisNumber',
		'odometerReading',
	),
)); ?>
