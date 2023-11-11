<?php
require_once 'db.php';

$db = new Database();

if (isset($_POST['action']) && $_POST['action'] == "view") {

    $output = '';
    $data = $db->read();
    if ($db->totalRowCount() > 0) {
        $output .= '<table id="example" class="table table-striped" style="width: 100%">
              <thead>

                <tr>
                  <th>Id</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>E-mail</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>';

        foreach ($data as $row) {
            $output .= '<tr class="text-center text-secondary">
            <td>
                ' . $row['id'] . '
              </td>
              <td>' . $row['first_name'] . '
              </td>
              <td>' . $row['last_name'] . '
              </td>
              <td>' . $row['email'] . '
              </td>
              <td>' . $row['phone'] . '
              </td>
             <td>
                <a href="" title="View Details" class="text-success"><i class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;
                <a href="" title="Edit" class="text-primary"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;
                <a href="" title="Delete" class="text-danger"><i class="fa-solid fa-delete-left"></i></a>
              </td> 
              </tr>
            
            ';
        }
        $output .= '</tbody></table>';
        echo $output;

    } else {
        echo '<h3 class="text-center text-seccondary mt-5">:(No any users present in the database!)</h3>';
    }
}


?>