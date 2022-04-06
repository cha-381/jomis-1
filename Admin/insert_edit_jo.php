<?php

  include('../config/db_config.php');
 

  $alert_msg = ''; 
  

  if (isset($_POST['insert'])) {


    $jo_no = $_POST['jo_no'];
     $no = $_POST['new_number'];
    $jo_name = $_POST['name'];
    $jo_id = $_POST['jo_id'];
    $jo_schedule = $_POST['schedule'];
    $jo_schedule1 = $_POST['schedule1'];
    $jo_schedule2 = $_POST['schedule2'];
    $jo_rate = $_POST['rate'];
     $jo_period = $_POST['period'];
     $jo_regdays = $_POST['jo_regdays'];
    $jo_time = $_POST['time1'];
    $jo_empcode = $_POST['empcode'];
    $jo_middle = $_POST['jo_middle'];
    $jo_last = $_POST['jo_last'];
    $jo_photo = $_POST['jo_photo'];
    $jo_total = $_POST['jo_total'];
    $jo_month1 = $_POST['jo_month1'];
    $jo_days1 = $_POST['jo_days1'];
    $jo_time1 = $_POST['jo_time1'];
    $jo_rate1 = $_POST['jo_rate1'];
    $jo_month2 = $_POST['jo_month2'];
    $jo_days2 = $_POST['jo_days2'];
    $jo_years= $_POST['jo_years'];
    $jo_time2 = $_POST['jo_time2'];
    $jo_rate2 = $_POST['jo_rate2'];
    $jo_no_days = $_POST['jo_no_days'];
    $jo_day1 = $_POST['jo_day1'];
    $jo_day2 = $_POST['jo_day2'];
    $jo_charges = $_POST['jo_charges'];
    $jo_day3 = $_POST['jo_day3'];
    $jo_uniq = $_POST['jo_uniq'];
    $jo_dept = $_POST['jo_dept'];
     $jo_abbre = $_POST['jo_abbre'];
    $jo_objid_pro = $_POST['jo_objid_pro'];
    $jo_prev_amount = $_POST['jo_prev_amount'];
    $jo_prev_prj = $_POST['jo_prev_prj'];
    $jo_total_amount = ($jo_rate * $jo_day1) + ($jo_rate1 * $jo_day2) + ($jo_rate2 * $jo_day3);
    $jo_new_amount=  $jo_prev_amount + $jo_total_amount;
    $jo_new_prj_amount=  $jo_prev_prj - $jo_total_amount;

      
    $insert_schedule_sql  = "INSERT INTO schedule SET 
        JobOrderNo               = :jo_no,
        EmpPhoto                  = :jo_photo,
        id_no                     = :new_number,
        FName                     = :name,
        Schedule                 = :schedule,
        Schedule1                 = :schedule1,
        Schedule2                 = :schedule2,
        Rate                     = :rate,
        Period                   = :period,
         RegDays                   = :jo_regdays,
        Years                   = :jo_years,
        Time1                    = :time1,
        EmpCode                  = :empcode,
        MName                    = :jo_middle,
        LName                    = :jo_last,
        no                       = :jo_total,
        Month1                  = :jo_month1,
        Days1                    = :jo_days1,
        Time2                    = :jo_time1,
        Rate1                    = :jo_rate1,
        Month2                  = :jo_month2,
        Days2                    = :jo_days2,
        Time3                    = :jo_time2,
        Rate2                    = :jo_rate2,
        NoDays                   = :jo_no_days,
        Day1                     = :jo_day1,
         Day2                     = :jo_day2,
          Day3                     = :jo_day3,
          Charges                  = :jo_charges,
          Department               = :jo_dept,
          OldAmount                 = :jo_prev_amount,
          OldPrjAmount              = :jo_prev_prj,
          objid_pro                 = :jo_objid_pro,
          Uniq                     = :jo_uniq,
          Amount                     = :jo_new_amount,
          PrjAmount                     = :jo_new_prj_amount,
         ID_sched                     = :jo_id,
         abbre                    = :jo_abbre,
          TotalAmount             =:jo_total_amount
        ";

      $schedule_data = $con->prepare($insert_schedule_sql);
      $schedule_data->execute([
        ':jo_no'             => $jo_no, 
        ':new_number'          => $no,
        ':jo_photo'          => $jo_photo,
        ':name'              => $jo_name,
        ':schedule'          => $jo_schedule,
        ':schedule1'          => $jo_schedule1,
        ':schedule2'          => $jo_schedule2,
        ':period'            => $jo_period,
        ':jo_regdays'         => $jo_regdays,
        ':jo_years'         => $jo_years,
        ':rate'              => $jo_rate,
        ':time1'             => $jo_time,
        ':empcode'           => $jo_empcode,
        ':jo_middle'         => $jo_middle,
        ':jo_last'           => $jo_last,
        ':jo_total'         => $jo_total,
        ':jo_month1'        => $jo_month1,
        ':jo_days1'         => $jo_days1,
        ':jo_time1'           => $jo_time1,
        ':jo_dept'           => $jo_dept,
        ':jo_rate1'         => $jo_rate1,
        ':jo_month2'        => $jo_month2,
        ':jo_days2'         => $jo_days2,
        ':jo_time2'           => $jo_time2,
        ':jo_rate2'         => $jo_rate2,
         ':jo_no_days'         => $jo_no_days,
         ':jo_day1'         => $jo_day1,
         ':jo_day2'         => $jo_day2,
         ':jo_day3'         => $jo_day3,
         ':jo_charges'         => $jo_charges,
         ':jo_uniq'         => $jo_uniq,
          ':jo_objid_pro'         => $jo_objid_pro,
          ':jo_prev_amount'   => $jo_prev_amount,
         ':jo_prev_prj'         => $jo_prev_prj,
         ':jo_new_amount'         => $jo_new_amount,
         ':jo_new_prj_amount'         => $jo_new_prj_amount,
          ':jo_id'         => $jo_id,
          ':jo_abbre'         => $jo_abbre,
         ':jo_total_amount'   => $jo_total_amount

      ]);

    
       $sql ="UPDATE createjo SET 
              Amount            = '$jo_new_amount',
              PreviousBalance   = '$jo_new_prj_amount',
              Laborers                = '$jo_total'

        WHERE   objid                = '$no'  

     ";
      $sql1 ="UPDATE schedule SET 
              Amount            = '$jo_new_amount',
              PrjAmount          = '$jo_new_prj_amount',
              noLaborers                = '$jo_total'
          
        WHERE   id_no                = '$no'  

     ";

      $sql2 ="UPDATE project SET 
              Balance          = '$jo_new_prj_amount'
          
        WHERE   objid                = '$jo_objid_pro'  

     ";

      $sql3 ="UPDATE employeedetail SET 
              JO                = '$jo_no'
          
        WHERE   ID                = '$jo_id'  

     ";






            
    if($con->query($sql) && $con->query($sql1)  && $con->query($sql2) && $con->query($sql3)){      
    $alert_msg .= ' 
          <div class="alert alert-success alert-dismissible">
              <i class="icon fa fa-success"></i>
             Proceed to continue!
          </div>     
      ';
     // $fname = $mname = $lname = $contact_number = $email = $uname = $upass = '';

     $btnStatus = 'disabled';
     $btnNew = 'enabled';
     $btnAdd = 'disabled';
 
header("Location:create_job_order_edit.php?objid=".$no);
}
}

?>


