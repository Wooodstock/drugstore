<div class="listeproduit">
		<table>
			<tr>
				<td>DÉSIGNATION</td>
				<td>QUANTITÉ</td>
				<td>PRIX</td>
				<td></td>
			</tr>
			<?php foreach($_SESSION['panier']->get_items() as $item){?>
			
			<tr>
				<td><h1><!--<?php// echo $produit->getNom()?> --></h1></td>
				<td>
					<input type="submit" name="plus" value="-" class="buttonpanier">
					<?php// echo $item->getQuantite()?>
					<input type="submit" name="plus" value="+" class="buttonpanier">
				</td>
				<td><?php// echo $produit->getPrix()?></td>
				<td><a href="fiche_produit.php?id=<?php// echo $produit->getId()?>" class="button">X</a></td>
			</tr>
			
			<?php } ?>
		</table>
	<form method="post" action="">
	
		<input type="text" height="50" width="200" name="Question">
	</form>
</div>