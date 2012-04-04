<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bonus-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_id'); ?>
		<?php echo $form->textField($model,'pd_id'); ?>
		<?php echo $form->error($model,'pd_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonus_price'); ?>
		<?php echo $form->textField($model,'bonus_price'); ?>
		<?php echo $form->error($model,'bonus_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonus_credits'); ?>
		<?php echo $form->textField($model,'bonus_credits'); ?>
		<?php echo $form->error($model,'bonus_credits'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->