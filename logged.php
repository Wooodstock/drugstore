<div id="login">
    <h3>Bienvenue <?php
    @session_start();
    echo $_SESSION['login']; ?></h3>
    <a href="deconnexion.php">Déconnexion</a>
</div>