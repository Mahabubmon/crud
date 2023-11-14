<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Application</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</head>

<body>

  <!-- //Add New User Modal -->
  <div class="modal fade" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="" id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3 gx-3">
              <div class="col">
                <input type="text" name="fname" id="fname" class="form-control
                form-control-lg" placeholder="Enter First Name" required>
                <div class="invalid-feedback">
                  First name is required
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input type="text" name="lname" id="lname" class="form-control
                form-control-lg" placeholder="Enter Last Name" required>
                <div class="invalid-feedback">
                  Last name is required
                </div>
              </div>
            </div>
            <div class="mb-3">
              <input type="email" name="email" id="email" class="form-control form-control-lg"
                placeholder="Enter E-mail" required>
              <div class="invalid-feedback">E-mail is required</div>
            </div>
            <div class="mb-3">
              <input type="phone" name="phone" id="phone" class="form-control form-control-lg" placeholder="Enter Phone"
                required>
              <div class="invalid-feedback"> Phone is required</div>
            </div>
            <div class="mb-3">
              <input type="submit" value="Add Users" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- //Add New User Modal end -->
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 class="text-primary">All users in the
            database</h4>
        </div>
        <div>
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewUserModal">Add New
            User</button>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Acion</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Rahul</td>
                <td>Ataullah</td>
                <td>rahul@test.com</td>
                <td>01234567899</td>
                <td>
                  <a href="" class="btn btn-success btn-sm rounded-pill py-0">Edit</a>
                  <a href="" class="btn btn-danger btn-sm rounded-pill py-0">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>