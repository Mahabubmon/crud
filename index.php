<?php include 'inc/header.php'; ?>
<?php 
$db =  new Database();
$query = "SELECT * FROM tbl_user";
$read = ;

?>





<table class="tblone">
    <tr>
        <th width="25%">Serial</th>
        <th width="25%">Name</th>
        <th width="25%">Email</th>
        <th width="25%"> Skill</th>
        <th width="25%"> Action</th>
    </tr>
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Skill</td>
        <td><a href="update.php?id=1">Edit</a></td>
    </tr>
</table>












<?php include 'inc/footer.php'; ?>