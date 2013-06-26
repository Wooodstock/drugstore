<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commandePharma
 *
 * @author Bertrand
 */
class CommandePharma {
    
    private $listePharma = array();
    //put your code here
    
    function __construct() {
        
    }
    
    public function getListePharma() {
        return $this->listPharma;
    }

    public function setListePharma($listPharma) {
        $this->listPharma = $listPharma;
    }



}

?>
