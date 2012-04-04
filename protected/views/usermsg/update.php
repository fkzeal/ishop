<?php
$this->breadcrumbs=array(
	'Usermsgs'=>array('index'),
	$model->msg_id=>array('view','id'=>$model->msg_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usermsg', 'url'=>array('index')),
	array('label'=>'Create Usermsg', 'url'=>array('create')),
	array('label'=>'View Usermsg', 'url'=>array('view', 'id'=>$model->msg_id)),
	array('label'=>'Manage Usermsg', 'url'=>array('admin')),
);
?>

<h1>Update Usermsg <?php echo $model->msg_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>