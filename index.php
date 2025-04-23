<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <script src="https://kit.fontawesome.com/1c26fb5c51.js" crossorigin="anonymous"></script>
  <title>CRUD Operations in OOP using PHP</title>
</head>

<body>
  <main class="mt-1 pt-3">
    <div class="container-fluid">
      <!-- Cards -->
      <div class="row dashboard-counts">
        <div class="col-md-12">
          <h4 class="fw-bold text-uppercase">Manage Users
            <a href="add-user.php" class="btn btn-success btn-sm" style="float:right">Add User</a>
          </h4>
        </div>

        <div class="col-md-12">
          <!-- Static alert message placeholder -->
          <!-- <div class="alert alert-success">User has been deleted successfully</div> -->

          <div class="card">
            <div class="card-header">All Users</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-responsive table-striped">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone No</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John Doe</td>
                      <td>john@example.com</td>
                      <td>1234567890</td>
                      <td>
                        <a href="edit-user.php" class="btn btn-primary btn-sm">Edit</a>
                        <a onclick="return confirm('Do you want to delete this?')" href="#" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jane Smith</td>
                      <td>jane@example.com</td>
                      <td>0987654321</td>
                      <td>
                        <a href="edit-user.php" class="btn btn-primary btn-sm">Edit</a>
                        <a onclick="return confirm('Do you want to delete this?')" href="#" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                    <!-- Add more static rows as needed -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>