<?php
    
 include('../config/db_config.php');
   if (isset($_POST['update'])) {

      
        $job_no = $_POST['JobOrderNo'];  
        $jo_amount = $_POST ['Amount'];
        $job_prev = $_POST['PreviousBalance'];
        $job_charge = $_POST['Charges'];
        $job_code = $_POST['code'];
        $job_pro = $_POST['job_pro'];
    

    
    $sql ="UPDATE createjo SET 
            Amount                 = '$jo_amount',
            PreviousBalance        = '$job_prev',
            Charges                 = '$job_charge'
       


        WHERE   JobOrderNo = '$job_no' 
     ";

     $sql1 ="UPDATE schedule SET 
            Amount                 = '$jo_amount'
   
        WHERE   JobOrderNo = '$job_no' ";

     $sql2 ="UPDATE project SET 
            Balance                 = '$job_prev'
   
        WHERE  objid = '$job_pro' and code = '$job_code'
             ";
    if($con->query($sql) && $con->query($sql1) && $con->query($sql2)){
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
