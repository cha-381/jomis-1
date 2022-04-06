<?php
    
 include('../config/db_config.php');
   if (isset($_POST['edit'])) {
    
    $id_user = $_POST['id'];
 
    $upass = $_POST['password'];

 
   
   $hashed_password  = password_hash($password, PASSWORD_DEFAULT);
    
    // check if travelno number is available to avoid duplciation
    $sql ="UPDATE tbl_users SET 
          
                userpass       = '$hashed_password'
         
                -- userpass       = :upass,
                -- account_type   => :account_type 
                WHERE user_id  = '$id_user'";

if($con->query($sql)){
             $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Successfully Updated</div>';


    $btnStatus = 'disabled';
     $btnNew = 'enabled';
    }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Check Carefully';
    }
 
  
?>