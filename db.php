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
            echo 'Successfully Connected!';

        } catch (PDOEXception $e) {
            echo $e->getMessage();
        }
    }
}

$obj = new Database();
?>