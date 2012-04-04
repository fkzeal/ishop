<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pd_id'); ?>
		<?php echo $form->textField($model,'pd_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_name'); ?>
		<?php echo $form->textField($model,'pd_name',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_image'); ?>
		<?php echo $form->textField($model,'pd_image',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_description'); ?>
		<?php echo $form->textArea($model,'pd_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_instructions'); ?>
		<?php echo $form->textArea($model,'pd_instructions',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_place'); ?>
		<?php echo $form->textField($model,'pd_place',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_price'); ?>
		<?php echo $form->textField($model,'pd_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_trans_price'); ?>
		<?php echo $form->textField($model,'pd_trans_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_credits'); ?>
		<?php echo $form->textField($model,'pd_credits'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_total_qty'); ?>
		<?php echo $form->textField($model,'pd_total_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_month_sales'); ?>
		<?php echo $form->textField($model,'pd_month_sales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pd_date'); ?>
		<?php echo $form->textField($model,'pd_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->