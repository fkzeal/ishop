<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recommendation-form',
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
		<?php echo $form->labelEx($model,'rem_date'); ?>
		<?php echo $form->textField($model,'rem_date'); ?>
		<?php echo $form->error($model,'rem_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rem_reason'); ?>
		<?php echo $form->textField($model,'rem_reason',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'rem_reason'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->