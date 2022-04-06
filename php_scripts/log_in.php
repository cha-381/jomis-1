<?php
include("config/db_config.php");
$alert_msg='';
if (isset($_POST['submit'])){
    //to check if data are passed
    // echo "<pre>";
    //     print_r($_POST);
    // echo "</pre>";

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
           $_SESSION['last_login_timestamp'] = time();

           if ($result['account_type'] == 1) {
                  header('location: Admin1'); //location is folder
                }
                elseif ($result['account_type'] == 2){
                  header('location: user');
                }
                 elseif ($result['account_type'] == 3){
                  header('location: Admin');
                }
          }
          else{
            //echo "Password does not match!";
            $alert_msg .= ' 
            <div class="alert alert-warning alert-dismissible">
                    <i class="icon fa fa-warning"></i>
                    Incomplete Details!
                </div>  
        ';
          }

            
        }
    }else{
      $alert_msg .= ' 
      <div class="alert alert-warning alert-dismissible">
          <i class="icon fa fa-warning"></i>
          Username does not exist!
      </div>     
  ';
    }
}

  

    
?>