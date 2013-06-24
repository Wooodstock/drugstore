<?php
include('../M/ClientDAO.php');

session_start();

class WFconnexion{
	
	private $client;
	private $clientDAO;
	private $login;
	private $password;
	
	public function WFconnexion(){
		$this->clientDAO = new ClientDAO();
	}
	
	public function connect($login, $password){
		$this->client  = $this->clientDAO->getUser($login, $password);
		if($this->client != null){
			$_SESSION['login'] = $this->client->get_login();
			return true;
		}
		else{
			$_SESSION['login'] = 'FAILED';
			return false;
		}
	}
}

?>