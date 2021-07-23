<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('admin')),

);
?>

<h1>Crear Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>