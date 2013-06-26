<div id="page" class="container">
		
		<div id="content">
			<h2>Produits</h2>
			<span class="byline">Votre pharmacie à portée de clics.</span>
			<br/>
		
                        <?php 
                        
                            include_once ('M/produit_DAO.php');
                            
                            $produitDAO;
                            if (isset($_SESSION['user']) && $_SESSION['user'] != 'FAILED'){
                            $produitDAO = new Produit_DAO($_SESSION['user']);
                            } else {
                                $produitDAO = new Produit_DAO(null);
                            }
                            
                            $currentPage = $_SERVER['SCRIPT_NAME'];
                            $list = array();
                            if($currentPage == '/drugstore/pharmacie.php'){
                                $list = $produitDAO->getAllPharma();
                            } else if ($currentPage == "/drugstore/parapharmacie.php"){
                                $list = $produitDAO->getAllParapharma();
                            }
                            if($list == null){
                                echo 'nothing here';
                            }
                            foreach ($list as $produit) {
                        ?>
			<div class="produit">
				<table>
					<tr>
						<td><img src=<?php echo 'images/'.$produit->getNom()?> alt="" /></td>
					</tr>
					<tr>
						<td><h2><?php echo $produit->getNom()?></h2></td>
					</tr>
					<tr>
						<td>Prix</td>
					</tr>
					<tr>
						<td><a href="fiche_produit.php" class="button">Voir</a></td>
					</tr>
				</table>
			</div>
                        <?php } ?>
		
	</div>
</div>
</div>