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
		
		<?php require "login.php"; ?>
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
		<?php require "panier.php"; ?>
		<div class="title">
			<img src="images/logo.jpg" />
			<h2>Votre pharmacie à portée de clics</h2>
	</div>
	<div id="page" class="container">
	<!--
		<div id="sidebar">
			<div id="sbox1">
				<div class="title">
					<h2>Mauris vulputate</h2>
				</div>
				<ul class="style2">
					<li><a href="#">Semper mod quis eget mi dolore</a></li>
					<li><a href="#">Quam turpis feugiat sit dolor</a></li>
					<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
					<li><a href="#">Semper mod quisturpis nisi</a></li>
					<li><a href="#">Consequat etiam lorem phasellus</a></li>
					<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
					<li><a href="#">Semper mod quisturpis nisi</a></li>
				</ul>
			</div>
			<div id="sbox2">
				<div class="title">
					<h2>Integer gravida</h2>
				</div>
				<ul class="style2">
					<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
					<li><a href="#">Ornare in hendrerit in lectus</a></li>
					<li><a href="#">Semper mod quis eget mi dolore</a></li>
					<li><a href="#">Quam turpis feugiat sit dolor</a></li>
					<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
					<li><a href="#">Semper mod quisturpis nisi</a></li>
					<li><a href="#">Consequat etiam lorem phasellus</a></li>
				</ul>
			</div>
		</div>
		-->
		
		<div id="content">
			<?php require "form_compte.php"; ?>
	</div>
</div>
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
