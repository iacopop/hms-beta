<?php
/* @var $this PathController */
/* @var $model Path */

$this->breadcrumbs=array(
	'Paths'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Path', 'url'=>array('index')),
	array('label'=>'Manage Path', 'url'=>array('admin')),
);
?>

<h1>Create Path</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>