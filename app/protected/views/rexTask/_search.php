<?php
/* @var $this RexTaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'campaignid'); ?>
		<?php echo $form->textField($model,'campaignid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assigneduserid'); ?>
		<?php echo $form->textField($model,'assigneduserid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assignedCompanyId'); ?>
		<?php echo $form->textField($model,'assignedCompanyId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'siteid'); ?>
		<?php echo $form->textField($model,'siteid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dueDate'); ?>
		<?php echo $form->textField($model,'dueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taskDone'); ?>
		<?php echo $form->textField($model,'taskDone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'problem'); ?>
		<?php echo $form->textField($model,'problem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdDate'); ?>
		<?php echo $form->textField($model,'createdDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modifiedDate'); ?>
		<?php echo $form->textField($model,'modifiedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pop'); ?>
		<?php echo $form->textField($model,'pop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdBy'); ?>
		<?php echo $form->textField($model,'createdBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'companyRefNumber'); ?>
		<?php echo $form->textField($model,'companyRefNumber',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientName'); ?>
		<?php echo $form->textField($model,'clientName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientMobNumber'); ?>
		<?php echo $form->textField($model,'clientMobNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicleMakeId'); ?>
		<?php echo $form->textField($model,'vehicleMakeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicleModel'); ?>
		<?php echo $form->textField($model,'vehicleModel',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'typeId'); ?>
		<?php echo $form->textField($model,'typeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inspectionLocationId'); ?>
		<?php echo $form->textField($model,'inspectionLocationId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'engineNumber'); ?>
		<?php echo $form->textField($model,'engineNumber',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chassisNumber'); ?>
		<?php echo $form->textField($model,'chassisNumber',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'odometerReading'); ?>
		<?php echo $form->textField($model,'odometerReading',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->