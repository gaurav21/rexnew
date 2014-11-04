<?php
/* @var $this RexTaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

<div class="signup-form-wrap">
    <div class="signup-form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        
<!--        	<div class="row">-->
		<?php echo $form->labelEx($model,'companyRefNumber'); ?>
		<?php echo $form->textField($model,'companyRefNumber',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'companyRefNumber'); ?>
<!--	</div>

	<div class="row">-->
		<?php echo $form->labelEx($model,'clientName'); ?>
		<?php echo $form->textField($model,'clientName',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'clientName'); ?>
<!--	</div>

	<div class="row">-->
		<?php echo $form->labelEx($model,'clientMobNumber'); ?>
		<?php echo $form->textField($model,'clientMobNumber',array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'clientMobNumber'); ?>
<!--	</div>

	<div class="row">-->
		<?php echo $form->labelEx($model,'vehicleMakeId'); ?>
               <?php echo $form->dropDownList($model,'vehicleMakeId',  $make, array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'vehicleMakeId'); ?>
<!--	</div>

	<div class="row">-->
		<?php echo $form->labelEx($model,'vehicleModel'); ?>
		<?php echo $form->textField($model,'vehicleModel',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'vehicleModel'); ?>
<!--	</div>



	<div class="row">-->
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
<!--	</div>

	<div class="row">-->
		<?php echo $form->labelEx($model,'inspectionLocationId'); ?>
		<?php echo $form->dropDownList($model, 'inspectionLocationId', $city,array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'inspectionLocationId'); ?>
<!--	</div>
        company name
	<div class="row">-->
		<?php echo $form->labelEx($model,'assignedCompanyId'); ?>
		<?php echo $form->dropDownList($model, 'assignedCompanyId', $company,array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'assignedCompanyId'); ?>
<!--	</div>


	<div class="row">-->
		<?php echo $form->labelEx($model,'dueDate'); ?>
		<?php echo $form->textField($model,'dueDate',array('id' => 'sdate','class' => 'form-control')); ?>
		<?php echo $form->error($model,'dueDate'); ?>
<!--	</div>

        <div class="row">-->
		<?php echo $form->labelEx($model,'assignedUserId'); ?>
		<?php echo $form->dropDownList($model, 'assigneduserid', $company,array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'assignedCompanyId'); ?>
<!--	</div>
	<div class="row">-->
		<?php echo $form->labelEx($model,'engineNumber'); ?>
		<?php echo $form->textField($model,'engineNumber',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'engineNumber'); ?>
<!--	</div>-->

<!--	<div class="row">-->
		<?php echo $form->labelEx($model,'chassisNumber'); ?>
		<?php echo $form->textField($model,'chassisNumber',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'chassisNumber'); ?>
<!--	</div>-->

<!--	<div class="row">-->
		<?php echo $form->labelEx($model,'odometerReading'); ?>
		<?php echo $form->textField($model,'odometerReading',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		<?php echo $form->error($model,'odometerReading'); ?>
<!--	</div>-->

<!--	<div class="row buttons">-->
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-primary btn-primary-lg')); ?>
<!--	</div>-->

<?php $this->endWidget(); ?>
    </div>
</div><!-- form -->