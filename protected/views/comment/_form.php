<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
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
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_content'); ?>
		<?php echo $form->textArea($model,'com_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'com_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_grade'); ?>
		<?php echo $form->textField($model,'com_grade'); ?>
		<?php echo $form->error($model,'com_grade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->