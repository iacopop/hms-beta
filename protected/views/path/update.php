<?php
/* @var $this PathController */
/* @var $model Path */

$this->breadcrumbs=array(
	'Paths'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Path', 'url'=>array('index')),
	array('label'=>'Create Path', 'url'=>array('create')),
	array('label'=>'View Path', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Path', 'url'=>array('admin')),
);
?>

<h1>Update Path <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>