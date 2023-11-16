<?php
$connect = mysqli_connect("localhost", "root", "", "ajax");
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$insert = "INSERT INTO ajax (Name,Email,pass)
VALUES('$name','$email','$pass')";
$query = mysqli_query($connect, $insert);
if ($query) {
    echo "Data Insert Successfully";
} else {
    echo "Data  Not Inserted";
}

?>