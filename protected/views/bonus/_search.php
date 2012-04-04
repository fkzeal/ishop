<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bonus_id'); ?>
		<?php echo $form->textField($model,'bonus_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_id'); ?>
		<?php echo $form->textField($model,'pd_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus_price'); ?>
		<?php echo $form->textField($model,'bonus_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus_credits'); ?>
		<?php echo $form->textField($model,'bonus_credits'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->