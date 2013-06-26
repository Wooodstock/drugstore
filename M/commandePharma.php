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
    
    private $listPharma = array();
    //put your code here
    
    public function getListPharma(){
	    return $this->listPharma;
    }
    
    public function setListPharma($listPharma){
	    $this->listPharma = $listPharma;
    }
}

?>
