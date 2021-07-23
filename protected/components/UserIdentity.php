<?php /** * UserIdentity represents the data needed to identity a user. * It contains the authentication method that checks if the provided * data can identity the user. */
		 class UserIdentity extends CUserIdentity { 
			 private $_id;
			  public function authenticate(){ 
				 
			$user=User::model()->findByAttributes(array('username'=>$this->username));
			if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
			else if($this->password!==$user->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
			else{
			
			$this->errorCode=self::ERROR_NONE;
			$this->_id=$user->id;
			$this->username=$user->username;
			if($user->id_rol == 1)
			$this->setState('administrador', true);
	        else  
			$this->setState('administrador', false);
			
			}
			return $this->errorCode==self::ERROR_NONE;
			}
			 
			public function getId(){
			return $this->_id;
			}
		}