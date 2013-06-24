<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of client_DAO
 *
 * @author Bertrand
 */
class Client_DAO {
    
    private $DAO;
    private $conn;
    
    public function client_DAO(){
        $this->DAO = new DAO("PHARMAWEB", "admin");
    }
    
    public function getUser($name, $password){
        $this->conn = $this->DAO->connect();
        $this->conn->query('SELECT * FROM CLIENT');
    }
    
}

?>
