<?php

class LoginController extends Controller
{
    public function actionIndex()
	{
		$this->layout="main";
		
		$model=new LoginForm; 
	
		$this->render('login',array("model"=>$model));
	}
}
?>