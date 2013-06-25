<?php

class Produit{
	
	private $id;
	private $nom;
	private $numlot;
	private $nomfabriquant;
	private $dateexpiration;
	private $typeremboursement;
	private $pourcentagesecu;
	private $pourcentagemutuelle;
	private $prix;
	
        function __construct($id, $nom, $numlot, $nomfabriquant, $dateexpiration, $typeremboursement, $pourcentagesecu, $pourcentagemutuelle, $prix) {
            $this->id = $id;
            $this->nom = $nom;
            $this->numlot = $numlot;
            $this->nomfabriquant = $nomfabriquant;
            $this->dateexpiration = $dateexpiration;
            $this->typeremboursement = $typeremboursement;
            $this->pourcentagesecu = $pourcentagesecu;
            $this->pourcentagemutuelle = $pourcentagemutuelle;
            $this->prix = $prix;
        }
        
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNom() {
            return $this->nom;
        }

        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function getNumlot() {
            return $this->numlot;
        }

        public function setNumlot($numlot) {
            $this->numlot = $numlot;
        }

        public function getNomfabriquant() {
            return $this->nomfabriquant;
        }

        public function setNomfabriquant($nomfabriquant) {
            $this->nomfabriquant = $nomfabriquant;
        }

        public function getDateexpiration() {
            return $this->dateexpiration;
        }

        public function setDateexpiration($dateexpiration) {
            $this->dateexpiration = $dateexpiration;
        }

        public function getTyperemboursement() {
            return $this->typeremboursement;
        }

        public function setTyperemboursement($typeremboursement) {
            $this->typeremboursement = $typeremboursement;
        }

        public function getPourcentagesecu() {
            return $this->pourcentagesecu;
        }

        public function setPourcentagesecu($pourcentagesecu) {
            $this->pourcentagesecu = $pourcentagesecu;
        }

        public function getPourcentagemutuelle() {
            return $this->pourcentagemutuelle;
        }

        public function setPourcentagemutuelle($pourcentagemutuelle) {
            $this->pourcentagemutuelle = $pourcentagemutuelle;
        }

        public function getPrix() {
            return $this->prix;
        }

        public function setPrix($prix) {
            $this->prix = $prix;
        }
}
?>