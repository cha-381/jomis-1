<?php
    
 include('../config/db_config.php');
   if (isset($_POST['edit'])) {

       $id_schedule = $_POST['id'];
 

       $Over1 = $_POST['O1'];
       $Over2 = $_POST['O2'];
       $Over3 = $_POST['O3'];
       $Over4 = $_POST['O4'];
       $Over5 = $_POST['O5'];
    
    // check if travelno number is available to avoid duplciation
    $sql ="UPDATE schedule SET
               O1                   = '$Over1',
               O2                   = '$Over2',
               O3                   = '$Over3',
               O4                   = '$Over4',
               O5                   = '$Over5'

        WHERE   id                = '$id_schedule'  

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
