<?php
/* @var $this PathController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paths',
);

$this->menu=array(
	array('label'=>'Create Path', 'url'=>array('create')),
	array('label'=>'Manage Path', 'url'=>array('admin')),
);
?>

<h1>Paths</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
