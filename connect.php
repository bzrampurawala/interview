<?php
class connect {
    private $conn;
 
    // Connecting to database
    public function connection() {
        require_once 'config.php';
         
        // Connecting to mysql database
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
         
        // return database handler
        return $this->conn;
    }
}
 
?>