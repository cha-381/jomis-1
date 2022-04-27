<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['add'])) {


    $days = $_POST['jo_days'];
    $no = $_POST['new_number'];
    $user = $_POST['user_no'];
      
    $insert_time_sql  = "INSERT INTO dayz SET 
        DaysSched             = :jo_days,
        id_no                 = :new_number,
        user                  = :user_no";

      $rate_data = $con->prepare($insert_time_sql);
      $rate_data->execute([
        ':jo_days'             => $days,
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

 
