<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->od_id,
);

$this->menu=array(
	array('label'=>'List Order', 'url'=>array('index')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'Update Order', 'url'=>array('update', 'id'=>$model->od_id)),
	array('label'=>'Delete Order', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->od_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Order', 'url'=>array('admin')),
);
?>

<h1>View Order #<?php echo $model->od_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'od_id',
		'pd_id',
		'user_id',
		'od_date',
		'od_qty',
		'od_shipping_status',
		'od_shipping_name',
		'od_shipping_address',
		'od_shipping_potal_code',
		'od_shipping_phoneno',
		'od_shipping_way',
		'od_total_pay',
		'od_pay_way',
		'od_pay_status',
		'od_total_credits',
	),
)); ?>
