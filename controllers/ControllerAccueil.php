<?php 
require_once 'views/View.php';
/**
 * 
 */
class ControllerAccueil
{

	private $_articleManager;
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
			$this->articles();
		}
	}


	private function articles()
	{
		$this->_articleManager = new ArticleManager();
		// appel de la méthode getArticles() de la classe ArticleManager(je peux car c'est une instance)
		$articles = $this->_articleManager->getArticles();
		//articles est le tableau var(de getAll() dans Model)
		$this->_view = new View('Accueil');
		$this->_view->generate(array('articles' => $articles));
	}

}




?>