<?php
/* @var $this TareasController */
/* @var $model Tareas */

$this->breadcrumbs=array(
	'Tareas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Tareas', 'url'=>array('index'),'itemOptions' => array('style' => 'margin;5px;border-bottom:2px solid black;')),
	array('label'=>'Nueva Tarea', 'url'=>array('create'),'itemOptions' => array('style' => 'margin;5px;border-bottom:2px solid black;')),
	array('label'=>'Modificar Tarea', 'url'=>array('update', 'id'=>$model->id),'itemOptions' => array('style' => 'margin;5px;border-bottom:2px solid black;')),
	array('label'=>'Eliminar Tarea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de borra esta tarea?'),'itemOptions' => array('style' => 'margin;5px;border-bottom:2px solid black;')),
	
);
?>

<h1>Tarea #<?php echo $model->id; ?></h1>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tarea',
		'descripcion',
		'estatus',
	),
)); ?>
