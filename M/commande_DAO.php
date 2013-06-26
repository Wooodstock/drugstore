<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commande_DAO
 *
 * @author Bertrand
 */

include_once('DAO.php');

class Commande_DAO {
    
    private $DAO;
    private $conn;
    
    function __construct($currentUser) {
        $this->DAO = DAO::getDAO($currentUser);
    }
    
    public function insertCommande($panier, $idClient){
        
        $commandePara = new CommandePara(false);
        $commandePharma = new CommandePharma();
        
        foreach ($panier->getItems() as $item){
            if(is_a($item->getProduit(), 'Pharma')){
                array_push($commandePharma->getListPharma(), $item);
            } else if(is_a($item->getProduit(), 'Parapharma')){
                array_push($commandePara->getListPharma(), $item);
            }
        }
        
        $commandeClient = new CommandeClient($commandePara, $commandePharma, $date, $etat);
        
        $this->conn = $this->DAO->connect();
        $reponse = $this->conn->prepare('CALL INSERT_COMMANDE(?, ? ,?)');
        
        $reponse->execute(array(date("m.d.y"), 'en cours', 1));
        if($reponse){
            return true;
        } else {
            return false;
        }
        
    }

    //put your code here
}

$comDAO = new Commande_DAO('client');
$retour = $comDAO->insertCommande(0, 0);
echo $retour;

?>
