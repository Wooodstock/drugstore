<?php
include_once('/C/WFcommande.php');
@session_start();
?>

<div class="listeproduit">
<h1>Produits Para-pharmaceutiques</h1>
		<table>
			<tr>
				<td>DÉSIGNATION</td>
				<td>QUANTITÉ</td>
				<td>PRIX</td>
				<td></td>
			</tr>
			<?php foreach($_SESSION['commande']->getCommande()->getCommandePara()->getListePara() as $item){?>
			
			<tr>
				<td><?php echo $item->getProduit()->getNom() ?></td>
				<td><?php echo $item->getQuantite() ?></td>
				<td><?php echo ($item->getProduit()->getPrix() * $item->getQuantite())?></td>
			</tr>
			
			<?php } ?>
		</table>
	<form id="sendmessage" method="post" action="">
		<span>Répondez aux questions suivantes avant de passer à la prochaine étape.</span><br/><br/>
		Question numéro 1 sur les allergies?<br/>
		<input type="text" name="question1"><br/>
		Question numéro 2 sur la grossesse?<br/>
		<input type="text" name="question2"><br/>
		Question numéro 3 sur la taille du zizi?<br/>
		<input type="text" name="question3"><br/>
		<a type="submit" class="button">Envoyer</a><br/>
	</form>
</div>