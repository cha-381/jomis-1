<?php


  include('../config/db_config.php');

  if(isset($_POST['delete'])){

  $delete_id = $_POST['id'];
  $delete_sched = $_POST['ID_sched'];
  $delete= "";

   $sql ="UPDATE employeedetail SET JO        = '$delete'
       WHERE   ID = '$delete_sched'";


if($con->query($sql)){
  

  $btnStatus='disabled';
   }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }

?>