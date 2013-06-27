<div id="login">
<form name="form_conn" id="form_conn" action="scripts/traitements.php" method="post">
    <input type="hidden" name="id_form" value="1">
    <input type="text" name="login" size="28" value="Login" onclick="this.value='';" onfocus="this.value='';"/><br />
    <input type="password" name="pass" size="28"  value="Mot de Passe" onclick="this.value='';" onfocus="this.value='';"><br/>
    <input type="submit" name="connexion" value="Connexion"><a href="compte.php">Inscrivez vous!</a><br />
</form>
</div>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;  
?>

