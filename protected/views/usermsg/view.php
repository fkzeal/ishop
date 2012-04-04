<?php
$this->breadcrumbs=array(
	'Usermsgs'=>array('index'),
	$model->msg_id,
);

$this->menu=array(
	array('label'=>'List Usermsg', 'url'=>array('index')),
	array('label'=>'Create Usermsg', 'url'=>array('create')),
	array('label'=>'Update Usermsg', 'url'=>array('update', 'id'=>$model->msg_id)),
	array('label'=>'Delete Usermsg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->msg_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usermsg', 'url'=>array('admin')),
);
?>

<h1>View Usermsg #<?php echo $model->msg_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'msg_id',
		'user_id',
		'msg_content',
	),
)); ?>
