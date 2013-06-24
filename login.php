
<form action="scripts/connexion.php" method="post">
Mon Compte :</br>
<input type="text" name="login" value="Login" onclick="this.value='';" onfocus="this.value='';"/><a href="lostpassword.php">Mot de passe oubliée?</a> <br />
<input type="password" name="pass" value="Mot de Passe" onclick="this.value='';" onfocus="this.value='';"><a href="inscription.php">Vous inscrire</a><br />
<input type="submit" name="connexion" value="Connexion">
</form>

<?php
if (isset($erreur)) echo '<br /><br />',$erreur;  
?>

