
<?php

//SCRIPT DE CONNEXION
@session_start();

include('../C/WFconnexion.php');


$WFConnexion = new WFConnexion();
$test = $WFConnexion->connect($_POST['login'], $_POST['pass']);
if($test){
	//header('index.php');
	echo 'CONNEXION SUCCED';
}
else{
	echo 'CONNEXION FAILED'; 
}


?>