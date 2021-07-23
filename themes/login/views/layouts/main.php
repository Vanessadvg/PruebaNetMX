<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Tareas
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
  
    
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/main.css">
<!--===============================================================================================-->
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="icon" type="image/png" href="<?php echo Yii::app()->theme->baseUrl;?>/images/icons/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl?>/ico/favicon.png">
  </head>

  <body style="padding-top:15px">


<?php if(!empty($this->breadcrumbs)):?>
  <div class="container-fluid" style="padding-top:0">
  <div class="row-fluid">
  <div class="span12">
      <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'htmlOptions'=>array("style"=>"margin: 10px 0;"),
        'links'=>$this->breadcrumbs,
      )); ?><!-- breadcrumbs -->
  </div>
  </div> 
  </div>
<?php endif?>
<?php if(($msgs=Yii::app()->user->getFlashes())!==null and $msgs!==array()):?>
  <div class="container-fluid" style="padding-top:0">
    <div class="row-fluid">
      <div class="span12">
        <?php foreach($msgs as $type => $message):?>
          <div class="alert alert-<?php echo $type?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><?php echo ucfirst($type)?>!</h4>
            <?php echo $message?>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
<?php endif;?>
<?php echo $content;?>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo Yii::app()->theme->baseUrl;?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/main.js"></script>
  </body>
</html>