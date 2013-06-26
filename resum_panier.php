<?php

include_once('/C/WFcommande.php');

$_SESSION['commande'] = new WFcommande();

$_SESSION['commande']->createCommande(date('dd/mm/yy'));

function submitForms(){ 
   document.sendformpharma.submit(); 
   document.sendformpara.submit(); 
 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>
    <?php  
        include_once "header.php"; 
    ?>
    <div id="wrapper">
        <div id="welcome" class="wrapper-style1">
            <div class="title">
                <img src="images/logo.jpg" />
                <h2>Votre pharmacie à portée de clics</h2>
            </div>
        </div>
    
            <?php require "resum_para.php";
            		require"resum_pharma.php"; ?>
     		<a type="submit" class="button" onclick=submitForms() >Envoyer</a><br/>
   </div>       
    	    <div id="footer" class="container">
				<h2>DRUGSTORE</h2>
				<span class="byline">Votre pharmacie à portée de clics.</span> </div>
		</div>
</body>
</html>
