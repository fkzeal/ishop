<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ann_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ann_id), array('view', 'id'=>$data->ann_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ann_date')); ?>:</b>
	<?php echo CHtml::encode($data->ann_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ann_title')); ?>:</b>
	<?php echo CHtml::encode($data->ann_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ann_content')); ?>:</b>
	<?php echo CHtml::encode($data->ann_content); ?>
	<br />


</div>