<?php
    include('../config/db_config.php');

    if (isset($_POST['update_profile'])){
         //to check if data are passed
       
   
    $upass = $_POST['userpass'];

    $user = $_POST['user_id'];

    $hashed_password  = password_hash($userpass, PASSWORD_DEFAULT);

    $sql ="UPDATE tbl_users SET 
                userpass         = ' $hashed_password'
        WHERE  user_id              = '$user'";

       if($con->query($sql)){
            $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Successfully Updated</div>';

          $btnStatus = 'disabled';
            $btnNew = 'disabled';  

    }
        else{
            $_SESSION['error'] = $con->error;
           
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';


    }
?>