<?php
$this->breadcrumbs=array(
	'Shop Configs'=>array('index'),
	$model->sc_id=>array('view','id'=>$model->sc_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ShopConfig', 'url'=>array('index')),
	array('label'=>'Create ShopConfig', 'url'=>array('create')),
	array('label'=>'View ShopConfig', 'url'=>array('view', 'id'=>$model->sc_id)),
	array('label'=>'Manage ShopConfig', 'url'=>array('admin')),
);
?>

<h1>Update ShopConfig <?php echo $model->sc_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>