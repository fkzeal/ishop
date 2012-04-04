<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rem_id'); ?>
		<?php echo $form->textField($model,'rem_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_id'); ?>
		<?php echo $form->textField($model,'pd_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rem_date'); ?>
		<?php echo $form->textField($model,'rem_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rem_reason'); ?>
		<?php echo $form->textField($model,'rem_reason',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->