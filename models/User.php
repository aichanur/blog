<?php 


/**
 * 
 */
class User
{
	private $_id;
	private $_name;
	private $_userName;
	private $_email;
	private $_password;

	
	// setters

	public function setId($id)
	{
		// on caste 
		$id = (int) $id;
		if($id > 0)
		{
			$this->_id = $id;
		}

	}

	public function setName($name)
	{
		if (is_string($name)) 
		{
			$this->_name= $name;
		}
	}

	public function setUserName($userName)
	{
			$this->_userName= $userName;
	}

	public function setEmail($email)
	{
			$this->_email= $email;
	}


	public function setPassword($password)
	{
			$this->_password= $password;
	}

	//getters

	public function id()
	{
		return $this->_id;
	}

	public function name()
	{
		return $this->_name;
	}

	public function userName()
	{
		return $this->_userName;
	}
	public function email()
	{
		return $this->_email;
	}

	public function password()
	{
		return $this->_password;
	}




}





 ?>

