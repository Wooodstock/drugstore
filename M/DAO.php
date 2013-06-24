<?php
	
	class DAO{
	
	
	
	private $login;
	private $password;
	private $tns = " 
        (DESCRIPTION =
          (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.0.15)(PORT = 1521))
          (CONNECT_DATA =
            (SERVER = DEDICATED)
            (SERVICE_NAME = orcl.0.2.15)
          )
    )";
 	
	public function DAO($login, $password){
		$this->login = $login;
		$this->password = $password;
	}	
	
	public function showdriver(){
	    foreach(PDO::getAvailableDrivers() as $driver)
        echo $driver, '<br>';
	}
	
	public function connect(){
            try{
            $this->conn = new PDO("oci:dbname=".$this->tns,$this->login,$this->password);
            }catch(PDOException $e){
                    echo ($e->getMessage());
            }
            return $this->conn;
	}

    public function testConnection(){
		$reponse = $this->conn->query('SELECT * FROM FOURNISSEUR');
    
	    while($donnee = $reponse->fetch()){
        	echo $donnee['NOM_FOURNISSEUR'].'<br>';
        }
    
        $reponse->closeCursor();
        echo 'Query effectuée <br>';
    }
    
        public function getConn() {
            return $this->conn;
        }

        public function setConn($conn) {
            $this->conn = $conn;
        }
}
?>