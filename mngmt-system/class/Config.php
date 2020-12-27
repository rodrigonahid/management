<?php
class Database{
    private $datasource = "mysql:host=localhost;dbname=user_system";
    private $dbuser = "root";
    private $dbpassword= "";
    public $conn;

    public function __construct(){
        try{
            $this->conn = new PDO($this->datasource,$this->dbuser,$this->dbpassword);
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }
}