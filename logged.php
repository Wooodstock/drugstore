<div id="logged">
    <h3>Bienvenue <?php
    @session_start();
    echo $_SESSION['login']; ?></h3>
    <u><a href="deconnexion.php">Déconnexion</a></u>
</div>