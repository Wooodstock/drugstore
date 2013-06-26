
<?php
include_once('../C/ctrlPanier.php');
include_once('../M/Produit.php');
include_once('../M/parapharma.php');
include_once('../M/pharma.php');
@session_start();
include_once('../C/WFconnexion.php');
include_once('../C/WFcompte.php');
include_once('../M/produit_DAO.php');




switch($_POST['id_form']) {
    case 1:
        connexion();
        break;
    case 2:
        inscriptionClient();
        break;
    case 3:
        traitementPanier();
        break;
    default:
        break;
}

//--------------CONNEXION-------------------------

function connexion() {
    $WFConnexion = new WFConnexion();
    $test = $WFConnexion->connect($_POST['login'], $_POST['pass']);
    if($test){
            header('Location: ../index.php'); 
            // 'CONNEXION SUCCEED in '.$_SESSION['user'];         
    }
    else{
             echo 'CONNEXION FAILED'; 
    }
}

//------------INSCRIPTION--------------------------

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

//----------------PANIER------------------------

function traitementPanier(){		
	if(isset($_POST['plus'])){
	
		$produitDAO = new Produit_DAO($_SESSION['user']);
		$produit = $produitDAO->getProduitById($_POST['id_produit']);
			
		$_SESSION['panier']->ajouter($produit);
			
		header('Location: ../index.php');
	}
	else if(isset($_POST['moins'])){
		$produitDAO = new Produit_DAO($_SESSION['user']);
		$produit = $produitDAO->getProduitById($_POST['id_produit']);
						
		$_SESSION['panier']->supprimer($produit);
			
		header('Location: ../index.php');
	}
	else if(isset($_POST['valider'])){
		header('Location: ../resum_panier.php');
	}
	
}



?>