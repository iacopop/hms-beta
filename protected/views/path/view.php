<?php
/* @var $this PathController */
/* @var $model Path */

$this->breadcrumbs=array(
	'Paths'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Path', 'url'=>array('index')),
	array('label'=>'Create Path', 'url'=>array('create')),
	array('label'=>'Update Path', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Path', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Path', 'url'=>array('admin')),
);
?>

<h1>View Path #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'state',
	),
)); ?>
