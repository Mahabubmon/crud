<?php
require_once 'db.php';

$id = $_GET['userId'];
$select = "SELECT * FROM ajax WHERE id = '$id'";
$ex = mysqli_query($connect, $select);
$row = mysqli_fetch_array($ex);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .edit {
            background-color: tomato;
            color: white;
            font-size: 1.2rem;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Page</h1>
        <input type="text" id="name" value="<?php echo $row['Name']; ?>" placeholder="enter Name..."><br>
        <input type="email" id="email" value="<?php echo $row['Email']; ?>" placeholder="enter Email..."><br>
        <input type="text" id="pass" value="<?php echo $row['pass']; ?>" placeholder="enter Password..."><br><br>
        <button class="edit" onclick="UPDATE_DATA(<?php echo $row['id']; ?>)">Edit</button>


</body>

</html>