<?php
$this->breadcrumbs=array(
	'Recommendations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recommendation', 'url'=>array('index')),
	array('label'=>'Manage Recommendation', 'url'=>array('admin')),
);
?>

<h1>Create Recommendation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>