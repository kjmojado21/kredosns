<?php 
session_start();
class Connection{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'sm_kredo';
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);
        if($this->conn->connect_error){
            die($this->conn->connect_error);
        }else{
            return $this->conn;
        }
    }

}


?>