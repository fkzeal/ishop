<?php
$this->breadcrumbs=array(
	'Usermsgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usermsg', 'url'=>array('index')),
	array('label'=>'Manage Usermsg', 'url'=>array('admin')),
);
?>

<h1>Create Usermsg</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>