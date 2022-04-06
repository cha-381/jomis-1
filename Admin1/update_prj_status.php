<?php
    
 include('../config/db_config.php');
   if (isset($_POST['add'])) {

       $id = $_POST['objid'];
       $prjsts = $_POST['status'];
     

     
    // check if travelno number is available to avoid duplciation
    $sql ="UPDATE project SET status                 = '$prjsts'

        WHERE  objid                    = '$id'        

     ";
            
   if($con->query($sql)){
             $alert_msg .= '<div class="alert alert-danger alert-dismissible"><i class="icon fa fa-lock"></i>Budget Close</div>';


    $btnStatus = 'disabled';
     $btnNew = 'enabled';
    }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Check Carefully';
    }


  

?>
