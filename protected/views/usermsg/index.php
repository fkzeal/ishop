<?php
$this->breadcrumbs=array(
	'Usermsgs',
);

$this->menu=array(
	array('label'=>'Create Usermsg', 'url'=>array('create')),
	array('label'=>'Manage Usermsg', 'url'=>array('admin')),
);
?>

<h1>Usermsgs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
