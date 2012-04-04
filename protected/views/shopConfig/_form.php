<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shop-config-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sc_name'); ?>
		<?php echo $form->textField($model,'sc_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sc_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sc_address'); ?>
		<?php echo $form->textField($model,'sc_address',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'sc_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sc_email'); ?>
		<?php echo $form->textField($model,'sc_email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sc_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sc_phone'); ?>
		<?php echo $form->textField($model,'sc_phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sc_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sc_description'); ?>
		<?php echo $form->textArea($model,'sc_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sc_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->