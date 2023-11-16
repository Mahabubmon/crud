<?php
require_once 'db.php';
//read data
$select = "SELECT * FROM ajax";
$ex = mysqli_query($connect, $select);
while ($row = mysqli_fetch_array($ex)) { ?>
    <tr>
        <td>
            <?php echo $row['Name']; ?>
        </td>
        <td>
            <?php echo $row['Email']; ?>
        </td>
        <td>
            <?php echo $row['pass']; ?>
        </td>
    </tr>
<?php }


?>