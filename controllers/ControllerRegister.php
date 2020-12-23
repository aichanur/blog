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
			$this->register();
		}
	}


	private function register()
	{

		if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['userName']) && isset($_POST['name'])) {
            if ($_POST['password'] === $_POST['confirmPassword']) {
            	$this->_user = new User();
            	$this->setName($_POST['name']);
            	$this->setUsername($_POST['userName']);
            	$this->setEmail($_POST['email']);
            	$this->setPassword($_POST['password']);
            	
			}else{
				echo "Les mots de passe sont différents";
			}
	    }

	    $this->_view = new View('Register');
		$this->_view->generate(array('user' => $user));

    }

}




?>

