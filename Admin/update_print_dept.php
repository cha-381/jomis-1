<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['insert'])) {


    $dept_id = $_POST['PrintDept'];
    $users_id = $_POST['user_id'];
   
      
  $sql ="UPDATE tbl_users SET 
    PrintDept   = '$dept_id' 

    WHERE   user_id = '$users_id'";

 if($con->query($sql)){

   $btnStatus = 'disabled';
   $btnNew = 'enabled';
    }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }

?>


 
