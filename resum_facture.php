<?php

include_once('/C/WFcommande.php');

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

<!-- COMMANDE PHARMA  -->

<div class="listeproduit">
<h1>Produits Pharmaceutiques</h1>
		<table>
			<tr>
				<td>DÉSIGNATION</td>
				<td>QUANTITÉ</td>
				<td>PRIX</td>
			</tr>
			<?php
                        $commande = $_SESSION['commande']->getCommandeByIdClient($_SESSION['client']->getId());
                        foreach($commande->getCommandePharma()->getListePharma() as $item){?>
			
			<tr>
				<td><?php echo $item->getProduit()->getNom() ?></td>
				<td><?php echo $item->getQuantite() ?></td>
				<td><?php echo ($item->getProduit()->getPrix() * $item->getQuantite())?></td>
			</tr>
			
			<?php } ?>
		</table>
		<form id="senformpharma" method="post" action="">
		</form>
</div>


<!-- COMMADE PARA -->

<div class="listeproduit">
<h1>Produits Para-pharmaceutiques</h1>
		<table>
			<tr>
				<td>DÉSIGNATION</td>
				<td>QUANTITÉ</td>
				<td>PRIX</td>
				<td></td>
			</tr>
			<?php foreach($commande->getCommandePara()->getListePara() as $item){?>
			
			<tr>
				<td><?php echo $item->getProduit()->getNom() ?></td>
				<td><?php echo $item->getQuantite() ?></td>
				<td><?php echo ($item->getProduit()->getPrix() * $item->getQuantite())?></td>
			</tr>
			
			<?php } ?>
		</table>
                        <?php echo '<br>'?>
                       MONTANT Total : <?php echo $commande->getMontantTotal();'<br>'?>
                       MONTANT Secu : <?php echo $commande->getMontantSecu();'<br>'?>
                       MONTANT Mutuelle : <?php echo $commande->getMontantMutu();'<br>'?>

</div>

<!-- END -->

   </div>       
    	    <div id="footer" class="container">
				<h2>DRUGSTORE</h2>
				<span class="byline">Votre pharmacie à portée de clics.</span> </div>
		</div>
</body>
</html>
