<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form" >

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<br>
	<p class="note">Campos con <span class="required" style="color:red;">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="">
		<?php echo $form->labelEx($model,'Usuario*',array('size'=>80,'style'=>'font-size:20px;')); ?>
		<?php echo $form->textField($model,'username',array('size'=>80,'maxlength'=>128,'style'=>'font-size:20px;')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'password',array('size'=>80,'style'=>'font-size:20px;')); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>80,'maxlength'=>128,'style'=>'font-size:20px;')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="">
	<?php echo $form->labelEx($model,'Rol* ',array('size'=>120,'style'=>'font-size:20px;')); ?>&nbsp;&nbsp;
	<?php echo $form->dropDownList($model,'id_rol',array('1'=>'Administrador','2'=>'Usuario'), array('options' => array('2'=>array('selected'=>true))));?>

	</div>

	

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class" =>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->