<?php
$this->breadcrumbs=array(
	'Shop Configs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ShopConfig', 'url'=>array('index')),
	array('label'=>'Manage ShopConfig', 'url'=>array('admin')),
);
?>

<h1>Create ShopConfig</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>