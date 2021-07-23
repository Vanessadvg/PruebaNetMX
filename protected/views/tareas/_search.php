<?php
/* @var $this TareasController */
/* @var $model Tareas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<br>
<div class="">

      
		<?php echo $form->label($model,'prioridad',array('size'=>40)); ?>:
		<?php echo $form->textField($model,'prioridad',array('size'=>10,'maxlength'=>25,'style'=>'text-align:center;')); ?>
	</div>
	<div class="">

      
		<?php echo $form->label($model,'estatus',array('size'=>40)); ?>:
		<?php echo $form->textField($model,'estatus',array('size'=>10,'maxlength'=>25,'style'=>'text-align:center;')); ?>
	</div>
<br>
	<div class="buttons">
	<?php echo CHtml::submitButton('Search',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->