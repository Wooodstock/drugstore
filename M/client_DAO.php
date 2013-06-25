<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('DAO.php');
include_once('client.php');
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
    
    public function insert($client){
        $this->conn = $this->DAO->connect();
        $reponse = $this->conn->prepare('INSERT INTO "PHARMAWEB"."CLIENT" (NOM_CLIENT, ADRESSE_CLIENT, TELEPHONE_CLIENT, MODE_REMB_CLIENT, COTISATION_CLIENT, LOGIN_CLIENT, PASSWORD_CLIENT) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $reponse->execute(array($client->getNom(),$client->getAdresse(), $client->getTelephone(), $client->getMode_remboursement(), $client->getCotisation(), $client->getLogin(), $client->getPassword()));
        if($reponse){
            return true;
        } else {
            return false;
        }
    }
}

?>
