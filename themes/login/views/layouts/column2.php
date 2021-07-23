<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container" style="padding-top:0">
	<div class="row-fluid">
		<div class="span12">
			<?php
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('width'=>'77','class'=>'nav nav-pills pull-right','style'=>'padding-letf:20px;'),
					
				));
			?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $content; ?>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>