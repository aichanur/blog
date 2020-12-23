<?php 
require_once 'views/View.php';
/**
 * 
 */
class ControllerRegister
{

	private $_user;
	private $_view;
	

	public function __construct()
	{
		// on vérifie qu'on a bien une url dans la barre d'adresse et que l'on a qu'un seul paramètre (qui sera accueil) et pas d'autres en plus
		if(isset($url) && count($url)> 1)
		{
			throw new Exception("Page introuvable",1);
		}
		else
		{

			//affichage des articles avec methode articles
			$this->login();
		}
	}


	private function login()
	{

		if (isset($_POST['email']) && isset($_POST['password'])) {
            	$this->_user = new User();
            	$this->setName($_POST['name']);
            	$this->setEmail($_POST['email']);
            	$this->setPassword($_POST['password']);
	    }

	    $this->_view = new View('Login');
		$this->_view->generate(array('user' => $user));

    }

}




?>