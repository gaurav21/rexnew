<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($role,'name'); ?>
		<?php echo $form->textField($role,'name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($role,'name'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phonenumber'); ?>
		<?php echo $form->textField($model,'phonenumber',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phonenumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->checkBox($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subscribe'); ?>
		<?php echo $form->textField($model,'subscribe'); ?>
		<?php echo $form->error($model,'subscribe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastlogin'); ?>
		<?php echo $form->textField($model,'lastlogin'); ?>
		<?php echo $form->error($model,'lastlogin'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'datecreated'); ?>
		<?php echo $form->textField($model,'datecreated'); ?>
		<?php echo $form->error($model,'datecreated'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'datemodified'); ?>
		<?php echo $form->textField($model,'datemodified'); ?>
		<?php echo $form->error($model,'datemodified'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'dateactivated'); ?>
		<?php echo $form->textField($model,'dateactivated'); ?>
		<?php echo $form->error($model,'dateactivated'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->