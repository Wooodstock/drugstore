<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<div id="header" class="container">
	
		<!-- <h1><a href="#">DRUGSTORE</a></h1> -->
		<?php
                        include_once('M/produit.php');
                        include_once('M/pharma.php');
                        include_once('C/ctrlPanier.php');

                        @session_start();
			if (isset($_SESSION['login']) && $_SESSION['login'] != 'FAILED'){
				require "logged.php";
			}
			else{
				require "login.php";
			}?>
	<div id="menu">
		<ul>
                    <li class="current_page_item"><a href="index.php" accesskey="1" title="">Home</a></li>
                    <li><a href="pharmacie.php" accesskey="2" title="">Pharmacie</a></li>
                    <li><a href="parapharmacie.php" accesskey="3" title="">Parapharmacie</a></li>
                    <li><a href="#" accesskey="4" title="">Mon Compte</a></li>
                    <li><a href="#" accesskey="5" title="">Contact</a></li>
		</ul>
	</div>
</div>
