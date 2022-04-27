<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['insert'])) {


 
    $pay_no = $_POST['pay_no'];
    $jo_no = $_POST['jo_no'];
    $pay_amount = $_POST['pay_amount'];
    $jo_amount = $_POST['jo_amount'];
    $pay_date = date('Y-m-d', strtotime($_POST['pay_date']));
    $prev_balance = $_POST['prev_balance'];
    $proj_charges = $_POST['proj_charges'];
    $id_number = $_POST['id_number'];
    $id_num = $_POST['id_num'];
    $status = $_POST['status'];
    $dept = $_POST['dept'];
    $period = $_POST['period'];
 
    $amount = $_POST['amount'];
    $subject = "Done";
      
    $insert_schedule_sql  = "INSERT INTO payroll SET 
        JobOrderNo               = :jo_no,
        PayrollNo                = :pay_no,
        PayAmount                = :pay_amount,
        PosingDate               = :pay_date,
        JoAmount                 = :jo_amount,
        AvailableBalance         = :amount,
        PreviousBalance          = :prev_balance,
        id_no                    = :id_number,
        id_num                    = :id_num,
        status                   = :status,
        Department               = :dept,
        PeriodCovered            = :period,
      
        Charges                  = :proj_charges
        ";

      $schedule_data = $con->prepare($insert_schedule_sql);
      $schedule_data->execute([
        ':jo_no'             => $jo_no, 
        ':pay_no'            => $pay_no,
        ':pay_amount'        => $pay_amount,
        ':jo_amount'         => $jo_amount,
        ':pay_date'          => $pay_date,
        ':amount'            => $amount,
        ':prev_balance'      => $prev_balance,
        ':id_number'         => $id_number,
        ':id_num'            => $id_num,
        ':status'            => $status,
        ':dept'              => $dept,
        ':period'            => $period,
        ':proj_charges'      => $proj_charges
      ]);





$sql ="UPDATE `project` SET Balance   = '$amount',
               Actual       =        '$amount'
        WHERE   objid       =        '$id_num'  
     ";

$sql1 = "UPDATE `createjo` SET status   = '$status',
                PayrollNo                = '$pay_no',
                PayAmount                = '$pay_amount'
        WHERE   JobOrderNo               = '$jo_no'  
     ";

$sql2 = "UPDATE `schedule` SET PayrollNo   = '$pay_no'
        WHERE   JobOrderNo               = '$jo_no'  
     ";

$sql3 = "UPDATE `createjo` SET 
                Subject                 = '$subject'
        WHERE   objid  < '$id_number'  AND Charges = '$proj_charges' AND objid_pro = '$id_num'
     ";


if($con->query($sql) And $con->query($sql1) And $con->query($sql2) And $con->query($sql3)){
     
     $alert_msg .= ' 
          <div class="alert alert-success alert-dismissible">
              <i class="icon fa fa-success"></i>
             Success!
          </div>     
      ';
    $btnStatus = 'disabled';
     $btnNew = 'enabled';
     $month = 'disabled';
   }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }





?>

 
