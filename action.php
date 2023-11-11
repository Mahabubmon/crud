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
           $output .= '<tr>'; 
    }

}


?>