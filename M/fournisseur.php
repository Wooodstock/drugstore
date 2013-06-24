<?php


class Fournisseur {
    private $id;
    private $nom;
    private $login;
    private $password;
    
    public function Fournisseur($id, $nom, $login, $password){
        $this->id =$id;
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
