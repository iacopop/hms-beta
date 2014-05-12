<?php
/* @var $this DotsController */
/* @var $model Dots */

$this->breadcrumbs=array(
	'Dots'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dots', 'url'=>array('index')),
	array('label'=>'Create Dots', 'url'=>array('create')),
	array('label'=>'View Dots', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dots', 'url'=>array('admin')),
);
?>

<h1>Update Dots <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>