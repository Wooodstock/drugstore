<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pharma
 *
 * @author Bertrand
 */
include_once('produit.php');

class Pharma extends Produit{
    
    private $prixSecu;
    private $pourcentageSecu;
    
    function __construct($id, $nom, $numLot, $nomFabriquant, $dateExpiration, $typeRemboursement, $prix, $stock, $libClassePharma, $prixSecu, $pourcentageSecu) {
        parent::__construct($id, $nom, $numLot, $nomFabriquant, $dateExpiration, $typeRemboursement, $prix, $stock, $libClassePharma);
        $this->prixSecu = $prixSecu;
        $this->pourcentageSecu = $pourcentageSecu;
    }
    
}

?>
