<?php
/* @var $this DotsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dots',
);

$this->menu=array(
	array('label'=>'Create Dots', 'url'=>array('create')),
	array('label'=>'Manage Dots', 'url'=>array('admin')),
);
?>

<h1>Dots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
