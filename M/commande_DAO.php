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
include_once('commandeClient.php');
include_once('commandePara.php');
include_once('commandePharma.php');

class Commande_DAO {
    
    private $DAO;
    private $conn;
    
    function __construct($currentUser) {
        $this->DAO = DAO::getDAO($currentUser);
    }
    
    public function insertCommande($commande){

        $commandePara = $commande->getCommandePara();
        $commandePharma = $commande->getCommandePharma();
        $etat = $commande->getEtat();
        $idClient = $commande->getIdClient();
        $this->conn = $DAO->connect();

        $reponse = $this->conn->prepare('CALL PKG_COMMON.INSERT_COMMANDE(SYSDATE , ?, ?, ?, ?)');
        $reponse->execute(array( $etat, $idClient, 0, 0));
        
        // retourne id commande
        $reponse = $this->conn->prepare('SELECT MAX(ID_COMMANDE) FROM COMMANDE');
        $reponse->execute();
        $donnee = $reponse->fetch();
        $idCommande = $donnee['ID_COMMANDE'];
        
        // si la commande de parapharmacie est pleine 
        if($commandePara != null){
            $questionnaires = $commandePara->getQuestionnaires();
            
            $listePara = $commandePara->getListePara();
            $valide = $commandePara->getIsValide();
            
            $reponse = $this->conn->prepare('CALL PKG_COMMON.insert_Commande_ParaPharma(? , ?)');
            $reponse->execute(array($valide, $idCommande));

                        
            // retourne id para
            $reponse = $this->conn->prepare('SELECT MAX(ID_COMMANDE_PARAPHARMA) FROM COMMANDE_PARAPHARMA');
            $reponse->execute();
            $donnee = $reponse->fetch();
            $idCommandePara = $donnee['ID_COMMANDE_PARAPHARMA'];
            
            
            //Pour chaque question-reponse du questionnaire
            // on enregistre la réponse avec l'id de la question
            // et l'id de la commande para
            
            foreach($questionnaires as $questionnaire){
                $idQuestion = $questionnaire->getQuestion()->getId();
                $reponse = $Questionnaire->getQuestion()->getLibelle();
                
                $reponse = $this->conn->prepare('CALL PKG_COMMON.insert_Reponse(? , ?, ?)');
                $reponse->execute(array($reponse, $idQuestion, $idCommandePara ));
            }
            
            // pour chaque item on sauvegarde le produit dans para et la quantité dans avoir
            foreach ($listePara as $item){
                $idProduit = $item->getProduit()->getId();
                $qte = $item->getQuantite();
                
                //inseriton avoir
                $reponse = $this->conn->prepare('CALL PKG_COMMON.insert_avoir(? , ?, ?)');
                $reponse->execute(array($idProduit, $idCommandePara, $qte)); 
            }
        }
        
        if($commandePharma != null){
            $listePharma = $commandePharma->getListePharma();
            
            $reponse = $this->conn->prepare('CALL PKG_COMMON.insert_Commande_Pharma( ?)');
            $reponse->execute(array( $idCommande));
            
            
            // retourne id pharma
            $reponse = $this->conn->prepare('SELECT MAX(ID_COMMANDE_PHARMA) FROM COMMANDE_PHARMA');
            $reponse->execute();
            $donnee = $reponse->fetch();
            $idCommandePharma = $donnee['ID_COMMANDE_PHARMA'];
            
            // pour chaque item on sauvegarde le produit dans pharma et la quantité dans avoir2
            foreach ($listePara as $item){
                $idProduit = $item->getProduit()->getId();
                $qte = $item->getQuantite();
                
                //inseriton avoir
                $reponse = $this->conn->prepare('CALL PKG_COMMON.insert_avoir2(? , ?, ?)');
                $reponse->execute(array($idProduit, $idCommandePharma, $qte));
            }
        }
        

    }

    //put your code here
}
$date = "20/12/12";
$etat = "motherfucker";
$idclient = 1;
$DAO = new DAO('PHARMAWEB', 'admin');
$conn = $DAO->connect();
//$reponse = $conn->prepare('INSERT INTO "PHARMAWEB"."COMMANDE" (DATE_COMMANDE, ETAT_COMMANDE, ID_CLIENT) VALUES (TO_DATE(?, "DD/MM/RR"), ?, ?)');


if($reponse){
    echo 'Achievement complete!';
}


?>
