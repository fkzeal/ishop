<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->pd_id,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->pd_id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pd_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->pd_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pd_id',
		'cat_id',
		'pd_name',
		'pd_image',
		'pd_description',
		'pd_instructions',
		'pd_place',
		'pd_price',
		'pd_trans_price',
		'pd_credits',
		'pd_total_qty',
		'pd_month_sales',
		'pd_date',
	),
)); ?>
