<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rem_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rem_id), array('view', 'id'=>$data->rem_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_id')); ?>:</b>
	<?php echo CHtml::encode($data->pd_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rem_date')); ?>:</b>
	<?php echo CHtml::encode($data->rem_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rem_reason')); ?>:</b>
	<?php echo CHtml::encode($data->rem_reason); ?>
	<br />


</div>