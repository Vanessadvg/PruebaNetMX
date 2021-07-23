<?php
/* @var $this TareasController */
/* @var $model Tareas */

$this->breadcrumbs=array(
	'Tareas'=>array('index'),
);

$this->menu=array(
	
	array('label'=>'Nueva Tarea', 'url'=>array('create'),'style'=>'font-size:20px;','itemOptions' => array('style' => 'margin;5px;border-bottom:2px solid black;')),
	array('label'=>'Salir', 'url'=>array('site/logout'),'itemOptions' => array('style' => 'margin;5px;border-bottom:2px solid #868e96;')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tareas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<h1><strong>Tareas</strong></h1>
<br>
<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button',"style"=>"font-size:20px;color:#007bff;")); ?>
&nbsp&nbsp<img style="width:15px;heigth:15px;"src="<?php echo Yii::app()->request->baseUrl;?>/images/busca.png" alt="buscar">
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tareas-grid',
	'itemsCssClass'=>"table   dataTable",
	'pager'=>array("htmlOptions" => array("class" => "pagination","style"=>"border:2px;text-align: center;")),
	'dataProvider'=>$model->search(),
    'rowCssClassExpression'=> '$data->getCssClass()',
	'filter'=>$model,
	'columns'=>array(
		

		array(

			'name'  => 'tarea',
		   
			'value' => 'CHtml::link($data->tarea, array("view", "id"=>$data->id))',
		   
			'type'  => 'raw',
		),
	 'estatus'
		,
		'prioridad',
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'77'),
			'template'=>'{delete}       {update}',
			'deleteConfirmation'=>"js:'Estas segur@ de borrar:  '+$(this).parent().parent().children(':nth-child(1)').text()+'?'",
			
		),
		
	),
)); ?>
