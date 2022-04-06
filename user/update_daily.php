<?php
    
 include('../config/db_config.php');
   if (isset($_POST['update'])) {

       $id_schedule = $_POST['id'];
       $codeEmp = $_POST['EmpCode'];

    
       $One1 = $_POST['One1'];
       $Two2 = $_POST['Two2'];
       $Three3 = $_POST['Three3'];
       $Four4 = $_POST['Four4'];
       $Five5 = $_POST['Five5'];

     
    // check if travelno number is available to avoid duplciation
    $sql ="UPDATE schedule SET One1  = '$One1',
               Two2                  = '$Two2',
               Three3                = '$Three3',
               Four4			           = '$Four4',
               Five5                 = '$Five5',
          
               EmpCode 	 			       = '$codeEmp'

        WHERE   id                    = '$id_schedule'         

     ";
            
   if($con->query($sql)){
             $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Successfully Updated</div>';


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
