<?php
$this->breadcrumbs=array(
	'Recommendations'=>array('index'),
	$model->rem_id=>array('view','id'=>$model->rem_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recommendation', 'url'=>array('index')),
	array('label'=>'Create Recommendation', 'url'=>array('create')),
	array('label'=>'View Recommendation', 'url'=>array('view', 'id'=>$model->rem_id)),
	array('label'=>'Manage Recommendation', 'url'=>array('admin')),
);
?>

<h1>Update Recommendation <?php echo $model->rem_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>