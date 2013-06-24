<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pharmacien_DAO
 *
 * @author Bertrand
 */

include('pharmacien.php');

class Pharmacien_DAO {
    private $DAO;
    private $conn;
    
    private static $_instance =null;
    
    function __construct() {
        $this->DAO = new DAO("pharmaweb", "admin");
    }
    
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new Pharmacien_DAO();
        }
        return self::$_instance;
    }
    
    public function getPharmacien($login, $password){
        $this->conn = $this->DAO->connect();
        $reponse = $this->conn->prepare('SELECT * FROM PHARMACIEN WHERE LOGIN_PHARMACIEN = ? AND PASSWORD_PHARMACIEN = ? ');
        $reponse->execute(array($login, $password));
        $donnee = $reponse->fetch();
        if($donnee != null){
            $pharmacien = new Pharmacien($donnee['ID_PHARMACIEN'], $donnee['NOM_PHARMACIEN'], $donnee['LOGIN_PHARMACIEN'], $donnee['PASSWORD_PHARMACIEN']);
            echo 'Pharmacien Found : '.$pharmacien->getNom();
            return $pharmacien;
        } else {
            echo 'No Pharmacien Found ';
            return null;
        }
    }
}

?>
