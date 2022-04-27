<?php
    
 include('../config/db_config.php');
   if (isset($_POST['update'])) {

        $job_num = $_POST['id'];
        $job_no = $_POST['Remarks'];
        $no = $_POST['id_no'];  
        $user = $_POST['Checkby'];
  

     $sql ="UPDATE schedule SET 
            Remarks                   = '$job_no',
            Checkby                    = '$user'
   
        WHERE   id = '$job_num' ";

 
    if($con->query($sql)){
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
