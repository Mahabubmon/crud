<?php
require_once 'db.php';

$userId = $_POST['userId'];
$delete = "DELETE * FROM ajax WHERE id='$userId'";
$query = mysqli_query($connect, $delete);
?>