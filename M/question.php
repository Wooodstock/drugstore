<?php

Class Question{

	private $id;
	private $libelle;
	
	private $reponse;
	
	public __construct($id, $libelle){
		$this->id = $id;
		$this->libelle = $libelle;	
	}
	
	
	public function getId(){
    	return $this->id;
    }
    
    public function getLibelle(){
    	return $this->libelle;
    }
    
    public function getReponse(){
	    return $this->reponse;
    }
    
    public function setReponse($reponse){
	    $this->reponse = $reponse;
    }
}


?>