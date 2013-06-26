<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commandeClient
 *
 * @author Bertrand
 */
class CommandeClient {
    private $idClient = 1;
    private $commandePara;
    private $commandePharma;
    private $date;
    private $etat;
    
    /*ETAT COMMANDE
    
    	*EN COURS
    	*LIVRAISON
    	*TERMINER
    
    */
    
    function __construct($commandePara, $commandePharma, $date, $etat) {
        $this->commandePara = $commandePara;
        $this->commandePharma = $commandePharma;
        $this->date = $date;
        $this->etat = $etat;
    }

    
    public function getCommandePara() {
        return $this->commandePara;
    }

    public function setCommandePara($commandePara) {
        $this->commandePara = $commandePara;
    }

    public function getCommandePharma() {
        return $this->commandePharma;
    }

    public function setCommandePharma($commandePharma) {
        $this->commandePharma = $commandePharma;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }

    public function getIdClient() {
        return $this->idClient;
    }

    public function setIdClient($idClient) {
        $this->idClient = $idClient;
    }



}

?>
