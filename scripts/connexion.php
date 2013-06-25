
<?php

//SCRIPT DE CONNEXION
@session_start();

include('../C/WFconnexion.php');
include('../C/WFcompte.php');

switch($_POST['id_form']) {
    case 1:
        connexion();
        break;
    case 2:
        inscriptionClient();
        break;
    default:
        break;
}

function connexion() {
    $WFConnexion = new WFConnexion();
    $test = $WFConnexion->connect($_POST['login'], $_POST['pass']);
    if($test){
            //header('index.php');
            echo 'CONNEXION SUCCEED in '.$_SESSION['user'];
    }
    else{
            echo 'CONNEXION FAILED'; 
    }
}

function inscriptionClient() {
    $WFCompte = new WFcompte();
    $retour = $WFCompte->addClient($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['adresse2'], $_POST['cp'], $_POST['ville'], 'FRANCE', $_POST['id_cotisation'], $_POST['tel'], $_POST['email'], $_POST['pwd1'], $_POST['pwd2']);
    if($retour){
        //header('index.php');
        echo 'USER ADDED ';
    }
    else{
        echo 'USER ADD FAILED'; 
    }
}



?>