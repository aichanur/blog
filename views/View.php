<?php 

/**
 * 
 */
class View
{
	//fichier vue (qui va falloir envoyer à l'utilisateur)
     private $_file;

     //titre de la page
     private $_t;

     //action sera le nom le la vue qu l'on veut afficher
	function __construct($action)
	{
		$this->_file = 'views/view'.$action.'.php';
	}

	//crée une fonction qui va générer et afficher la vue
	//data est la variable qui va contenir les données dans la bdd
		public function generate($data){
			//definir le contenu à envoyer
			//la fonction generateFile va afficher la vue qu'il faut + les données de la bdd qui correspondent à cette vue(ex liste des articles)
			$content = $this->generateFile($this->_file,$data);


			//template qui va contenir tous cela pour eviter répétion avec les donnees à envoyer contenu dans un tableau qui va prendre le titre et le contenu )
			$view = $this->generateFile('views/template.php',array('t' => $this->_t,'content' => $content));

			echo $view;

		}

		private function generateFile($file,$data){
			//si le fichier existe
			if (file_exists($file)) {
				extract($data);

				//commencer la temporisation
				//on recup les elements en bdd ect et on les mets en mémoire temporaire pour bien charger
				ob_start();

				//tant que le require file n'est pas effectif on fait la temporisation et après si c'est bon on l'arrête ==> éviter d'avoir des données qui viennent s'afficher avant que la vue ne soit charger
				require $file;

				//arrêter la temporisation (et sort de la fonction)
				return ob_get_clean();
			}
			else{
				throw new Exception("Fichier ".$file." introuvable", 1);
			
		    }

		}










}


 ?>