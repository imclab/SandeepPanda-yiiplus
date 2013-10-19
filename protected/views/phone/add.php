<?php
/* @var $this PhoneController */
/* @var $model Phone */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'phone-add-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memory'); ?>
		<?php echo $form->textField($model,'memory'); ?>
		<?php echo $form->error($model,'memory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'camera'); ?>
		<?php echo $form->textField($model,'camera'); ?>
		<?php echo $form->error($model,'camera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'screen_size'); ?>
		<?php echo $form->textField($model,'screen_size'); ?>
		<?php echo $form->error($model,'screen_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'os'); ?>
		<?php echo $form->textField($model,'os'); ?>
		<?php echo $form->error($model,'os'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->