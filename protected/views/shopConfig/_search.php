<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sc_id'); ?>
		<?php echo $form->textField($model,'sc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sc_name'); ?>
		<?php echo $form->textField($model,'sc_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sc_address'); ?>
		<?php echo $form->textField($model,'sc_address',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sc_email'); ?>
		<?php echo $form->textField($model,'sc_email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sc_phone'); ?>
		<?php echo $form->textField($model,'sc_phone',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sc_description'); ?>
		<?php echo $form->textArea($model,'sc_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->