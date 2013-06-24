<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of preparateur_DAO
 *
 * @author Bertrand
 */

include('preparateur.php');


class Preparateur_DAO {
    private $DAO;
    private $conn;
    
    private static $_instance = null;
    
    function __construct() {
        $this->DAO = new DAO("pharmaweb", "admin");
    }
    
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new Preparateur_DAO();
        }
        return self::$_instance;
    }
    
    public function getPreparateur($login, $password){
        $this->conn = $this->DAO->connect();
        $reponse = $this->conn->prepare('SELECT * FROM PREPARATEUR WHERE LOGIN_PREPARATEUR = ? AND PASSWORD_PREPARATEUR = ? ');
        $reponse->execute(array($login, $password));
        $donnee = $reponse->fetch();
        if($donnee != null){
            $preparateur = new Preparateur($donnee['ID_PREPARATEUR'], $donnee['NOM_PREPARATEUR'], $donnee['LOGIN_PREPARATEUR'], $donnee['PASSWORD_PREPARATEUR']);
            echo 'Preparateur Found : '.$preparateur->getNom();
            return $preparateur;
        } else {
            echo 'No Preparateur Found ';
            return null;
        }
    }
}

?>
