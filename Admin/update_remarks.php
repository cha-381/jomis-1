<?php
    
 include('../config/db_config.php');
   if (isset($_POST['update'])) {

        $objid = $_POST['objid'];
        $remarks = $_POST['Remarks'];
        $user = $_POST['Checkby'];

     $sql ="UPDATE createjo SET 
            Remarks                   = '$remarks',
            Checkby                   = '$user'
   
        WHERE   objid = '$objid' ";

 
    if($con->query($sql)){
             $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Updated</div>';

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
