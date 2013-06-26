<div id="log">
<form name="form_conn" id="form_conn" action="scripts/traitements.php" method="post">
    <input type="hidden" name="id_form" value="1">
    <input type="text" name="login" value="Login" onclick="this.value='';" onfocus="this.value='';"/><br />
    <input type="password" name="pass" value="Mot de Passe" onclick="this.value='';" onfocus="this.value='';"><a href="compte.php">Vous inscrire</a><br />
    <input type="submit" name="connexion" value="Connexion">
</form>
</div>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;  
?>

