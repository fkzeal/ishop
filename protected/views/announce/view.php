<?php
$this->breadcrumbs=array(
	'Announces'=>array('index'),
	$model->ann_id,
);

$this->menu=array(
	array('label'=>'List Announce', 'url'=>array('index')),
	array('label'=>'Create Announce', 'url'=>array('create')),
	array('label'=>'Update Announce', 'url'=>array('update', 'id'=>$model->ann_id)),
	array('label'=>'Delete Announce', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ann_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Announce', 'url'=>array('admin')),
);
?>

<h1>View Announce #<?php echo $model->ann_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ann_id',
		'ann_date',
		'ann_title',
		'ann_content',
	),
)); ?>
