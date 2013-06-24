<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include('DAO.php');
include('Client.php');
/**
 * Description of client_DAO
 *
 * @author Bertrand
 */
class Client_DAO {
    
    private $DAO;
    private $conn;
    
    public function Client_DAO(){
        $this->DAO = new DAO("PHARMAWEB", "admin");
    }
    
    public function getUser($name, $password){
        $this->conn = $this->DAO->connect();
        $reponse = $this->conn->prepare('SELECT * FROM CLIENT WHERE LOGIN_CLIENT = ? AND PASSWORD_CLIENT = ? ');
        $reponse->execute(array($name, $password));
        $donnee = $reponse->fetch();
        if($donnee != null){
            $client = new Client($donnee['ID_CLIENT'], $donnee['NOM_CLIENT'], $donnee['STATUT_CLIENT'], $donnee['ADRESSE_CLIENT'], $donnee['TELEPHONE_CLIENT'], $donnee['MODE_REMB_CLIENT'], $donnee['COTISATION_CLIENT'], $donnee['LOGIN_CLIENT'], $donnee['PASSWORD_CLIENT']);
            echo 'Client Found : '.$client->get_nom();
            return $client;
        } else {
            echo 'No Client Found ';
            return null;
        }
    }
    
}

$clientDAO = new Client_DAO();
$clientDAO->getUser('LaPelle', 'LaPelle');

?>
