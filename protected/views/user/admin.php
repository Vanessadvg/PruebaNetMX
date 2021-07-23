<style>
	.border{
		border:solid;
	}
</style>
<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	
);

$this->menu=array(
	
	array('label'=>'Crear Usuario', 'url'=>array('create'),'itemOptions' => array('style' => 'margin;5px;border:2px solid black;')),
	array('label'=>'Salir', 'url'=>array('site/logout'),'itemOptions' => array('style' => 'margin;5px;border:2px solid #868e96;')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Usuarios</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'itemsCssClass'=>"table  table-striped  dataTable",
	'pager'=>array("htmlOptions" => array("class" => "pagination","style"=>"border:2px;text-align: center;")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'username',
		'password',
	
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'77'),
			'template'=>'{delete}      ',
			'deleteConfirmation'=>"js:'Estas segur@ de borrar:  '+$(this).parent().parent().children(':nth-child(1)').text()+'?'",
			
		),
	),
)); ?>
