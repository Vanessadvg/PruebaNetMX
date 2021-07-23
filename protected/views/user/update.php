<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	
	'Modificar',
	$model->username=>array('view','id'=>$model->username),
);

$this->menu=array(  
	array('label'=>'Listar Usuarios', 'url'=>array('admin')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Ver Usuarios', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>
<br><br>
<h1>Modificar Usuario </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>