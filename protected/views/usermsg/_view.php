<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('msg_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->msg_id), array('view', 'id'=>$data->msg_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('msg_content')); ?>:</b>
	<?php echo CHtml::encode($data->msg_content); ?>
	<br />


</div>