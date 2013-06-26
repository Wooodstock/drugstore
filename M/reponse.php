<?php


Class Reponse{
	
    private $id;
    private $libelle;
	
    public function __construct($libelle){
            $this->libelle = $libelle;
    }
	
	
    public function getId(){
        return $this->id;
    }
    public function getLibelle(){
    	return $this->libelle;
    }
    public function setId($id){
    	$this->id = $id;
    }
    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }
	
}

?>

