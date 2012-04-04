<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->com_id), array('view', 'id'=>$data->com_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_id')); ?>:</b>
	<?php echo CHtml::encode($data->pd_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_content')); ?>:</b>
	<?php echo CHtml::encode($data->com_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_grade')); ?>:</b>
	<?php echo CHtml::encode($data->com_grade); ?>
	<br />


</div>