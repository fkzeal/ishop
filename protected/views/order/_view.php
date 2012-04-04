<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->od_id), array('view', 'id'=>$data->od_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_id')); ?>:</b>
	<?php echo CHtml::encode($data->pd_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_date')); ?>:</b>
	<?php echo CHtml::encode($data->od_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_qty')); ?>:</b>
	<?php echo CHtml::encode($data->od_qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_shipping_status')); ?>:</b>
	<?php echo CHtml::encode($data->od_shipping_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_shipping_name')); ?>:</b>
	<?php echo CHtml::encode($data->od_shipping_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('od_shipping_address')); ?>:</b>
	<?php echo CHtml::encode($data->od_shipping_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_shipping_potal_code')); ?>:</b>
	<?php echo CHtml::encode($data->od_shipping_potal_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_shipping_phoneno')); ?>:</b>
	<?php echo CHtml::encode($data->od_shipping_phoneno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_shipping_way')); ?>:</b>
	<?php echo CHtml::encode($data->od_shipping_way); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_total_pay')); ?>:</b>
	<?php echo CHtml::encode($data->od_total_pay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_pay_way')); ?>:</b>
	<?php echo CHtml::encode($data->od_pay_way); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_pay_status')); ?>:</b>
	<?php echo CHtml::encode($data->od_pay_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('od_total_credits')); ?>:</b>
	<?php echo CHtml::encode($data->od_total_credits); ?>
	<br />

	*/ ?>

</div>