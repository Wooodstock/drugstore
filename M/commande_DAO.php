<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commande_DAO
 *
 * @author Bertrand
 */

include_once('DAO.php');

class Commande_DAO {
    
    private $DAO;
    private $conn;
    
    function __construct($currentUser) {
        $this->DAO = DAO::getDAO($currentUser);
    }
    
    public function insertCommande($DAO){
        
//        $commandePara = new CommandePara(false);
//        $commandePharma = new CommandePharma();
//        
//        foreach ($panier->getItems() as $item){
//            if(is_a($item->getProduit(), 'Pharma')){
//                array_push($commandePharma->getListPharma(), $item);
//            } else if(is_a($item->getProduit(), 'Parapharma')){
//                array_push($commandePara->getListPharma(), $item);
//            }
//        }
//        
//        $commandeClient = new CommandeClient($commandePara, $commandePharma, $date, $etat);
//      
        
        
        try{
            $date = '20/12/2012';
            $etat = "en cours";
            $idclient = 1;

            $this->conn = $DAO->connect();
            
            $reponse = $this->conn->prepare('INSERT INTO "PHARMAWEB"."COMMANDE" (DATE_COMMANDE, ETAT_COMMANDE, ID_CLIENT) VALUES (TO_DATE(?, "DD/MM/RR"), ?, ?)');

            //$reponse = $this->conn->prepare('select * from commande');
//            $reponse->bindParam(1, $date, PDO::PARAM_STR, 200);
//            $reponse->bindParam(2, $etat, PDO::PARAM_STR, 200);
//            $reponse->bindParam(3, $idclient, PDO::PARAM_INT);
            $reponse->execute(array($date, $etat, $idclient));
            $donnee = $reponse->fetch();
            if($donnee != null){
                echo 'nice!';
            }
            //$reponse->execute();
        }catch(Exception $e){
                echo ($e->getMessage());
        }
    }

    //put your code here
}
$date = "20/12/12";
$etat = "motherfucker";
$idclient = 1;
$DAO = new DAO('PHARMAWEB', 'admin');
$conn = $DAO->connect();
//$reponse = $conn->prepare('INSERT INTO "PHARMAWEB"."COMMANDE" (DATE_COMMANDE, ETAT_COMMANDE, ID_CLIENT) VALUES (TO_DATE(?, "DD/MM/RR"), ?, ?)');

$reponse = $conn->prepare('CALL PKG_COMMON.INSERT_COMMANDE(SYSDATE , :etat, :prix, :prix2, :id)');
$reponse->execute(array( 'etat' => $etat,'id' => $idclient, 'prix' => 12, 'prix2' => 12));
if($reponse){
    echo 'Achievement complete!';
}


?>
