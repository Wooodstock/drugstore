<?php

class Produit{
	
	private $id;
	private $nom;
	private $numlot;
	private $nomfabriquant;
	private $dateexpiration;
	private $typeremboursement;
	private $pourcentagesecu;
	private $pourcentagemutuelle;
	private $prix;
	


	public function get_id(){
    	return $id;
    }
    public function get_nom(){
    	return $nom;
    }
    public function get_numlot(){
    	return $numlot;
    }
    public function get_nomfabriquant(){
    	return $nomfabriquant;
    }
    public function get_dateexpiration(){
    	return $dateexpiration;
    }
    public function get_typeremboursement(){
    return $typeremboursement;
    }
    public function get_pourcentagesecu(){
    	return $pourcentagesecu;
    }
    public function get_pourcentagemutuelle(){
    	return $pourcentagemutuelle;
    }
    public function get_prix(){
    	return $prix;
    }

    public function set_id($value){
	    $this->id = $value;
	}
	public function set_nom($value){
    	$this->nom = $value;
    }
    public function set_numlot($value){
	    $this->numlot = $value;
    }
    public function set_nomfabriquant($value){
    	$this->nomfabriquant = $value;
    }
    public function set_dateexpiration($value){
    	$this->dateexpiration = $value;
    }
    public function set_typeremboursement($value){
    	$this->typeremboursement = $value;
    }
    public function set_pourcentagesecu($value){
    	$this->pourcentagesecu = $value;
    	}
    public function set_pourcentagemutuelle($value){
    	$this->pourcentagemutuelle = $value;
    }
    public function set_prix($value){
    	$this->prix = $value;
    }

}
?>