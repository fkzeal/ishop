<?php
$this->breadcrumbs=array(
	'Shop Configs'=>array('index'),
	$model->sc_id,
);

$this->menu=array(
	array('label'=>'List ShopConfig', 'url'=>array('index')),
	array('label'=>'Create ShopConfig', 'url'=>array('create')),
	array('label'=>'Update ShopConfig', 'url'=>array('update', 'id'=>$model->sc_id)),
	array('label'=>'Delete ShopConfig', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ShopConfig', 'url'=>array('admin')),
);
?>

<h1>View ShopConfig #<?php echo $model->sc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sc_id',
		'sc_name',
		'sc_address',
		'sc_email',
		'sc_phone',
		'sc_description',
	),
)); ?>
