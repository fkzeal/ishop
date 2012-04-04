<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
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
		<?php echo $form->labelEx($model,'od_date'); ?>
		<?php echo $form->textField($model,'od_date'); ?>
		<?php echo $form->error($model,'od_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_qty'); ?>
		<?php echo $form->textField($model,'od_qty'); ?>
		<?php echo $form->error($model,'od_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_shipping_status'); ?>
		<?php echo $form->textField($model,'od_shipping_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'od_shipping_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_shipping_name'); ?>
		<?php echo $form->textField($model,'od_shipping_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'od_shipping_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_shipping_address'); ?>
		<?php echo $form->textField($model,'od_shipping_address',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'od_shipping_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_shipping_potal_code'); ?>
		<?php echo $form->textField($model,'od_shipping_potal_code'); ?>
		<?php echo $form->error($model,'od_shipping_potal_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_shipping_phoneno'); ?>
		<?php echo $form->textField($model,'od_shipping_phoneno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'od_shipping_phoneno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_shipping_way'); ?>
		<?php echo $form->textField($model,'od_shipping_way',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'od_shipping_way'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_total_pay'); ?>
		<?php echo $form->textField($model,'od_total_pay'); ?>
		<?php echo $form->error($model,'od_total_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_pay_way'); ?>
		<?php echo $form->textField($model,'od_pay_way',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'od_pay_way'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_pay_status'); ?>
		<?php echo $form->textField($model,'od_pay_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'od_pay_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'od_total_credits'); ?>
		<?php echo $form->textField($model,'od_total_credits'); ?>
		<?php echo $form->error($model,'od_total_credits'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->