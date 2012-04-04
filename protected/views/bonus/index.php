<?php
$this->breadcrumbs=array(
	'Bonuses',
);

$this->menu=array(
	array('label'=>'Create Bonus', 'url'=>array('create')),
	array('label'=>'Manage Bonus', 'url'=>array('admin')),
);
?>

<h1>Bonuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
