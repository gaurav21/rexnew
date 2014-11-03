<?php
/* @var $this RexTaskController */
/* @var $data Task */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campaignid')); ?>:</b>
	<?php echo CHtml::encode($data->campaignid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assigneduserid')); ?>:</b>
	<?php echo CHtml::encode($data->assigneduserid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assignedCompanyId')); ?>:</b>
	<?php echo CHtml::encode($data->assignedCompanyId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('siteid')); ?>:</b>
	<?php echo CHtml::encode($data->siteid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dueDate')); ?>:</b>
	<?php echo CHtml::encode($data->dueDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taskDone')); ?>:</b>
	<?php echo CHtml::encode($data->taskDone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('problem')); ?>:</b>
	<?php echo CHtml::encode($data->problem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdDate')); ?>:</b>
	<?php echo CHtml::encode($data->createdDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedDate')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pop')); ?>:</b>
	<?php echo CHtml::encode($data->pop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyRefNumber')); ?>:</b>
	<?php echo CHtml::encode($data->companyRefNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientName')); ?>:</b>
	<?php echo CHtml::encode($data->clientName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientMobNumber')); ?>:</b>
	<?php echo CHtml::encode($data->clientMobNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicleMakeId')); ?>:</b>
	<?php echo CHtml::encode($data->vehicleMakeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicleModel')); ?>:</b>
	<?php echo CHtml::encode($data->vehicleModel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('typeId')); ?>:</b>
	<?php echo CHtml::encode($data->typeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inspectionLocationId')); ?>:</b>
	<?php echo CHtml::encode($data->inspectionLocationId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('engineNumber')); ?>:</b>
	<?php echo CHtml::encode($data->engineNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chassisNumber')); ?>:</b>
	<?php echo CHtml::encode($data->chassisNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('odometerReading')); ?>:</b>
	<?php echo CHtml::encode($data->odometerReading); ?>
	<br />

	*/ ?>

</div>