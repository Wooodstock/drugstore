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
<div id="header" class="container">
	<div id="login">
		<!-- <h1><a href="#">DRUGSTORE</a></h1> -->
		<?php
			if (isset($_SESSION['login']) && $_SESSION['login'] != 'FAILED'){
				require "logged.php";
			}
			else{
				require "login.php";
			}?>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#" accesskey="1" title="">Home</a></li>
			<li><a href="#" accesskey="2" title="">Pharmacie</a></li>
			<li><a href="#" accesskey="3" title="">Parapharmacie</a></li>
			<li><a href="#" accesskey="4" title="">Mon Compte</a></li>
			<li><a href="#" accesskey="5" title="">Contact</a></li>
		</ul>
	</div>
</div>
<div id="wrapper">
	<div id="welcome" class="wrapper-style1">
		<div class="title">
			<img src="images/logo.jpg" />
			<h2>Votre pharmacie à portée de clics</h2>
	</div>
	
	<div id="page" class="container">
		<h1>Nom Produit</h1>
			<img src="images/pic01.jpg" alt="" /><br/>
			<span>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus velit, vulputate in massa facilisis, egestas mollis magna. 				Maecenas viverra in nisi sit amet suscipit. Etiam augue leo, cursus eget augue eget, semper placerat purus. Interdum et 					malesuada fames ac ante ipsum primis in faucibus. Curabitur eros justo, suscipit vel imperdiet eu, sodales a quam. Mauris 					eu urna a sem tempus malesuada. Integer non neque felis. Nullam fermentum, lectus mattis suscipit aliquet, odio eros 						tincidunt dolor, nec feugiat arcu justo eget nisi. Integer consectetur nibh ut augue condimentum lacinia. Aliquam id 						pharetra nunc, at posuere dolor.
			</span><br/><br/><br/>
			<a class="button">Acheter</a>
	</div>
	
	<div id="footer" class="container">
		<div>
			<h2>DRUGSTORE</h2>
			<span class="byline">Votre pharmacie à portée de clics.</span> </div>
		<!--
		<ul class="contact">
			<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="icon icon-facebook"><span></span></a></li>
			<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
		</ul>
		-->
	</div>
</div>
</body>
</html>
