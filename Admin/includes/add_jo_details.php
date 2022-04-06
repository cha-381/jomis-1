<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['insert'])) {


    $job_no = $_POST['job_no'];
    $jo_laborers = $_POST['jo_laborers'];
    $jo_amount = $_POST ['jo_amount'];
    $jo_balance = $_POST['jo_balance'];
         $job_charges = $_POST['job_charges'];
         $job_dept = $_POST['job_dept'];
         $job_prjname = $_POST['job_prjname'];
         $job_date = $_POST['job_date'];
         $job_pro = $_POST['job_pro'];
  
  

      
  $sql ="UPDATE createjo SET 
            Amount                 = '$jo_amount',
            PreviousBalance        = '$jo_balance',
            DateJo                 = '$job_date',
            Laborers               = '$jo_laborers'

      
        WHERE   JobOrderNo = '$job_no'";


  $sql1 ="UPDATE project SET 
                Balance   = '$jo_balance'
        WHERE   objid = '$job_pro'";

    $sql2 ="UPDATE schedule SET 
            Amount                = '$jo_amount',
            Charges               = '$job_charges',
            PrjAmount             = '$jo_balance',
            noLaborers            = '$jo_laborers'
   
        WHERE   JobOrderNo = '$job_no' 
             ";
  

 if($con->query($sql) && $con->query($sql1) && $con->query($sql2)){
      $alert_msg .= ' 
          <div class="alert alert-success alert-dismissible">
              <i class="icon fa fa-success"></i>
             Completed!
          </div>     
      ';
     // $fname = $mname = $lname = $contact_number = $email = $uname = $upass = '';

     $btnStatus = 'disabled';
     $btnNew = 'enabled';
     $btnAdd = 'disabled';
   }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }
 
?>


 
