<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fournisseur_DAO
 *
 * @author Bertrand
 */

include('fournisseur.php');
class Fournisseur_DAO {
    
    private $DAO;
    private $conn;
    
    private static $_instance = null;
    
    function __construct() {
        $this->DAO = new DAO("pharmaweb", "admin");
    }
    
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new Fournisseur_DAO();
        }
        return self::$_instance;
    }
    
    public function getFournisseur($login, $password){
        $this->conn = $this->DAO->connect();
        $reponse = $this->conn->prepare('SELECT * FROM FOURNISSEUR WHERE LOGIN_FOURNISSEUR = ? AND PASSWORD_FOURNISSEUR = ? ');
        $reponse->execute(array($login, $password));
        $donnee = $reponse->fetch();
        if($donnee != null){
            $fournisseur = new Fournisseur($donnee['ID_FOURNISSEUR'], $donnee['NOM_FOURNISSEUR'], $donnee['LOGIN_FOURNISSEUR'], $donnee['PASSWORD_FOURNISSEUR']);
            echo 'Fournisseur Found : '.$fournisseur->getNom();
            return $fournisseur;
        } else {
            echo 'No Fournisseur Found ';
            return null;
        }
        
        
    }

    //put your code here
}

?>
