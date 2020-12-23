<?php 

/**
 * 
 */
class ArticleManager extends Model
{
	
	// on crée la fonction qui va récupérer tous les articles dans la bdd 
	public function getArticles()
	{
		return $this->getAll ('articles','Article');
	} 


	//fonction pour afficher un seul article
	public function getArticle($id)
	{
		return $this->getOne('articles','Article', $id);
	}





}




 ?>