<div id="panier">
	<h1>Panier</h1>
	
	<?php

		include('C/ctrlPanier.php');
		include('M/produit.php');
		
		@session_start();
		
		/*
		$p1 = new Produit(1, "Paul Dumont", 01, "", "", "", "2.5", "", "");
		$p2 = new Produit(5, "Dafalgan", 01, "", "", "", "2.7", "", "");
		
		
		$_SESSION['panier']->ajouter($p1);
		$_SESSION['panier']->ajouter($p1);
		$_SESSION['panier']->ajouter($p1);
		$_SESSION['panier']->ajouter($p2);
		
		$_SESSION['panier']->supprimer($p1);
		//*/
		
		
		
	?>
	
<table>
<?php
	foreach($_SESSION['panier']->get_items() as $item){?>
		<form method="post" action="scripts/traitements.php">
			<input type="hidden" name="id_form" value="3">
				<tr>
					<td><input type="submit" name="moins" value="-" class="buttonpanier"></td>
					<td><?php echo $item->getQuantite();?></td>
					<td><input type="submit" name="plus" value="+" class="buttonpanier"></td>
					<td><?php echo $item->getProduit()->getNom();?></td>
					<td><?php echo ($item->getProduit()->getPrix()) *  $item->getQuantite();?></td>
					<td>€</td>
				</tr>
			<input type="hidden" name="id_produit" value=<?php echo $item->getProduit()->getId(); ?> >
		</form><?php
	}?>
</table>

<b>Total  <?php echo  $_SESSION['panier']->getPrixTotal(); ?>  €</b>

</div>