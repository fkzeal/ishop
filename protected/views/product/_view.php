<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pd_id), array('view', 'id'=>$data->pd_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_name')); ?>:</b>
	<?php echo CHtml::encode($data->pd_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_image')); ?>:</b>
	<?php echo CHtml::encode($data->pd_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_description')); ?>:</b>
	<?php echo CHtml::encode($data->pd_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_instructions')); ?>:</b>
	<?php echo CHtml::encode($data->pd_instructions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_place')); ?>:</b>
	<?php echo CHtml::encode($data->pd_place); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_price')); ?>:</b>
	<?php echo CHtml::encode($data->pd_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_trans_price')); ?>:</b>
	<?php echo CHtml::encode($data->pd_trans_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_credits')); ?>:</b>
	<?php echo CHtml::encode($data->pd_credits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_total_qty')); ?>:</b>
	<?php echo CHtml::encode($data->pd_total_qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_month_sales')); ?>:</b>
	<?php echo CHtml::encode($data->pd_month_sales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pd_date')); ?>:</b>
	<?php echo CHtml::encode($data->pd_date); ?>
	<br />

	*/ ?>

</div>