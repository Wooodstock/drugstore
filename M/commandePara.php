<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commandePara
 *
 * @author Bertrand
 */
class CommandePara {
    private $listePara = array();
    
    private $isValide;
    private $question;
    
    public function getIsValide(){
    	return $isValide;
    }
    
    public function setIsValide($value){
    	$this->isValide = $value;
    }
    
    function __construct($isValide) {
        $this->isValide = $isValide;
    }
    
    public function getListePara() {
        return $this->listePara;
    }

    public function setListePara($listePara) {
        $this->listePara = $listePara;
    }
    
    public function getQuestion(){
	    return $this->question;
    }
    
    public function setQuestion($question){
	    $this->question = $question;
    }



}

?>
