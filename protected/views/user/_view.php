<?php
/* @var $this UsersController */
/* @var $data Users */
?>


    <div class="media">
	<div class="media-body">
		<h3 class="media-heading">
		<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		<?php echo CHtml::encode($data->username); ?><small>	<?php echo CHtml::encode($data->email); ?></small>
	</h3>
	<p><?php echo CHtml::encode($data->password); ?> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, debitis, deserunt voluptas porro animi fuga neque vitae, dolores quia eaque esse dolorum nulla a. Qui perspiciatis quis necessitatibus architecto velit!</p>
	</div>
</div>