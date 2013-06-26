<div class="listeproduit">
<h1>Produits Pharmaceutiques</h1>
		<table>
			<tr>
				<td>DÉSIGNATION</td>
				<td>QUANTITÉ</td>
				<td>PRIX</td>
				<td></td>
			</tr>
			<?php foreach($_SESSION['panier']->get_items() as $item){?>
			
			<tr>
				<td><h1><?php echo $produit->getNom()?></h1></td>
				<td></td>
				<td></td>
				<td><a type="submit" class="button">X</a></td>
			</tr>
			
			<?php } ?>
		</table>
</div>