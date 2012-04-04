<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cart_id), array('view', 'id'=>$data->cart_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_id')); ?>:</b>
	<?php echo CHtml::encode($data->pd_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_session_id')); ?>:</b>
	<?php echo CHtml::encode($data->cart_session_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_qty')); ?>:</b>
	<?php echo CHtml::encode($data->cart_qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_pay')); ?>:</b>
	<?php echo CHtml::encode($data->cart_pay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_credits')); ?>:</b>
	<?php echo CHtml::encode($data->cart_credits); ?>
	<br />


</div>