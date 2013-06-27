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
include_once('client.php');
include_once('client_DAO.php');
include_once('produit_DAO.php');
include_once('commandeClient.php');
include_once('commandePara.php');
include_once('commandePharma.php');
@session_start();

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
        $idClient = $commande->getClient()->getId();
        $this->conn = $this->DAO->connect();

        $reponse = $this->conn->prepare('CALL PKG_COMMON.INSERT_COMMANDE(SYSDATE , ?, ?, ?, ?)');
        $reponse->execute(array( $etat, 0, 0, $idClient));
        
        
        // retourne id commande
        $reponse = $this->conn->prepare('SELECT MAX(ID_COMMANDE) FROM COMMANDE');
        $reponse->execute();
        $donnee = $reponse->fetch();
        $idCommande = $donnee['MAX(ID_COMMANDE)'];
        
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
            $idCommandePara = $donnee['MAX(ID_COMMANDE_PARAPHARMA)'];
            
            
            //Pour chaque question-reponse du questionnaire
            // on enregistre la réponse avec l'id de la question
            // et l'id de la commande para

            foreach($questionnaires as $questionnaire){
                $idQuestion = $questionnaire->getQuestion()->getId();
                $reponseALaQuestion = $questionnaire->getReponse()->getLibelle();
                
                $reponse = $this->conn->prepare('CALL PKG_COMMON.insert_Reponse(? , ?, ?)');
                $reponse->execute(array($reponseALaQuestion, $idQuestion, $idCommandePara ));
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
            $idCommandePharma = $donnee['MAX(ID_COMMANDE_PHARMA)'];
            
            // pour chaque item on sauvegarde le produit dans pharma et la quantité dans avoir2
            foreach ($listePharma as $item){
                $idProduit = $item->getProduit()->getId();
                $qte = $item->getQuantite();
                
                //inseriton avoir
                $reponse = $this->conn->prepare('CALL PKG_COMMON.insert_avoir2(? , ?, ?)');
                $reponse->execute(array($idProduit, $idCommandePharma, $qte));
            }
        }
    }
    
    
    public function getCommandeById($id){
        
        $reponse = $this->conn->prepare('SELECT * FROM COMMANDE WHERE ID_COMMANDE = ?');
        $reponse->execute(array($id));
        $donnee = $reponse->fetch();
        
        $date = $donnee['DATE_COMMANDE'];
        $etat = $donnee['ETAT_COMMANDE'];
        $idClient = $donnee['ID_CLIENT'];
        
        $client_DAO = new Client_DAO();
        $client = $client_DAO->getUserById($idClient);
        
        $commandePara = $this->getCommandeParaById($id);
        $commandePharma = $this->getCommandePharmaByIdCommande($id);
        
        $commande = new CommandeClient($commandePara, $commandePharma, $date, $etat, $client);
        $commande->setId($id);
        return $commande;
    }
    

    public function getCommandePharmaByIdCommande($idCommande){
            // ON récupère la commande pharma By ID commande
            $reponse = $this->conn->prepare('SELECT * FROM COMMANDE_PHARMA WHERE ID_COMMANDE = ?');
            $reponse->execute(array($idCommande));
            $donnee = $reponse->fetch();
            if($donnee == null){
                return null;
            }
            
            $id = $donnee['ID_COMMANDE_PHARMA'];
            $reponse = $this->conn->prepare('SELECT * FROM AVOIR2 WHERE ID_COMMANDE_PHARMA = ?');
            $reponse->execute(array($id));
            
            
            $listeItemPharma = array();
            while($donnee = $reponse->fetch()){ 
                $produit_DAO = new Produit_DAO(null);
                $produit = $produit_DAO->getProduitById($donnee['ID_PRODUIT_PHARMA']);
                $item = new Item($produit, $donnee['QTE_PHARMA']);
                array_push($listeItemPharma, $item);
            }
            
            //RECUP ALL ITEM in AVOIR
            
            $commandePharma = new CommandePharma();
            $commandePharma->setListePharma($listeItemPharma);
            return $commandePharma;
    }
    
    public function getCommandeParaById($idCommande){
            $reponse2 = $this->conn->prepare('SELECT * FROM COMMANDE_PARAPHARMA WHERE ID_COMMANDE_PARAPHARMA = ?');
            $reponse2->execute(array($idCommande));
            $donnee = $reponse2->fetch();
            if($donnee == null){
                return null;
            }
            
            $listeItemPara = array();
            
            $id = $donnee['ID_COMMANDE_PARAPHARMA'];
            $reponse = $this->conn->prepare('SELECT * FROM AVOIR WHERE ID_COMMANDE_PARAPHARMA = ?');
            $reponse->execute(array($id));
            
            while($donnee = $reponse->fetch()){
                $produit_DAO = new Produit_DAO(null);
                $produit = $produit_DAO->getProduitById($donnee['ID_PRODUIT_PARAPHARMA']);
                $item = new Item($produit, $donnee['QTE_PARAPHARMA']);
                array_push($listeItemPara, $item);
            }
            
            $questionnaires = $this->getQuestionnaires($id);
            //RECUP ALL ITEM in AVOIR
            
            $commandePara = new CommandePara($donnee['VALIDER_COMMANDE_PARAPHARMA']);
            $commandePara->setListePara($listeItemPara);
            $commandePara->setQuestionnaire($questionnaires);
            return $commandePara;
    }
    
    public function getQuestionnaires($idCommandePara){
        
            $reponse = $this->conn->prepare('SELECT * FROM REPONSE WHERE ID_COMMANDE_PARAPHARMA = ?');
            $reponse->execute(array($idCommandePara));
            $questionnaires = array();
            
        
            while($donnee = $reponse->fetch()){
                $reponseInside = $this->conn->prepare('SELECT * FROM QUESTION WHERE ID_QUESTION = ?');
                $reponseInside->execute(array($donnee['ID_QUESTION']));
                
                $donneeInside = $reponseInside->fetch();
                
                $reponseQuestion = new Reponse($donnee['LIBELLE_REPONSE']);
                $question = new Question($donnee['ID_QUESTION'], $donneeInside['LIBELLE_QUESTION']);
                $questionnaire = new Questionnaire($question, $reponseQuestion);
                array_push($questionnaires, $questionnaire);
            } 
            
            return $questionnaires;
    }
    
    
    public function getAllCommandesEnCour(){
            
            
            $DAO = new DAO('PHARMAWEB', 'admin');
            $this->conn = $DAO->connect();
            $reponse = $this->conn->prepare('SELECT ID_COMMANDE FROM COMMANDE WHERE ETAT_COMMANDE != ?');
            $reponse->execute(array('Valider'));
            $commandes = array();
            while($donnee = $reponse->fetch()){
                array_push($commandes, $this->getCommandeById($donnee['ID_COMMANDE']));
            }
            return $commandes;
    }
    
    
    
    
    //put your code here
}


?>
