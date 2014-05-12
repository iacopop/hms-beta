<?php
/* @var $this DotsController */
/* @var $model Dots */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dots-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
                <?php 
                    $path = Path::model()->findAll();
                    $pathList = CHtml::listData($path, 'id', 'title');
                ?>
		<?php echo $form->labelEx($model,'path_id'); ?>
                <?php echo $form->dropDownList($model, 'path_id',$pathList, array('prompt'=>'Select Path')); ?>
		<?php //echo $form->textField($model,'path_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'path_id'); ?>
	</div>

	<div class="row">
                <?php 
                    $user = User::model()->findAll();
                    $userList = CHtml::listData($user, 'id', 'username');
                ?>                
		<?php echo $form->labelEx($model,'user_id'); ?>
                <?php echo $form->dropDownList($model, 'user_id',$userList, array('prompt'=>'Select User')); ?>
		<?php //echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->