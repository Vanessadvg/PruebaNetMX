<?php
/* @var $this TareasController */
/* @var $model Tareas */
/* @var $form CActiveForm */
?>

<div class="center" >

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tareas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<br>
	<p class="note" style="font-size:20px;">El campo es <span class="required" style="color:red;">*</span> obligatorio</p>

	<?php echo $form->errorSummary($model); ?>

	<div  class="">
		<?php echo $form->labelEx($model,'tarea',array('size'=>120,'style'=>'font-size:20px;')); ?>
		<?php echo $form->textField($model,'tarea',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tarea'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'descripcion',array('size'=>120,'style'=>'font-size:20px;')); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>200,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="" >
	<?php $id_usuario = Yii::app()->user->id; ?>
		<?php echo $form->hiddenField($model, 'id_usuario',array('value'=>$id_usuario) ); ?>
		
	</div>
    <div class="">
	<?php echo $form->labelEx($model,'prioridad',array('size'=>120,'style'=>'font-size:20px;')); ?>&nbsp;&nbsp;
	<?php echo $form->dropDownList($model,'prioridad',array('Baja'=>'Baja','Media'=>'Media','Alta'=>'Alta'), array('options' => array('Baja'=>array('selected'=>true))));?>
		<?php echo $form->error($model,'prioridad'); ?>
	</div>
	<div class="">
	<?php echo $form->labelEx($model,'estatus',array('size'=>120,'style'=>'font-size:20px;')); ?>&nbsp;&nbsp;
	<?php echo $form->dropDownList($model,'estatus',array('Abierta'=>'Abierta','En proceso'=>'En proceso','Cerrada'=>'Cerrada'), array('options' => array('Abierta'=>array('selected'=>true))));?>
		<?php echo $form->error($model,'estatus'); ?>
	</div>

	<div class=" buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->