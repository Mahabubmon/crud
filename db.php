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
        $sql = "INSERT INTO users (first_name, last_name,email,phone) VALUES
        (:fname,:lname,:email,:phone)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array['fname'=>$fname,'lname'=>$lname,'email'=>$email,'phone'=>$phone]);

        return true;
    }
}

$obj = new Database();
?>