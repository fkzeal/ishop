<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cart_id'); ?>
		<?php echo $form->textField($model,'cart_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_id'); ?>
		<?php echo $form->textField($model,'pd_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_session_id'); ?>
		<?php echo $form->textField($model,'cart_session_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_qty'); ?>
		<?php echo $form->textField($model,'cart_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_pay'); ?>
		<?php echo $form->textField($model,'cart_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_credits'); ?>
		<?php echo $form->textField($model,'cart_credits'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->