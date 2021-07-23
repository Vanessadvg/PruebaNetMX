
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
    'action'=>$this->createUrl("site/login"),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 
?>

<div class="form">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-45 p-b-20">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-40">
						Inicia Sesión
					</span>
					<span class="login100-form-avatar">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/av.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter username">
					<?php echo $form->labelEx($model,'username',array("class"=>"focus-input100")); ?><br>
						<?php echo $form->textField($model,'username',array("class"=>"input100")); ?>
						<?php echo $form->error($model,'username',array('style'=>'color:red;')); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
					<?php echo $form->labelEx($model,'password',array("class"=>"focus-input100")); ?><br>
						<?php echo $form->passwordField($model,'password',array("class"=>"input100")); ?>
						<?php echo $form->error($model,'password',array('style'=>'color:red;')); ?>
					</div>


					<div class="container-login100-form-btn">
                    <?php echo CHtml::submitButton('Entrar',array("class"=>"login100-form-btn")); ?>
                      
					</div>

					
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
    <?php $this->endWidget(); ?>
</div>