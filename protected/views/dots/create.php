<?php
/* @var $this DotsController */
/* @var $model Dots */

$this->breadcrumbs=array(
	'Dots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dots', 'url'=>array('index')),
	array('label'=>'Manage Dots', 'url'=>array('admin')),
);
?>

<h1>Create Dots</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>