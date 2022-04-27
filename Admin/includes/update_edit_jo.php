<?php
    
 include('../config/db_config.php');
   if (isset($_POST['update'])) {

        $job_num = $_POST['objid'];
        $job_no = $_POST['JobOrderNo'];  
        $jo_amount = $_POST ['Amount'];
        $job_prev = $_POST['PreviousBalance'];
        $job_charge = $_POST['Charges'];
        $job_pro = $_POST['objid_pro'];
        $job_code = $_POST['code'];
        $job_laborers = $_POST['job_laborers'];
        $job_bal = $_POST['Balance'];
        $job_balc = $_POST['Bal'];
        $job_subject = $_POST['Subject'];
        $job_sub = "Modified";
      
    
    $sql ="UPDATE createjo SET 
            Amount                 = '$jo_amount',
            objid                  = '$job_num',
            Laborers               = '$job_laborers',
            Charges                 = '$job_charge',
            Subject                 = '$job_subject',
            Bal                    = '$job_balc',
            PreviousBalance        = '$job_prev'

        WHERE   JobOrderNo = '$job_no' 
     ";

     $sql1 ="UPDATE schedule SET 
            noLaborers               = '$job_laborers',
            Amount                   = '$jo_amount'
   
        WHERE   JobOrderNo = '$job_no' ";

     $sql2 ="UPDATE project SET 
            Balance                 = '$job_bal'
   
        WHERE  objid = '$job_pro' and code = '$job_code'
             ";

     $sql3 ="UPDATE createjo SET 
            Subject                 = '$job_sub'

        WHERE   objid > '$job_num' AND Charges = '$job_charge' AND objid_pro = '$job_pro' ";
     
    if($con->query($sql) && $con->query($sql1) && $con->query($sql2) && $con->query($sql3)){
             $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Successfully Updated</div>';

    $btnAdd = 'disabled';
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
