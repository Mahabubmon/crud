<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Latest compiled and bootstrap minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- data Table -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <!-- font-aowsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>CRUD APP</title>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#"> <i class="fa-solid fa-shop"></i> Proyojone Pashe</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>s
        <li class="nav-item">
          <a class="nav-link" href="#">Contect</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="text-center text-danger font-weight-normal my-3">
          CRUD Application
        </h4>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h4 class="mt-2 text-primary">All users in Database!</h4>
      </div>
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary m-1 float-left" data-bs-toggle="modal" data-bs-target="#addModal">
          <i class="fas fa-user-plus fa-lg"></i>
          &nbsp;&nbsp;Add New User
        </button>
        <a href="#" class="btn btn-success m-1 float-right"><i class="fa fa-table fa-lg"></i>Export to Excel</a>
      </div>
      <hr class="my-1" />
      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive" id="showUser">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add New user  Modal -->
  <div class="modal" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New User</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Add New body -->
        <div class="modal-body px-4">
          <!-- <form action="" method="post" id="form-data">
            <div class="form-group">
              <input type="text" name="fname" class="form-control" placeholder="First Name" required>
            </div>
            <div class="form-group">
              <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" id="insert" value="Add User" class="btn btn-danger btn-block" required>
            </div>
          </form> -->
          <form action="" method="post" id="form-data">
            <div class="mb-3 mt-3">
              <label for="fname" class="form-label">First Name:</label>
              <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
            </div>
            <div class="mb-3">
              <label for="lname" class="form-label">Last Name:</label>
              <input type="text" class="form-control" id="lname" placeholder="Enter Last name" name="lname" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="tel" class="form-label">Phone:</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
            </div>

            <input type="submit" id="insert" class="btn btn-primary"></input>
          </form>
        </div>

        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div> -->


        <!-- Add New user  Modal -->
        <div class="modal" id="addModal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add New User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Add New body -->
              <div class="modal-body px-4">
                <form action="" method="post" id="form-data">
                  <div class="mb-3 mt-3">
                    <label for="fname" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname"
                      required>
                  </div>
                  <div class="mb-3">
                    <label for="lname" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter Last name" name="lname"
                      required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                  </div>
                  <div class="mb-3">
                    <label for="tel" class="form-label">Phone:</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
                  </div>

                  <input type="submit" id="insert" class="btn btn-primary"></input>
                </form>
              </div>




              <!-- Latest compiled and minified CSS -->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

              <!-- Latest compiled JavaScript -->
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

              <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
              <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
              <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
              <!-- <script src="/index.js"></script> -->
              <script>
                $(document).ready(function () {


                  showAllUsers();
                  function showAllUsers() {

                    $.ajax({
                      url: "action.php",
                      type: "POST",
                      data: { action: "view" },
                      success: function (response) {
                        // console.log(response);
                        $("#showUser").html(response);
                        $("table").DataTable({
                          order: [0, 'desc']
                        });
                      }

                    });
                  }

                  // inser ajax request
                  $("#insert").click(function (e) {
                    if ($("#form-data")[0].checkVisibility()) {
                      e.preventDefault();
                      $.ajax({
                        url: "action.php",
                        type: "POST",
                        data: $("#form-data").serialize() + "&action=insert",
                        success: function (response) {
                          Swal.fire({
                            title: 'User Added Successfully',
                            type: 'success'
                          })
                          $("#addModal").modal('hide');
                          $("#form-data")[0].reset();
                          showAllUsers();
                        }
                      });
                    }
                  });

                });

              </script>
</body>

</html>