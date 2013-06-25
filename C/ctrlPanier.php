<?php

Class Item{
	
	private $produit;
	private $quantite;
	
	public function __construct($produit, $quantite)
	{
		$this->produit = $produit;
		$this->quantite = $quantite;
	}
	
	
	public function set_produit($value){
    	$this->produit = $value;
    }
    public function set_quantite($value){
    	$this->quantite = $value;
    }
	
    public function get_produit(){
    	return $produit;
    }
    public function get_quantite(){
    	return $quantite;
    }
	
}

Class CtrlPanier{


	/*
	
		Check si la comparaison obj1 == obj2 works
		Ex: $item->produit  == $produit
	
	
	*/
	
	private $items;
	
	public function __construct($produit, $quantite)
	{
		$this->items = new array();
	}
	
	public function ajouter($produit, $quantite){
	
		$isNew = true;
		//Recherche si le produit est deja dans le panier retourne l'index ou false
		foreach($items as $item){
			if($item->produit  == $produit){
				//Produit trouver
				$isNew = false;
				$item->quantite++;//PROBLEME DE DROIT!!!!
				break;
			}
		}
		
		//Ajout d'un nouvelle item si il est nouveau
		if($isNew){
			$newItem = new Item($produit, $quantite); 					
		}	
	}
	
	
	
	public function supprimer($produit, $quantite){
		$tmp = array();
		$tmp = $this->items;
		
		for($i = 0; $i < count($items); $i++){
			if($item->produit  != $produit){
				$newItem = new Item($produit, $quantite); 
				array_push($tmp, $newItem);
			}
		}
		
		$this->items = $tmp;
	}
	
	public function modifier($produit, $quantite){
		$isNew = true;
		//Recherche si le produit est deja dans le panier retourne l'index ou false
		foreach($items as $item){
			if($item->produit  == $produit){
				//Produit trouver
				$isNew = false;
				$item->quantite = $quantite;
				break;
			}
		}
		
		if($isNew){
			echo('ERREUR: PRODUIT INTROUVABLE');			
		}	
	}
	
	public function getPrixTotal()
	{
		$prixTotal = 0;
		
		foreach($items as $item){
			$prixTotal =+ $item->produit->prix;
		}
		return $prixTotal;
	}
}



?>