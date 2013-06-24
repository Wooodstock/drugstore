<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include('DAO.php');
include('client.php');
/**
 * Description of client_DAO
 *
 * @author Bertrand
 */
class Client_DAO {
    
    private $DAO;
    private $conn;
    
    private static $_instance = null;
    
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new Client_DAO();
        }
        return self::$_instance;
    }
    
    public function Client_DAO(){
        $this->DAO = new DAO("PHARMAWEB", "admin");
    }
    
    public function getUser($login, $password){
        $this->conn = $this->DAO->connect();
        $reponse = $this->conn->prepare('SELECT * FROM CLIENT WHERE LOGIN_CLIENT = ? AND PASSWORD_CLIENT = ? ');
        $reponse->execute(array($login, $password));
        $donnee = $reponse->fetch();
        if($donnee != null){
            $client = new Client($donnee['ID_CLIENT'], $donnee['NOM_CLIENT'], $donnee['STATUT_CLIENT'], $donnee['ADRESSE_CLIENT'], $donnee['TELEPHONE_CLIENT'], $donnee['MODE_REMB_CLIENT'], $donnee['COTISATION_CLIENT'], $donnee['LOGIN_CLIENT'], $donnee['PASSWORD_CLIENT']);
            echo 'Client Found : '.$client->getNom();
            $this->DAO->switchConn('client', 'client');
            return $client;
        } else {
            echo 'No Client Found ';
            return null;
        }   
    }
}

?>
