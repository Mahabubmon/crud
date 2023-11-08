<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
  <title>CRUD APP</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="fab fa-wolf-pack-battalion"></i>Proyojone Pashe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Dropdown
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
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
        <button type="button" class="btn btn-primary m-1 float-left">
          <i class="fas fa-user-plus fa-lg"></i>
          &nbsp;&nbsp;Add New User
        </button>
        <a href="#" class="btn btn-success m-1 float-right"><i class="fa fa-table fa-lg"></i>Export to Excel</a>
      </div>
      <hr class="my-1" />
      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive" id="showUser">
            <table id="example" class="table table-striped" style="width: 100%">
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
              <tbody>
                <?php for ($i = 1; $i <= 100; $i++): ?>
                  <tr>
                    <th>
                      <?php $i ?>
                    </th>
                    <th>Name
                      <?= $i ?>
                    </th>
                    <th>Position
                      <?= $i ?>
                    </th>
                    <th>Office
                      <?= $i ?>
                    </th>
                    <th>Age
                      <?= $i ?>
                    </th>
                    <th>Start date
                      <?= $i ?>
                    </th>

                  </tr>
                <?php endfor; ?>
              </tbody>



            </table>

            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="index.js"></script>
</body>

</html>