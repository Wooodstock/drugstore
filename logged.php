 <html>
<head>
<title>Espace membre</title>
</head>
 
<body>
Bienvenue<?php echo htmlentities(trim($_SESSION['login'])); ?>!<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html> 