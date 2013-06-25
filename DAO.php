<?php
    echo "Hello World <br>";
    
    foreach(PDO::getAvailableDrivers() as $driver)
        echo $driver, '<br>';
    
    $tns = "
        (DESCRIPTION =
          (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.0.21)(PORT = 1521))
          (CONNECT_DATA =
            (SERVER = DEDICATED)
            (SERVICE_NAME = orcl.0.2.15)
          )
        )";
    $db_username = "pharmaweb";
    $db_password = "admin";
    try{
        $conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
    }catch(PDOException $e){
        echo ($e->getMessage());
    }
    
    $reponse = $conn->query('SELECT * FROM FOURNISSEUR');
    
    while($donnee = $reponse->fetch()){
        echo $donnee['NOM_FOURNISSEUR'].'<br>';
    }
    
    $reponse->closeCursor();
    
    echo 'Query effectuée <br>';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
