<?php
   include('config/db_config.php');
//variable declaration
   $alert_msg = '';
   //sign in button
    if (isset($_POST['signin'])){
        //to check if data are passed
        //echo "<pre>";
          //  print_r($_POST);
        //echo "</pre>";

        $username = $_POST['username'];
        $password = $_POST['password'];

        $check_username_sql = "SELECT * FROM tbl_users where username = :uname";
        
        $username_data = $con->prepare($check_username_sql);
        $username_data ->execute([
          ':uname' => $username
        ]);
          if ($username_data->rowCount() > 0){
            while ($result = $username_data->fetch(PDO::FETCH_ASSOC)) {
          
              //from database already hash
              $hash_password = $result['userpass'];
    
              //hash the $u_pass and compared to $hashed_password
              if (password_verify($password, $hash_password)) {
               session_start();
               $_SESSION['id'] = $result['user_id'];

                if ($result['account_type'] == 1) {
                  header('location: admin'); //location is folder
                }
                elseif ($result['account_type'] == 2){
                  header('location: user');
                }
                 elseif ($result['account_type'] == 3){
                  header('location: user2');
                }
              }
              else{
                //echo "Password does not match!";
                $alert_msg .= ' 
                <div class="new-alert new-alert-warning alert-dismissible">
                    <i class="icon fa fa-warning"></i>
                    Incomplete Details!
                </div>     
            ';
              }
    
                
            }
        }else{
          $alert_msg .= ' 
          <div class="new-alert new-alert-warning alert-dismissible">
              <i class="icon fa fa-warning"></i>
              Username does not exist!
          </div>     
      ';
        }

        
      
        

    }

  

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SP | Travel Order</title>

  <!-- Custom fonts for this template-->
  <link href="plugins/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="dist/css/adminlte.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" >

      <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2%">
            <h1 class="h5 mb-3 text-gray-800">Travel Order</h1>
          </div>

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
          
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-200 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">  <a href="loginerms.php">
                      <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">User Signin</div>
                      </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x" style="color:lightgrey;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-light mb-3 shadow h-200 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="registererms.php">
                      <div class="text-sm font-weight-bold text-success text-uppercase mb-1">User Signup</div>
                 </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x" style="color:lightgrey;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-2 mb-4">
              <div class="card border-left-info shadow h-200 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="admin/">
                      <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Admin Login</div>
                   </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x" style="color:lightgrey;"><!-- icon --></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
          
          </div>

         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
    <?php include_once('includes/footer.php');?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class=""></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="plugins/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="dist/js/adminlte-2.min.js"></script>

</body>

</html>
