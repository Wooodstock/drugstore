
<form name="form_conn" id="form_conn" action="scripts/traitements.php" method="post">
<input type="hidden" name="id_form" value="1">
Mon Compte :</br>
<input type="text" name="login" value="Login" onclick="this.value='';" onfocus="this.value='';"/><a href="lostpassword.php">Mot de passe oubliée?</a> <br />
<input type="password" name="pass" value="Mot de Passe" onclick="this.value='';" onfocus="this.value='';"><a href="compte.php">Vous inscrire</a><br />
<input type="submit" name="connexion" value="Connexion">
</form>

<?php
if (isset($erreur)) echo '<br /><br />',$erreur;  
?>

