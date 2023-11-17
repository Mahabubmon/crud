<?php
require_once 'db.php';
//read data
$select = "SELECT * FROM ajax";
$ex = mysqli_query($connect, $select);
while ($row = mysqli_fetch_array($ex)) { ?>
    <tr>
        <td>
            <?php echo $row['id']; ?>
        </td>
        <td>
            <?php echo $row['Name']; ?>
        </td>
        <td>
            <?php echo $row['Email']; ?>
        </td>
        <td>
            <?php echo $row['pass']; ?>
        </td>
        <td><button onclick="Delete(<?php echo $row['id']; ?>)">DELETE</button></td>
        <td><button onclick="Edit(<?php echo $row['id']; ?>)">Edit</button></td>
    </tr>
<?php }


?>