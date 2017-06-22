<?php
/* @var $this AdminController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">
<!--    --><?php //var_dump( Post::getGenderOptions());exit()?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
    	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
//    'gender'=>array(
//        'type'=>'dropdownlist',
//        'items'=>array(1=>'test1', 2=>'test2'),
//        'prompt'=>'Выберите значение:',
//    ),
)); ?>
<!--    --><?php //echo (Post::getGenderOptions() ); exit();?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_lists'); ?>

        <?php echo $form->dropDownList($model,'id_lists',array(5=>'test1', 9=>'test2')); ?>
		<?php echo $form->error($model,'id_lists'); ?>
	</div>
	<div class="row">
        <?php echo $form->labelEx($model,'image'); ?>
        <?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'date_create'); ?>
<!--		--><?php //echo $form->textField($model,'date_create'); ?>
<!--		--><?php //echo $form->error($model,'date_create'); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'last_status_change'); ?>
		<?php echo $form->textField($model,'last_status_change'); ?>
		<?php echo $form->error($model,'last_status_change'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->