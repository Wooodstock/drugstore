<?php
	
	class DAO{
	
	private $conn;
	private $login;
	private $password;
	private $tns = " 
        (DESCRIPTION =
          (ADDRESS = (PROTOCOL = TCP)(HOST = 10.176.244.112)(PORT = 1521))
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
        
        public function disconnect(){
            if($this->conn){
                unset($this->conn);
                $this->conn = false;
                return true;
            }
        }
        
        public function switchConn($login, $password){
            $this->disconnect();
            $this->password = $password;
            $this->login = $login;
            $this->connect();
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
        
        public static function getDAO($currentUser){
            if($currentUser == "pharmacien"){
                return new DAO('pharmacien', 'pharmacien');
            } else if($currentUser == 'fournisseur'){
                return new DAO('fournisseur', 'fournisseur');
            } else if($currentUser == 'preparateur'){
                return new DAO('preparateur', 'preparateur');
            } else{
                return new DAO('PHARMAWEB', 'admin');
            }
        }
}
?>