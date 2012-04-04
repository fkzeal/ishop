<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'announce-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ann_date'); ?>
		<?php echo $form->textField($model,'ann_date'); ?>
		<?php echo $form->error($model,'ann_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ann_title'); ?>
		<?php echo $form->textField($model,'ann_title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ann_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ann_content'); ?>
		<?php echo $form->textArea($model,'ann_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ann_content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->