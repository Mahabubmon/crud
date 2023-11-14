<?php
require_once 'config.php';

class Database extends Config
{

    //insert User Intro database
    public function insert($fname, $lname, $email, $phone)
    {
        $sql = 'INSERT INTo user_tbl (first_name, last_name, email, phone) VALUES(:fname, :lname, :email, :phone)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['fname' => $fname, 'lname' => $lname, 'email' => $email, 'phone' => $phone]);
        return true;
    }

}

?>