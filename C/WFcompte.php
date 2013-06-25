<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WFcompte
 *
 * @author Bertrand
 */

class WFcompte {
    
    public function addClient($nom, $prenom, $adresse1, $adresse2, $cp, $ville, $pays,$cotisation, $telephone, $login, $pwd1, $pwd2){
        if($nom != null && $adresse1 != null && $telephone != null && $login != null && $pwd1 != null && $pwd2 != null){
            if($pwd1 != $pwd2){
                return false;
            }
            $nom = $nom.' '.$prenom;
            $adresse = $adresse1.' '.$adresse2.' '.$cp.' '.$ville.' '.$pays;
            
            $client = new Client(null, $nom, null, $adresse, $telephone, null, $cotisation, $login, $pwd1);
            Client_DAO::getInstance()->insert($client);
            return true;
        } else {
            return false;
        }
        
    }
    //put your code here
}

?>
