<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pharmacien
 *
 * @author Bertrand
 */
class Pharmacien {
    private $id;
    private $nom;
    private $login;
    private $password;
    
    function __construct($id, $nom, $login, $password) {
        $this->id = $id;
        $this->nom = $nom;
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
