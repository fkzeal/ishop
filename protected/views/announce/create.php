<?php
$this->breadcrumbs=array(
	'Announces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Announce', 'url'=>array('index')),
	array('label'=>'Manage Announce', 'url'=>array('admin')),
);
?>

<h1>Create Announce</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>