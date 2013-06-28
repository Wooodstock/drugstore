
		<div id="content">
			<h1>Produits</h1>
			<span class="byline">Votre pharmacie à portée de clics.</span>
			<br/><br/>
		
                        <?php 
                        
                            include_once ('M/produit_DAO.php');
                            
                            $produitDAO;
                            if (isset($_SESSION['user']) && $_SESSION['user'] != 'FAILED'){
                            $produitDAO = new Produit_DAO($_SESSION['user']);
                            } else {
                                $produitDAO = new Produit_DAO(null);
                            }
                            
                            $currentPage = $_SERVER['SCRIPT_NAME'];
                            //echo $currentPage;
                            $list = array();
/*
<<<<<<< HEAD
                            if($currentPage == '/workspaceTristan/drugstore/pharmacie.php'){
                                $list = $produitDAO->getAllPharma();
                            } else if ($currentPage == "/workspaceTristan/drugstore/parapharmacie.php"){
=======
*/
                            if($currentPage == '/WorkspaceMac/drugstore/pharmacie.php'){
                                $list = $produitDAO->getAllPharma();
                            } else if ($currentPage == "WorkspaceMac/drugstore/parapharmacie.php"){

                            
                                $list = $produitDAO->getAllParapharma();
                            }
                            if($list == null){
                                $list = $produitDAO->getAllParapharma();
                            }
                            foreach ($list as $produit) {
                        ?>
			<div class="produit">
				<table>
					<tr>
						<td><a href="fiche_produit.php?id=<?php echo $produit->getId()?>"><img src=<?php echo 'images/'.$produit->getNom().'.jpg'?> alt="" /></a></td>
					</tr>
					<tr>
						<td><h2><?php echo $produit->getNom()?></h2></td>
					</tr>
					<tr>
						<td><h3><?php echo $produit->getPrix()?>€</h3></td>
					</tr>
				</table>
			</div>
                        <?php } ?>
		
	</div>
</div>