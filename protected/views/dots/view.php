<?php
/* @var $this DotsController */
/* @var $model Dots */

$this->breadcrumbs=array(
	'Dots'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dots', 'url'=>array('index')),
	array('label'=>'Create Dots', 'url'=>array('create')),
	array('label'=>'Update Dots', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dots', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dots', 'url'=>array('admin')),
);
?>

<h1>View Dots #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'path_id',
		'user_id',
		'value',
		'state',
		'comment',
	),
)); ?>
