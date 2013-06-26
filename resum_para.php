<div class="listeproduit">
<h1>Produits Para-pharmaceutiques</h1>
		<table>
			<tr>
				<td>DÉSIGNATION</td>
				<td>QUANTITÉ</td>
				<td>PRIX</td>
				<td></td>
			</tr>
			<?php foreach($_SESSION['panier']->get_items() as $item){?>
			
			<tr>
				<td><h1></h1></td>
				<td></td>
				<td></td>
				<td><a type="submit" class="button">X</a></td>
			</tr>
			
			<?php } ?>
		</table>
	<form id="sendmessage" method="post" action="">
		<span>Posez une question à nos pharmaciens si vous voulez un conseil avant votre achat.</span><br/>
		<textarea form="sendmessage" name="Question"></textarea><br/>
		<a type="submit" class="button">Envoyer</a><br/>
		<input type="checkbox">Je certifie blablabla</input>
	</form>
</div>