<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		 $username=strtolower($this->username);
		$password=strtolower($this->password);
		$user=User::model()->find('user_name=?',array($username));
		if($user==null)
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}else if($user->user_password!==$password)
		{
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}else{
			$this->_id=$user->user_id;
			$this->username=$user->user_name;
			$this->password=$user->user_password;
			$this->errorCode=self::ERROR_NONE;
		}
		 // if($username=='admin')
		 // {
			 // $this->errorCode=self::ERROR_NONE;
		 // }
		
		return $this->errorCode==self::ERROR_NONE;	
	}
	public function getId()
    {
        return $this->_id;
    }
}