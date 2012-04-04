<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sc_id), array('view', 'id'=>$data->sc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sc_name')); ?>:</b>
	<?php echo CHtml::encode($data->sc_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sc_address')); ?>:</b>
	<?php echo CHtml::encode($data->sc_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sc_email')); ?>:</b>
	<?php echo CHtml::encode($data->sc_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sc_phone')); ?>:</b>
	<?php echo CHtml::encode($data->sc_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sc_description')); ?>:</b>
	<?php echo CHtml::encode($data->sc_description); ?>
	<br />


</div>