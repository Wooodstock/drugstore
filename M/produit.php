<?php

class Produit{
	
	private $id;
	private $nom;
	private $numLot;
	private $nomFabriquant;
	private $dateExpiration;
	private $typeRemboursement;
	private $prix;
        private $stock;
        private $libClassePharma;
	
        function __construct($id, $nom, $numLot, $nomFabriquant, $dateExpiration, $typeRemboursement, $prix, $stock, $libClassePharma) {
            $this->id = $id;
            $this->nom = $nom;
            $this->numLot = $numLot;
            $this->nomFabriquant = $nomFabriquant;
            $this->dateExpiration = $dateExpiration;
            $this->typeRemboursement = $typeRemboursement;
            $this->prix = $prix;
            $this->stock = $stock;
            $this->libClassePharma = $libClassePharma;
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

        public function getNumLot() {
            return $this->numLot;
        }

        public function setNumLot($numLot) {
            $this->numLot = $numLot;
        }

        public function getNomFabriquant() {
            return $this->nomFabriquant;
        }

        public function setNomFabriquant($nomFabriquant) {
            $this->nomFabriquant = $nomFabriquant;
        }

        public function getDateExpiration() {
            return $this->dateExpiration;
        }

        public function setDateExpiration($dateExpiration) {
            $this->dateExpiration = $dateExpiration;
        }

        public function getTypeRemboursement() {
            return $this->typeRemboursement;
        }

        public function setTypeRemboursement($typeRemboursement) {
            $this->typeRemboursement = $typeRemboursement;
        }

        public function getPrix() {
            return $this->prix;
        }

        public function setPrix($prix) {
            $this->prix = $prix;
        }

        public function getStock() {
            return $this->stock;
        }

        public function setStock($stock) {
            $this->stock = $stock;
        }

        public function getLibClassePharma() {
            return $this->libClassePharma;
        }

        public function setLibClassePharma($libClassePharma) {
            $this->libClassePharma = $libClassePharma;
        }
}
?>