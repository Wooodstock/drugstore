<?php


include_once('/../M/commandePara.php');
include_once('/../M/commandePharma.php');
include_once('/../M/commandeClient.php');
include_once('ctrlPanier.php');
@session_start();

Class WFcommande{
	
	private $commandepublic;
	
	function getCommande(){
    	return $this->commandepublic;
    }
	
	public function createCommande($date){
	
		$panier = $_SESSION['panier'];
	
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
        $commandePharma->setListPharma($itemsPharma);
        
        $this->commandepublic = new CommandeClient($commandePara, $commandePharma, $date, 'EN COURS');
        
	}
	
	public function valider(){
		//ENREGISTRER COMMANDE DANS DAO
	}
	
	//---------ACTION COMMANDE PARA PHARMA------------------------------
	
	
	//Questions
	public function enregisterQuestion($question){
		$this->commande->getCommandePharma()->setQuestion($question);
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