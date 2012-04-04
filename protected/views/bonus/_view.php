<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bonus_id), array('view', 'id'=>$data->bonus_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_id')); ?>:</b>
	<?php echo CHtml::encode($data->pd_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_price')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_credits')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_credits); ?>
	<br />


</div>