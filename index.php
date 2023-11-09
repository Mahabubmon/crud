<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
  <title>CRUD APP</title>
</head>

<body>
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
                      <?php echo $i; ?>
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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="index.js"></script>
</body>

</html>