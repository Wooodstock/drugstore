<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of produit_DAO
 *
 * @author Bertrand
 */
include_once('parapharma.php');
include_once('pharma.php');
include_once('DAO.php');

class Produit_DAO {
    
    private $DAO;
    private $conn;
    
    public function __construct($currentUser){
        $this->DAO = DAO::getDAO($currentUser);
    }
    
    public function getAllParapharma(){
        $this->conn = $this->DAO->connect();
        $reponse = $this->conn->prepare('SELECT * FROM V_PRODUIT_PARA_PHARMA');
        $reponse->execute();
        $list = array();
        while($donnee = $reponse->fetch()){
            $parapharma = new Parapharma($donnee['ID_PRODUIT'], $donnee['NOM_PRODUIT'], $donnee['NUM_LOT_PRODUIT'], $donnee['NOM_FABRIQUANT_PRODUIT'], $donnee['DATE_EXPIRATION_PRODUIT'], $donnee['TYPE_REMBOURSEMENT_PRODUIT'], $donnee['PRIX_PRODUIT'], $donnee['STOCK_PRODUIT'], $donnee['LIB_CLASSE_PHARMA']);
            array_push($list, $parapharma);
        }
        return $list;
    }
    
    public function getAllPharma(){
        $this->conn = $this->DAO->connect();
        $reponse = $this->conn->prepare('SELECT * FROM V_PRODUIT_PHARMA');
        $reponse->execute();
        $list = array();
        while($donnee = $reponse->fetch()){
            $pharma = new Pharma($donnee['ID_PRODUIT'], $donnee['NOM_PRODUIT'], $donnee['NUM_LOT_PRODUIT'], $donnee['NOM_FABRIQUANT_PRODUIT'], $donnee['DATE_EXPIRATION_PRODUIT'], $donnee['TYPE_REMBOURSEMENT_PRODUIT'], $donnee['PRIX_PRODUIT'], $donnee['STOCK_PRODUIT'], $donnee['LIB_CLASSE_PHARMA'], $donnee['PRIX_SECU_PRODUIT_PHARMA'], $donnee['POURCENTAGE_SECU_PRODUIT'] );
            array_push($list, $pharma);
        }
        return $list;
    }
    
    public function getProduitById($id){
        $this->conn = $this->DAO->connect();
        
        // on cherche le produit dans la table Pharma
        $reponse = $this->conn->prepare('SELECT * FROM V_PRODUIT_PHARMA WHERE ID_PRODUIT = ?');
        $reponse->execute(array($id));
        $donnee = $reponse->fetch();
        if($donnee != null){
            $pharma = new Pharma($donnee['ID_PRODUIT'], $donnee['NOM_PRODUIT'], $donnee['NUM_LOT_PRODUIT'], $donnee['NOM_FABRIQUANT_PRODUIT'], $donnee['DATE_EXPIRATION_PRODUIT'], $donnee['TYPE_REMBOURSEMENT_PRODUIT'], $donnee['PRIX_PRODUIT'], $donnee['STOCK_PRODUIT'], $donnee['LIB_CLASSE_PHARMA'], $donnee['PRIX_SECU_PRODUIT_PHARMA'], $donnee['POURCENTAGE_SECU_PRODUIT'] );
            return $pharma;
        }
        
        // on cherche le produit dans la table Parapharma
        $reponse = $this->conn->prepare('SELECT * FROM V_PRODUIT_PARA_PHARMA WHERE ID_PRODUIT = ?');
        $reponse->execute(array($id));
        $donnee = $reponse->fetch();
        
        if($donnee != null){
            $parapharma = new Parapharma($donnee['ID_PRODUIT'], $donnee['NOM_PRODUIT'], $donnee['NUM_LOT_PRODUIT'], $donnee['NOM_FABRIQUANT_PRODUIT'], $donnee['DATE_EXPIRATION_PRODUIT'], $donnee['TYPE_REMBOURSEMENT_PRODUIT'], $donnee['PRIX_PRODUIT'], $donnee['STOCK_PRODUIT'], $donnee['LIB_CLASSE_PHARMA']);
            return $parapharma;
        } else { // on retourne null si rien trouvé
        	echo 'null ';
            return null;
        }  
    }
}
?>
