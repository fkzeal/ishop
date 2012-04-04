<?php
$this->breadcrumbs=array(
	'Announces'=>array('index'),
	$model->ann_id=>array('view','id'=>$model->ann_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Announce', 'url'=>array('index')),
	array('label'=>'Create Announce', 'url'=>array('create')),
	array('label'=>'View Announce', 'url'=>array('view', 'id'=>$model->ann_id)),
	array('label'=>'Manage Announce', 'url'=>array('admin')),
);
?>

<h1>Update Announce <?php echo $model->ann_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>