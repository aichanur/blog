<?php 

/**
 * 
 */
class UserManager extends Model
{
	
		//  function setBdd()
		// {
		// 	self::$_bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','');

		// 	//on utilise les constantes de PDO pour gérer les erreurs

		// 	self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

		// }
		// //fonction de connexion par defaut à la bdd
	 //     function getBdd()
		// {
		// 	//si il est pas déjà connecté à la bdd il se connecte
		// 	if(self::$_bdd == null)
		// 	{
		// 		self::setBdd();
		// 		return self::$_bdd;
		// 	}

		// }


		
		//    //on se connecte a la bdd
		// 	$this->getBdd();
		// 	// on crée un tableau
		// 	//$var = [];
		// 	// on crée la requête de récupération (ordonner de plus récent au moins récent)
		// 	// le fait d'abstraire la bdd permet de garantir plus de sécurité
		// 	$req = self::$_bdd->prepare('INSERT INTO user (id, name, userName, email, password) VALUES (null, :name, :userName, :email, :password)');
 	// 		 $req->bindValue(':name',$_user->name(), \PDO::PARAM_STR);
 	// 	     $req->bindValue(':userName',$_user->userName(), \PDO::PARAM_STR);
 	// 	     $req->bindValue(':email',$_user->email(), \PDO::PARAM_STR);
 	// 	     $req->bindValue(':password',password_hash($_user->password(),PASSWORD_BCRYPT), \PDO::PARAM_STR);
 	// 	     $req->execute();
			
		// 	$req->execute();


	

	//fonction pour afficher un seul article
	public function getArticle($id)
	{
		return $this->getOne('user','User', $id);
	}

 ?>