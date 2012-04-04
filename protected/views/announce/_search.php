<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ann_id'); ?>
		<?php echo $form->textField($model,'ann_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ann_date'); ?>
		<?php echo $form->textField($model,'ann_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ann_title'); ?>
		<?php echo $form->textField($model,'ann_title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ann_content'); ?>
		<?php echo $form->textArea($model,'ann_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->