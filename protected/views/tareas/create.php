<?php
/* @var $this TareasController */
/* @var $model Tareas */

$this->breadcrumbs=array(
	'Tareas'=>array('index'),
	'Nueva Tarea',
);

$this->menu=array(
	array('label'=>'Listar Tareas', 'url'=>array('index'),'itemOptions' => array('style' => 'margin;5px;border:2px solid black;')),

);
?>
<br>
<br><br>
<h1>Crear Tareas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>