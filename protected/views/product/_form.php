<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_name'); ?>
		<?php echo $form->textField($model,'pd_name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'pd_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_image'); ?>
		<?php echo $form->textField($model,'pd_image',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'pd_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_description'); ?>
		<?php echo $form->textArea($model,'pd_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pd_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_instructions'); ?>
		<?php echo $form->textArea($model,'pd_instructions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pd_instructions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_place'); ?>
		<?php echo $form->textField($model,'pd_place',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pd_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_price'); ?>
		<?php echo $form->textField($model,'pd_price'); ?>
		<?php echo $form->error($model,'pd_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_trans_price'); ?>
		<?php echo $form->textField($model,'pd_trans_price'); ?>
		<?php echo $form->error($model,'pd_trans_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_credits'); ?>
		<?php echo $form->textField($model,'pd_credits'); ?>
		<?php echo $form->error($model,'pd_credits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_total_qty'); ?>
		<?php echo $form->textField($model,'pd_total_qty'); ?>
		<?php echo $form->error($model,'pd_total_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_month_sales'); ?>
		<?php echo $form->textField($model,'pd_month_sales'); ?>
		<?php echo $form->error($model,'pd_month_sales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pd_date'); ?>
		<?php echo $form->textField($model,'pd_date'); ?>
		<?php echo $form->error($model,'pd_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->