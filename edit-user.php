<?php
include "config/database.php";
$obj = new Query();
  #update data
if (isset($_GET['id']) && $_GET['id']>0){
$oldata= array();

$id=$_GET['id'];
$resultById = $obj->getDataById("users","*",'id',$id);
$oldata = mysqli_fetch_assoc($resultById);
  }else{
    header("LOCATION: index.php");
    exit;
  }
if(isset($_POST['submit'])){
  $data= $_POST;
  unset($data['submit']);
  $res=$obj->updateData("users",$data,'id',$id);
  if($res){
    $_SESSION['success'] = "User has been Updated Successfully";
  }else{
    $_SESSION['error'] = "something went wrong";
  }
  header("LOCATION: index.php");
  }
?>
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
  <title>CRUD Operations - Edit User</title>
</head>

<body>
  <main class="mt-1 pt-3">
    <div class="container-fluid">
      <!-- Cards -->
      <div class="row dashboard-counts">
        <div class="col-md-12">
          <h4 class="fw-bold text-uppercase">Edit User</h4>
        </div>

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Fill the form</div>
            <div class="card-body">
              <form method="post" action="#">

                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Full Name</label>
                      <input type="text" class="form-control" name="name" value= "<?php echo $oldata['name']; ?>" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $oldata['email']; ?>" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Phone No</label>
                      <input type="text" class="form-control" name="phone" value="<?php echo $oldata['phone']; ?>" />
                    </div>
                  </div>

                  <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-success">Save</button>
                    <a href="index.php" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>