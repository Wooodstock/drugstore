<?php

@session_start();

include_once('../M/client_DAO.php');
include_once('../M/fournisseur_DAO.php');
include_once('../M/pharmacien_DAO.php');
include_once('../M/preparateur_DAO.php');
include_once('../C/ctrlPanier.php');



class WFconnexion{
	
	private $client;
        private $fournisseur;
        private $pharmacien;
        private $preparateur;
	private $clientDAO;
	private $login;
	private $password;
	
	public function WFconnexion(){
		$this->clientDAO = new Client_DAO();
	}
	
	public function connect($login, $password){

                // On cherche l'utilisateur dans les clients
		$this->client  = $this->clientDAO->getUser($login, $password);
		if($this->client != null){
			$_SESSION['login'] = $this->client->getLogin();
                        $_SESSION['user'] = 'client';
                        
                        //Creation du panier
                        $_SESSION['panier'] = new CtrlPanier();

			return true;
		}
                
                // On cherche l'utilisateur dans les fournisseurs
                $this->fournisseur  = Fournisseur_DAO::getInstance()->getFournisseur($login, $password);
                if($this->fournisseur != null){
                        $_SESSION['login'] = $this->fournisseur->getLogin();
                        $_SESSION['user'] = 'fournisseur';
                        return true;
                }
                
                // On cherche l'utilisateur dans les pharmaciens
                $this->pharmacien  = Pharmacien_DAO::getInstance()->getPharmacien($login, $password);
                if($this->pharmacien != null){
                        $_SESSION['login'] = $this->pharmacien->getLogin();
                        $_SESSION['user'] = 'pharmacien';
                        return true;
                }
                
                // On cherche l'utilisateur dans les preparateurs
                $this->preparateur = Preparateur_DAO::getInstance()->getPreparateur($login, $password);
                if($this->preparateur != null){
                    $_SESSION['login'] = $this->preparateur->getLogin();
                    $_SESSION['user'] = 'preparateur';
                    return true;
                }
		else{
			$_SESSION['login'] = 'FAILED';
			return false;
		}
	}

}

?>