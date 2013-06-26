<?php



Class CtrlPanier{
	
	private $items;
	
	public function __construct(){
		$this->items = array();
	}
	
	public function get_items(){
    	return $this->items;
    }
	
	public function ajouter($produit){
		
		$isNew = true;
		//Recherche si le produit est deja dans le panier retourne l'index ou false
		foreach($this->items as $item){
			if($item->getProduit()->getId() == $produit->getId()){
				//Produit trouver
				$isNew = false;
				$newQtt = $item->getQuantite() + 1;
				$item->setQuantite($newQtt);
				break;
			}
		}
		
		//Ajout d'un nouvelle item si il est nouveau
		if($isNew){
			$newItem = new Item($produit, 1); 
			array_push($this->items, $newItem);					
		}	
	}
	
	public function supprimer($produit){
		$isNew = true;
		//Recherche si le produit est deja dans le panier retourne l'index ou false
		foreach($this->items as $item){
			if($item->getProduit()->getId()  == $produit->getId()){
				//Produit trouver
				$isNew = false;
				if($item->getQuantite() > 1){
					$newQtt = $item->getQuantite() - 1;
					$item->setQuantite($newQtt);
				}
				else{
					$this->delete($item->getProduit());
				}
				break;
			}
		}
		
		if($isNew){
			echo('ERREUR: PRODUIT INTROUVABLE');			
		}	
	}
	
	
	
	private function delete($produit){
		$tmp = array();
		//$tmp = $this->items;
		
		foreach($this->items as $item){
			if($item->getProduit()->getId() != $produit->getId()){
				$newItem = $item; 
				array_push($tmp, $newItem);
			}
		}
		
		$this->items = $tmp;
	}
	

	
	public function getPrixTotal()
	{
		$prixTotal = 0;
		
		foreach($this->items as $item){
			$prixTotal = $prixTotal + ($item->getProduit()->getPrix() * $item->getQuantite());
		}
		return $prixTotal;
	}
}

Class Item{
	
	private $produit;
	private $quantite;
	
	public function __construct($produit, $quantite){
		$this->produit = $produit;
		$this->quantite = $quantite;
	}
	
	
	public function setProduit($value){
    	$this->produit = $value;
    }
    public function setQuantite($value){
    	$this->quantite = $value;
    }
	
    public function getProduit(){
    	return $this->produit;
    }
    public function getQuantite(){
    	return $this->quantite;
    }
	
}

?>