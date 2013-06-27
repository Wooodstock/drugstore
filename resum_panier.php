<script type="text/javascript">
function apply()
{
  document.frm.sub.disabled=true;
  if(document.frm.chk.checked==true)
  {
    document.frm.sub.disabled=false;
  }
  if(document.frm.chk.checked==false)
  {
    document.frm.sub.enabled=false;
  }
}
</script> 

<?php

include_once('/C/WFcommande.php');

$_SESSION['commande'] = new WFcommande();

$_SESSION['commande']->createCommande(date('dd/mm/yy'));

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
            </div>
        </div>

<!-- COMMANDE PHARMA  -->
<div id="page" class="container">
<div class="listeproduitpharma">
<h1>PRODUITS PARA-PHARMACEUTIQUES</h1>
		<table id="resultpanier">
			<tr>
				<td>DÉSIGNATION</td>
				<td>QUANTITÉ</td>
				<td>PRIX</td>
			</tr>
			<?php foreach($_SESSION['commande']->getCommande()->getCommandePharma()->getListePharma() as $item){?>
			
			<tr>
				<td><?php echo $item->getProduit()->getNom() ?></td>
				<td><?php echo $item->getQuantite() ?></td>
				<td><?php echo ($item->getProduit()->getPrix() * $item->getQuantite())?>€</td>
			</tr>
			
			<?php } ?>
		</table>
</div>


<!-- COMMADE PARA -->

<div class="listeproduitpara">
<h1>PRODUITS PARA-PHARMACEUTIQUES</h1>
		<table id="resultpanier">
			<tr>
				<td>DÉSIGNATION</td>
				<td>QUANTITÉ</td>
				<td>PRIX</td>
			</tr>
			<?php foreach($_SESSION['commande']->getCommande()->getCommandePara()->getListePara() as $item){?>
			
			<tr>
				<td><?php echo $item->getProduit()->getNom() ?></td>
				<td><?php echo $item->getQuantite() ?></td>
				<td><?php echo ($item->getProduit()->getPrix() * $item->getQuantite())?>€</td>
			</tr>
			
			<?php } ?>
		</table>
</div>
<div id="ordoquestions">
	<form name="frm" id="sendformpara" method="post" action="scripts/traitements.php">
		<input type="hidden" name="id_form" value="4">
		<span>Répondez aux questions suivantes avant de passer à la prochaine étape.</span><br/><br/>
		Question numéro 1  : Etes vous sujet à des allergies?<br/>
		<input size="100" type="text" name="reponse1"><br/>
		Question numéro 2  : Etes vous enceinte ?<br/>
		<input size="100"  type="text" name="reponse2"><br/>
		Question numéro 3 : Avez vous des antécédents médicaux ?<br/>
		<input size="100"  type="text" name="reponse3"><br/>
		<input type="checkbox" name="chk" onClick="apply()"></td></tr>I agree Terms and Conditions</br></br>
		<input type="submit" name="sub" value="valider" disabled /><br/>
	</form>
</div>
</div>
<!-- END -->    
    	    <div id="footer" class="container">
				<h2>DRUGSTORE</h2>
				<span class="byline">Votre pharmacie à portée de clics.</span> </div>
		</div>
</body>
</html>
