<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of parapharma
 *
 * @author Bertrand
 */

include_once('produit.php');

class Parapharma extends Produit {
    
    function __construct($id, $nom, $numLot, $nomFabriquant, $dateExpiration, $typeRemboursement, $prix, $stock, $libClassePharma) {
        parent::__construct($id, $nom, $numLot, $nomFabriquant, $dateExpiration, $typeRemboursement, $prix, $stock, $libClassePharma);
    }
}

?>
