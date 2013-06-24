<?php

class Client{
	
	private $id;
	private $nom;
	private $status;
	private $adresse;
	private $telephone;
	private $mode_remboursement;
	private $cotisation;
	private $login;
	private $password;
	
        
        
    
    public function Client($id, $nom, $status, $adresse, $telephone, $mode_remboursement, $cotisation, $login, $password){
        $this->id = $id;
        $this->nom = $nom;
        $this->status = $status;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->mode_remboursement = $mode_remboursement;
        $this->cotisation = $cotisation;
        $this->login = $login;
        $this->password = $password;
    }
        

    //GETTER
    public function get_id(){
    return $this->id;
    }
    public function get_nom(){
    	return $this->nom;
    }
    public function get_status(){
	    return $this->status;
    }
	public function get_adresse(){
    	return $this->adresse;
    }
    public function get_telephone(){
	    return $this->telephone;
    }
    public function get_mode_remboursement(){
    	return $this->mode_remboursement;
    }
    public function get_cotisation(){
    	return $this->cotisation;
    }
    public function get_login(){
    	return $this->login;
    }
    public function get_password(){
    	return $this->password;
    }
	
	
	//SETTER
    public function set_id($value){
    	$this->id = $value;
	}
    public function set_nom($value){
    	$this->nom = $value;
    }
    public function set_status($value){
    	$this->status = $value;
    }
    public function set_adresse($value){
    	$this->adresse = $value;
    }
    public function set_telephone($value){
    	$this->telephone = $value;
    }
    public function set_mode_remboursement($value){
    	$this->mode_remboursement = $value;
    }
    public function set_cotisation($value){
    	$this->cotisation = $value;
    }
    public function set_login($value){
    	$this->login = $value;
    }
    public function set_password($value){
    	$this->password = $value;
    }
	
	
}

?>