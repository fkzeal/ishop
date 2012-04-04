<?php
$this->breadcrumbs=array(
	'Recommendations'=>array('index'),
	$model->rem_id,
);

$this->menu=array(
	array('label'=>'List Recommendation', 'url'=>array('index')),
	array('label'=>'Create Recommendation', 'url'=>array('create')),
	array('label'=>'Update Recommendation', 'url'=>array('update', 'id'=>$model->rem_id)),
	array('label'=>'Delete Recommendation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rem_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recommendation', 'url'=>array('admin')),
);
?>

<h1>View Recommendation #<?php echo $model->rem_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rem_id',
		'pd_id',
		'rem_date',
		'rem_reason',
	),
)); ?>
