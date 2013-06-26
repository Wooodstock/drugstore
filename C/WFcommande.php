<?php

class WFcommande{
	
	private $commandepublic;
	
	function getCommande(){
    	return $commande;
    }
	
	publiv function createCommande($date){
	
		$commandePara = new CommandePara(false);
        $commandePharma = new CommandePharma();
        
        foreach ($panier->getItems() as $item){
            if(is_a($item->getProduit(), 'Pharma')){
                array_push($commandePharma->getListPharma(), $item);
            } else if(is_a($item->getProduit(), 'Parapharma')){
                array_push($commandePara->getListPharma(), $item);
            }
        }
        
        $this->commande = new CommandeClient($commandePara, $commandePharma, $date, 'EN COUR');
        
        return $this->commande;
        
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
	
	

	//---------ACTION COMMANDE  PHARMA--------------------------
	

	
}


?>