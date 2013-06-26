<div id="log">
    <h4>Bienvenue <?php
    @session_start();
    echo $_SESSION['login']; ?></h3>
    <a href="deconnexion.php">Déconnexion</a>
</div>