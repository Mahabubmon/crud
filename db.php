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
        $stmt->execute(['fname' => $fname, 'lname' => $lname, 'email' => $email, 'phone' => $phone]);

        return true;
    }
    public function read()
    {
        $data = array();
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $data[] = $row;

        }
        return $data;
    }
    public function getUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

$obj = new Database();
?>