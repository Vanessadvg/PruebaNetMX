<?php
/* @var $this TareasController */
/* @var $model Tareas */

$this->breadcrumbs=array(
	'Tareas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Tareas', 'url'=>array('index'),'itemOptions' => array('style' => 'margin;5px;border-bottom:2px solid black;')),
	array('label'=>'Nueva Tarea', 'url'=>array('create'),'itemOptions' => array('style' => 'margin;5px;border-bottom:2px solid black;')),
	
	array('label'=>'Eliminar Tarea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de borra esta tarea?'),'itemOptions' => array('style' => 'margin;5px;border-bottom:2px solid black;')),

);
?>
<br><br><br>
<h1>Modificar Tarea <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>