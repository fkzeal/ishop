<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'od_id'); ?>
		<?php echo $form->textField($model,'od_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_id'); ?>
		<?php echo $form->textField($model,'pd_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_date'); ?>
		<?php echo $form->textField($model,'od_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_qty'); ?>
		<?php echo $form->textField($model,'od_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_shipping_status'); ?>
		<?php echo $form->textField($model,'od_shipping_status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_shipping_name'); ?>
		<?php echo $form->textField($model,'od_shipping_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_shipping_address'); ?>
		<?php echo $form->textField($model,'od_shipping_address',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_shipping_potal_code'); ?>
		<?php echo $form->textField($model,'od_shipping_potal_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_shipping_phoneno'); ?>
		<?php echo $form->textField($model,'od_shipping_phoneno',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_shipping_way'); ?>
		<?php echo $form->textField($model,'od_shipping_way',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_total_pay'); ?>
		<?php echo $form->textField($model,'od_total_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_pay_way'); ?>
		<?php echo $form->textField($model,'od_pay_way',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_pay_status'); ?>
		<?php echo $form->textField($model,'od_pay_status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_total_credits'); ?>
		<?php echo $form->textField($model,'od_total_credits'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->