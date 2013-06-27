
	
<?php
       include_once('M/pharma.php');
       include_once('M/parapharma.php');
       include_once('M/produit.php');
       @session_start();
       include_once('C/ctrlPanier.php');
       
		
		/*
		$p1 = new Produit(1, "Paul Dumont", 01, "", "", "", "2.5", "", "");
		$p2 = new Produit(5, "Dafalgan", 01, "", "", "", "2.7", "", "");
		
		
		$_SESSION['panier']->ajouter($p1);
		$_SESSION['panier']->ajouter($p1);
		$_SESSION['panier']->ajouter($p1);
		$_SESSION['panier']->ajouter($p2);
		
		$_SESSION['panier']->supprimer($p1);
		//*/

	if (isset($_SESSION['login']) && $_SESSION['login'] != 'FAILED'){ ?>
						
		<div id="panier">
			<div class="titre">
				<h1>Panier</h1>
			<span>Un aperçu de vos achats.</span>
			</div>
			
			<?php foreach($_SESSION['panier']->getItems() as $item){?>
			<div id="resultpanier"/>
			<table>
			<form method="post" action="scripts/traitements.php">
				<input type="hidden" name="id_form" value="3">
					<tr>
						<td id="ligne1"><input type="submit" name="moins" value="-" class="buttonpanier"></td>
						<td id="ligne1"><?php echo $item->getQuantite();?></td>
						<td id="ligne1"><input type="submit" name="plus" value="+" class="buttonpanier"></td>
						<td><?php echo $item->getProduit()->getNom();?></td>
						<td><?php echo ($item->getProduit()->getPrix()) *  $item->getQuantite();?></td>
						<td id="ligne1">€</td>
					</tr>
				<input type="hidden" name="id_produit" value=<?php echo $item->getProduit()->getId(); ?> >
			</form>
			</table>
			</div>
			<?php } ?>
			<div class="totandform">
				<form method="post" action="scripts/traitements.php">
				<h4>Total  <?php echo  $_SESSION['panier']->getPrixTotal(); ?>  €</h4>
					<input type="hidden" name="id_form" value="3">
					<input type="submit" name="valider" value="Valider" class="button">
				</form>
			</div>

</div>
<?php } ?>