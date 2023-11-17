<?php
require_once 'db.php';

$name = $_GET['name'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$id = $_GET['userId'];

$update = "UPDATE ajax SET Name='$name',Email='$email',pass='$pass' WHERE id='$id'";
$ex = mysqli_query($connect, $ex);
if ($ex) {
    echo "Update success";
} else {
    echo "Not Updated";
}

?>