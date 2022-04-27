<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['add'])) {


    $rate = $_POST['jo_rate'];
    $no = $_POST['new_number'];
    $user = $_POST['user_no'];
      
    $insert_rate_sql  = "INSERT INTO rate SET 
        Salary                = :jo_rate,
        id_no                 = :new_number,
        user                  = :user_no";

      $rate_data = $con->prepare($insert_rate_sql);
      $rate_data->execute([
        ':jo_rate'             => $rate,
        ':new_number'          => $no,
        ':user_no'             => $user
      ]);

$alert_msg .= ' 
          <div class="alert alert-success alert-dismissible">
              <i class="icon fa fa-success"></i>
             Successfully Added!
          </div>     
      ';
        $btnStatus = 'disabled';
     $btnNew = 'enabled';
     $month = 'disabled';
header("Location:create_job_order_edit.php?objid=".$no);
    }
    
 

?>

 
