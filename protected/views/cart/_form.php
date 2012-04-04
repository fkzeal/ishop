<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cart-form',
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
		<?php echo $form->labelEx($model,'cart_session_id'); ?>
		<?php echo $form->textField($model,'cart_session_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cart_session_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_qty'); ?>
		<?php echo $form->textField($model,'cart_qty'); ?>
		<?php echo $form->error($model,'cart_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_pay'); ?>
		<?php echo $form->textField($model,'cart_pay'); ?>
		<?php echo $form->error($model,'cart_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_credits'); ?>
		<?php echo $form->textField($model,'cart_credits'); ?>
		<?php echo $form->error($model,'cart_credits'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->