<?php 
require_once 'views/View.php';
/**
 * 
 */
class Router
{
	private $ctrl;//pour déterminer le controller 
	private $view;// pour déterminer la view à afficher
	
	//fonction qui va gérer l'url
	public function routeReq()
	{
		try
		{
			//permet d'instancier les classes (pour eviter d'écrire à chaque fois $router -> new Router())
			//chargement automatique des classes du dossiers models
			spl_autoload_register(function($class){
				//ici si j'y arrive utilser composer pour charger automatiquement tout
				require_once('models/'.$class.'.php');
			});
				//on crée une variable $url
			$url='';

				//on va déterminer le controller en fonction de la valeur de cette variable 
			if(isset($_GET['url']))
			{
					//on décompose l'url par un / et on lui applique un filtre
					$url = explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
					//on recupere le premier parametre de url 
					//on le met tout en minuscule puis on met sa premiere lettre en majuscule
					$controller = ucfirst(strtolower($url[0]));//Accueil

					$controllerClass = "Controller".$controller;//ControllerAccueil(pour avoir le bon controller)

					//on retrouve le chemin du controller voulu
					$controllerFile = "controllers/".$controllerClass.".php";


					//on vérifie si le fichier du controller  existe
					if (file_exists($controllerFile)) 
					{
						//on lance la classe en question avec tous les paramètres url pour respecter l'encapsulation


						//on appelle le fichier en question
						require_once($controllerFile);

						$this->ctrl = new $controllerClass ($url);
					}
					else 
					{
						throw new Exception("Page introuvable", 1);
						
					}
					


				}
				else
				{//si l'utlisteur tape n'impotre quoi dans l'url faut qd même qu'on le redirige vers une page
					require_once('controllers/ControllerAccueil.php');
					$this->ctrl = new ControllerAccueil($url);
				}
		}

		catch(Exception $e)
		{
			$errorMsg = $e->getMessage();
			//création d'un objet de la class View
			$this->_view = new View('Error');
			$this->_view->generate(array('errorMsg' => $errorMsg));
			

		}
	}
	
}
?>
  