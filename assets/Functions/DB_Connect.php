<?php



 class DB_Connect {
    private $conn;

    public function connect() {
        
$this->conn = new mysqli("localhost", "root", "","amzcrm");        
        return $this->conn;
    }
}


?>
