<?php 

/**
 * 
 */
class Article 
{
	private $_id;
	private $_title;
	private $_content;
	private $_date;
	private $_preview;

	public function __construct(array $data){
		$this->hydrate($data);
	}

	// hydratation => de sécuriser les données
	//pour chaque élément dans data on crée une méthode(set) pour définir les valeurs des différents attributs (setId ,setTitle...)
	public function hydrate(array $data)
    {
		foreach ($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			// on verifie si la methode qu'on a crée existe
			if(method_exists($this, $method))
			{
				// on execute
				$this->$method($value);
			}
		}

	}

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

	public function setTitle($title)
	{
		if (is_string($title)) 
		{
			$this->_title= $title;
		}
	}

	public function setContent($content)
	{
		if (is_string($content)) 
		{
			$this->_content= $content;
		}
	}

	public function setPreview($preview)
	{
		if (is_string($preview)) 
		{
			$this->_preview= $preview;
		}
	}


	public function setDate($date)
	{
			$this->_date= $date;
	}

	//getters

	public function id()
	{
		return $this->_id;
	}

	public function title()
	{
		return $this->_title;
	}

	public function content()
	{
		return $this->_content;
	}
	public function preview()
	{
		return $this->_preview;
	}

	public function date()
	{
		return $this->_date;
	}




}







 ?>