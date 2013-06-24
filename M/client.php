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
	
	public function Client(){
		//TODO
	}
	
	//GETTER
	public function get_id(){
    	return $id;
    }
    public function get_nom(){
    	return $nom;
    }
    public function get_status(){
	    return $status;
    }
	public function get_adresse(){
    	return $adresse;
    }
    public function get_telephone(){
	    return $telephone;
    }
    public function get_mode_remboursement(){
    	return $mode_remboursement;
    }
    public function get_cotisation(){
    	return $cotisation;
    }
    public function get_login(){
    	return $login;
    }
    public function get_password(){
    	return $password;
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