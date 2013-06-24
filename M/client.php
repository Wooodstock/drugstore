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
        

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function getMode_remboursement() {
        return $this->mode_remboursement;
    }

    public function setMode_remboursement($mode_remboursement) {
        $this->mode_remboursement = $mode_remboursement;
    }

    public function getCotisation() {
        return $this->cotisation;
    }

    public function setCotisation($cotisation) {
        $this->cotisation = $cotisation;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }	
}

?>