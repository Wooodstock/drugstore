<?php 

include_once('C/WFcommande.php');
@session_start(); 
$listeCommande = array();
if(isset($_SESSION['commande'])){
    $listeCommande = $_SESSION['commande']->listingCommandePrep();
}
else{
    $_SESSION['commande'] = new WFcommande();
    $listeCommande = $_SESSION['commande']->listingCommandePrep();
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
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
    <?php  
        include_once "header.php"; 
    ?>
    <div id="wrapper">
        <div id="welcome" class="wrapper-style1">
        <center><h1>Mon Compte</h1></center>
        </div>
        <?php if($_SESSION['user'] == 'preparateur'){?>   
        	<div id="content_preparateur">	        	
	        	<div id="listing_commandes">
		        	<?php 
		        		foreach($listeCommande as $commande){?></br></br></br>
		        			Commande n°: <?php echo $commande->getId().'<br>' ?> du <?php echo $commande->getDate(); ?><br>
		        			Etat: <?php echo $commande->getEtat(); ?></br> 
		        			<b>Listing ParaPharma:</b><?php 
			        		foreach($commande->getCommandePara()->getListePara() as $item){
				        	?>
					       		<table>
									<tr>
										<td><?php echo $item->getQuantite();?></td>
										<td><?php echo $item->getProduit()->getNom();?></td>
										<td><?php echo ($item->getProduit()->getPrix()) *  $item->getQuantite();?></td>
										<td>€</td>
									</tr>
								</table>
							<?php
				        	}
				        	?><b>Réponse questionnaire client:</b><?php
				        	foreach($commande->getCommandePara()->getQuestionnaires() as $questionnaire){
				       		?>
					       		<table>
									<tr>
										<td><?php echo $questionnaire->getQuestion()->getLibelle();?></td>
										<td><?php echo $questionnaire->getReponse()->getLibelle();?></td>
									</tr>
								</table>
							<?php
			        		}
			        		?><b>Listing Pharma:</b><?php 
			        		foreach($commande->getCommandePharma()->getListePharma() as $item){
				        	?>
					       		<table>
									<tr>
										<td><?php echo $item->getQuantite();?></td>
										<td><?php echo $item->getProduit()->getNom();?></td>
										<td><?php echo ($item->getProduit()->getPrix()) *  $item->getQuantite();?></td>
										<td>€</td>
									</tr>
								</table>
							<?php
				        	}
				        	if($_SESSION['user'] == 'pharmacien'){?>
					        	<form name="frm" id="formValiderCommande" method="post" action="scripts/traitements.php">
							        <input type="hidden" name="id_form" value="<?php /*echo $commande->getId();*/ ?>">
							        <input type="hidden" name="id_commande" value="5">
							        <input type="submit" name="commandeValidation" value="Valider Commande">
					        	</form>
						    <?php
						    }		        	
		        		}
		        	?>        	
	        	</div>
	        </div>
	        
	    <?php } ?>

        <div id="footer" class="container">
                <h2>DRUGSTORE</h2>
                <span class="byline">Votre pharmacie à portée de clics.</span> 
        </div>
    </div>
</body>
</html>
