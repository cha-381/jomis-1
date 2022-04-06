<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['add'])) {


    $period_code = $_POST['ID'];
    $period_start = date('F d, Y', strtotime($_POST['periodStart']));
    $period_end = date('F d, Y', strtotime($_POST['periodEnd']));
    $period_combine = $period_start."-".$period_end;
    $period_cut_off ="CUT OFF";
    $period_jo ="-";
    $period_jo1 ="0.00";
    
    $add_period_sql  = "INSERT INTO period SET 
        ID                    = :ID,
        PeriodCovered1        = :periodStart,
        Period                = :periodEnd
        ";

      $period_data = $con->prepare($add_period_sql);
      $period_data->execute([
        ':ID'               => $period_code, 
        ':periodStart'      => $period_start,
        ':periodEnd'        => $period_end
      ]);

       $per_sql  = "INSERT INTO schedule SET 
        ID_sched            = :ID,
        Period                = :period,
        Schedule              = :sched,
        JobOrderNo              = :jo,
        Time1                 = :jo,
        Rate                  = :jo1
        ";

      $per_data = $con->prepare($per_sql);
      $per_data->execute([
        ':ID'         => $period_code, 
        ':period'           => $period_combine,
        ':jo'               => $period_jo,
        ':jo1'               => $period_jo1,
        ':sched'            => $period_cut_off ]);

      $alert_msg .= ' 
          <div class="alert alert-success alert-dismissible">
              <i class="icon fa fa-success"></i>
             Proceed to continue!
          </div>     
      ';
     // $fname = $mname = $lname = $contact_number = $email = $uname = $upass = '';

      

     $btnStatus = 'disabled';
     $btnNew = 'enabled';
header('location: employeedetails.php?ID='.$period_code);
}


?>

 
