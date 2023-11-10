<?php
class Database
{
    private $dsn = "mysql:host=localhost;dbname=crud";
    private $user = "root";
    private $pass = "";
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->pass);


        } catch (PDOEXception $e) {
            echo $e->getMessage();
        }
    }

    public function insert($fname, $lname, $email, $phone)
    {
        $sql = "INSERT INTO users (first_name, last_name,email,phone) VALUES(:fname,)";
    }
}

$obj = new Database();
?>