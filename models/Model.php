<?php 

	
	abstract class Model
	{

		private static $_bdd;

		//connexion a la bdd
		protected static function setBdd()
		{
			self::$_bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','');

			//on utilise les constantes de PDO pour gérer les erreurs

			self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

		}
		//fonction de connexion par defaut à la bdd
		protected function getBdd()
		{
			//si il est pas déjà connecté à la bdd il se connecte
			if(self::$_bdd == null)
			{
				self::setBdd();
				return self::$_bdd;
			}
		}


		//creation de la méthode de recuperation de la liste d'éléments dans la bdd avec en param le nom de la table et l'objet que je veux récup en particulier
		protected function getAll($table,$obj)
		{
			//on se connecte a la bdd
			$this->getBdd();
			// on crée un tableau
			$var = [];
			// on crée la requête de récupération (ordonner de plus récent au moins récent)
			// le fait d'abstraire la bdd permet de garantir plus de sécurité
			$req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY id desc');
			
			$req->execute();

			// on crée la variable data qui va contenir les données que l'on récupère de la table cible
			while ($data = $req->fetch(PDO::FETCH_ASSOC)) 
			{
				//on remplit var avec les données sous forme d'objet
				$var[] = new $obj($data);

			}
			return $var;
			// fin de la requête
			$req->closeCursor();


		}



		//cette fonction a obtenir 1 seul article,1 seul Post,1 seul commentaire ...
		protected function getOne($table, $obj, $id)
		{
			//on se connecte a la bdd
			$this->getBdd();
			// on crée un tableau
			$var = [];
			
			$req = self::$_bdd->prepare("SELECT id, title, content, DATE_FORMAT(date, '%d/%m/%Y à %Hh%imin%ss') AS date FROM " .$table. " WHERE id = ?");
			
			$req->execute(array($id));

			// on crée la variable data qui va contenir les données que l'on récupère de la table cible
			while ($data = $req->fetch(PDO::FETCH_ASSOC)) 
			{
				//on remplit var avec les données sous forme d'objet
				$var[] = new $obj($data);

			}
			return $var;
			// fin de la requête
			$req->closeCursor();


		}





}


	
    

 ?>