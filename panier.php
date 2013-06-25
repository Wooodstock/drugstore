<div id="panier">
	<h1>Panier</h1>
	
	<?php

		@session_start();
		include('C/ctrlPanier.php');
		include('M/produit.php');
		
		$_SESSION['panier'] = new CtrlPanier();
		
		$p1 = new produit(1, "Paul Dumont", 01, "", "", "", "", "", "2.5");
		$p2 = new produit(5, "Dafalgan", 01, "", "", "", "", "", "2.7");
		
		$_SESSION['panier']->ajouter($p1);
		$_SESSION['panier']->ajouter($p1);
		$_SESSION['panier']->ajouter($p1);
		$_SESSION['panier']->ajouter($p2);
		
		$_SESSION['panier']->supprimer($p1);
		
		
	?>
	
<form method="post" action="scripts/traitements.php">
<input type="hidden" name="id_form" value="3">
	<table>
<?php
		foreach($_SESSION['panier']->get_items() as $item){?>
			<input type="hidden" name="id_produit" value="<?php echo $item->getProduit()->getId() ;?>">
			<tr>
				<td><input type="submit" name="moins" value="-" class="buttonpanier"></td>
				<td><?php echo $item->getQuantite();?></td>
				<td><input type="submit" name="plus" value="+" class="buttonpanier"></td>
				<td><?php echo $item->getProduit()->getNom();?></td>
				<td><?php echo $item->getProduit()->getPrix();?></td>
			</tr><?php
		}?>
	</table>
</form>
</div>