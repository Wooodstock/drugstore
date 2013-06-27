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
            <div class="title">
                <img src="images/logo.jpg" />
            </div>
        </div>
	<div id="page" class="container">
	<?php include_once "panier.php"; ?>
		<?php
            @session_start();
            include_once ('M/produit_DAO.php');
            include_once('M/pharma.php');
            include_once('M/parapharma.php');

            $produitDAO;
            if (isset($_SESSION['user']) && $_SESSION['user'] != 'FAILED'){
                $produitDAO = new Produit_DAO($_SESSION['user']);
            } else {
                $produitDAO = new Produit_DAO(null);
            }

            $id = $_GET['id'];
            
            $produit = $produitDAO->getProduitById($id);
                
        ?>
        <div id="content">
        <div class="titreproduit">
		<h1><?php echo $produit->getNom();?></h1>
			<img src=<?php echo 'images/'.$produit->getNom().'.jpg'?> alt="" /><br/>
        </div>
			<div class="infoproduit">
                <?php echo 'Lot n°: '.$produit->getNumLot().'<br/>'?>
                <?php echo 'Fabriquant : '.$produit->getNomFabriquant().'<br/>'?>
                <?php echo 'Expire le : '.$produit->getDateExpiration().'<br/>'?>
                <?php echo 'Type : '.$produit->getLibClassePharma().'<br/>'?>
                <?php echo 'Stock : '.$produit->getStock() > 5 ? 'Epuisé' : 'En stock'.'<br/>'?>

			<br/><br/>
<form method="post" action="scripts/traitements.php">
	<input type="hidden" name="id_form" value="3">
	<input type="hidden" name="id_produit" value="<?php echo $produit->getId();?>">
	<input type="submit" name="plus" value="Acheter" class="button">
</form>
            </div>
        </div>
	</div>
	
        <div id="footer" class="container">
                <h2>DRUGSTORE</h2>
                <span class="byline">Votre pharmacie à portée de clics.</span> 
        </div>
    </div>
</body>
</html>


<!--
        <div id="page" class="container">
		
                <?php include_once "panier.php"; ?>
            	<?php require "liste.php"; ?>
        </div>
        
-->

