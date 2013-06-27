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
    private $id;
    private $client;
    private $commandePara;
    private $commandePharma;
    private $date;
    private $etat;
    private $montantTotal;
    private $montantSecu;
    private $montantMutu;
    
    /*ETAT COMMANDE
    
    	*EN COURS
    	*LIVRAISON
    	*TERMINER
    
    */
    
    function __construct($commandePara, $commandePharma, $date, $etat, $client) {
        $this->commandePara = $commandePara;
        $this->commandePharma = $commandePharma;
        $this->date = $date;
        $this->etat = $etat;
        $this->client = $client;
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

    public function getClient() {
        return $this->client;
    }

    public function setClient($client) {
        $this->client = $client;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMontantTotal() {
        return $this->montantTotal;
    }

    public function setMontantTotal($montantTotal) {
        $this->montantTotal = $montantTotal;
    }

    public function getMontantSecu() {
        return $this->montantSecu;
    }

    public function setMontantSecu($montantSecu) {
        $this->montantSecu = $montantSecu;
    }

    public function getMontantMutu() {
        return $this->montantMutu;
    }

    public function setMontantMutu($montantMutu) {
        $this->montantMutu = $montantMutu;
    }




    

}

?>
