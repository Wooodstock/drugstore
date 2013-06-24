<?php

class Ctrl_CLient{
	
	private $client;
	private $clientDAO;
	private $login;
	private $password;
	
	public function Ctrl_CLient($login, $password){
		$this->login = $login;
		$this->password = $password;
		$this->clientDAO = new ClientDAO();
	}
	
	public function connect(){
			
	}
	
	
	
}



?>