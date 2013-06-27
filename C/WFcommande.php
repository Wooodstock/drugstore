<?php

include_once('ctrlPanier.php');
include_once('/../M/commandePara.php');
include_once('/../M/commandePharma.php');
include_once('/../M/commandeClient.php');
include_once('/../M/reponse.php');
include_once('/../M/question.php');
include_once('/../M/questionnaire.php');
include_once('/../M/commande_DAO.php');


@session_start();

Class WFcommande{
	
	private $commandepublic;
	
	function getCommande(){
    	return $this->commandepublic;
    }
	
	public function createCommande($date){
	
		$panier = $_SESSION['panier'];
                $client = $_SESSION['client'];
	
        $commandePara = new CommandePara(false);
        $commandePharma = new CommandePharma();
        
        $itemsPharma = array();
        $itemsPara = array();
        
        foreach ($panier->getItems() as $item){
            if(is_a($item->getProduit(), 'Pharma')){
                array_push($itemsPharma, $item);
            } else if(is_a($item->getProduit(), 'Parapharma')){
                array_push($itemsPara, $item);
            }
        }
        
        $commandePara->setListePara($itemsPara);
        $commandePharma->setListePharma($itemsPharma);
        
        $this->commandepublic = new CommandeClient($commandePara, $commandePharma, $date, 'EN COUR', $client);
        
	}
	
	public function enregistrer(){
		$commande_DAO = new Commande_DAO($_SESSION['user']);
                $commande_DAO->insertCommande($this->commandepublic);
	}
	
	public function listingCommandePrep(){
                $commande_DAO = new Commande_DAO(null);
                $commandes = $commande_DAO->getAllCommandesEnCour();
		return $commandes;
	}
	
	//---------ACTION COMMANDE PARA PHARMA------------------------------
	
	
	//Questions
	public function enregisterQuestion($reponseL1, $reponseL2, $reponseL3){
	
	
		//question
		$question1 = new Question(1, 'Question 1 : Prenez vous un traitement ?');
		$question2 = new Question(2, 'Question 2 : Antécédent médicaux dans la famille ?');
		$question3 = new Question(3, 'Question 3 : Etes vous sujet aux allergies ?');
		
		
		//reponse
		$reponse1 = new Reponse($reponseL1);
		$reponse2 = new Reponse($reponseL2);
		$reponse3 = new Reponse($reponseL3);
		
		$questionnaire1 = new Questionnaire($question1, $reponse1);
		$questionnaire2 = new Questionnaire($question2, $reponse2);
		$questionnaire3 = new Questionnaire($question3, $reponse3);
		
		$quetionnaires = array($questionnaire1, $questionnaire2, $questionnaire3);
		
		$this->commandepublic->getCommandePara()->setQuestionnaire($quetionnaires);			
	}
	
	public function consulterQuestion($question){
		return $this->commande->getCommandePharma()->getQuestion();
	}
	
	//commande
	public function validerParaPharma(){
		$this->commande->getCommandePharma()->setIsValide($true);
	}
	
	

	//---------ACTION COMMANDE PHARMA--------------------------
	
	
	
	
}


?>