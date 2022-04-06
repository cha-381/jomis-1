<?php
 
include ('config/db_config.php');
session_start();
$user_id = $_SESSION['id'];

$get_user_sql = "SELECT * FROM tbl_users WHERE user_id = :id";
$user_data = $con->prepare($get_user_sql);
$user_data->execute([':id' => $user_id]);
while ($result = $user_data->fetch(PDO::FETCH_ASSOC)) {
    $db_first_name = $result['first_name'];
    $db_middle_name = $result['middle_name'];
    $db_last_name = $result['last_name'];
    $db_email_ad = $result['email'];
    $db_contact_number = $result['contact_no'];
    $username = $result['username'];
    $department= $result['Department'];
    $photo= $result['location'];
}

if (isset($_POST['signin'])){

    //to check if data are passed
    // echo "<pre>";
    //     print_r($_POST);
    // echo "</pre>";

   
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
           $_SESSION['last_login_timestamp'] = time();

            if ($result['account_type'] == 1) {
              

              header('location: admin1'); //location is folder
            }
            else {
              header('location: user');
            }
          }
          else{
            //echo "Password does not match!";
        
          }

            
        }
    }
  

  

}

//variable declaration


  
?>


<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="plugins/datepicker/datepicker3.css"> -->
 <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Custom CSS -->
  <link rel ="stylesheet" href = "styles/form-style.css">
   <style>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("Capture.png");
  
  /* Add the blur effect */
  filter: blur(5px);
  -webkit-filter: blur(5px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */

.login-box{
  width:470px;
  height: 350px;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  top:50%;
  left:50%;
  position:absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}
.avatar{
  width: 190px;
  height: 190px;
  border-radius: 100%;
  position: absolute;
  top:-80px;
  left: 30%;
}

.login-box p{
  margin: 0;
  padding: 0;
  font-weight: bold;
}
.login-box input{
  width: 100%;
  margin-top: 50px;
  margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 50px;
  color:#fff;
  font-size: 16px;

}

.login-box a{
  text-decoration: none;
  font-size: 14px;
  color: #fff;

}
.login-box a:hover{
  color: #39dc79;
}
</style>     

</head>
      <body class="hold-transition lockscreen">
        <div class="bg-image"></div>
<!-- Automatic element centering -->

<div class="login-box fadeIn second">
  
  <img src="dist/img/<?php echo $photo?>" class="avatar">
        
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
  
  <div class="form-group has-feedback" align="center">

        <input type="password" class="form-control" name="password" placeholder="Enter your password to retreive your session">
        <span class="glyphicon glyphicon-lock form-control-feedback" style="font-size: 18px">     
       Job Order Management System </span>
      </div>
   
 
  <div align="center">
          <input type="submit" class="btn btn-success pull-right" name="signin"  style="height: 40px;  width: 90%;" value="Unlock">
        </div>

        <div class="help-block text-center">
   <div class="lockscreen-logo">
      <title>LGUSCC-ITCSO | Login</title>
  <label style="display: block; text-align: right; font-size: 18px">
           <a href="index.php">Or sign in as a different user</a></label>
  </div>
</div>
  </div>
 
 
  </div>
  </div>


</form>
<!-- /.center -->

<!-- jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
