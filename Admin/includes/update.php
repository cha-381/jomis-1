<?php
    include('../config/db_config.php');

    if (isset($_POST['update_profile'])){
         //to check if data are passed
       
    $fname = $_POST['first_name'];
    $mname = $_POST['middle_name'];
    $lname = $_POST['last_name'];
    $ename = $_POST['ext_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_no'];
    $uname = $_POST['username'];
    $position = $_POST['position'];
    $office = $_POST['department'];
    $user = $_POST['user_id'];


    $sql ="UPDATE tbl_users SET 
                first_name          = '$fname',
                middle_name          = '$mname',
                last_name          = '$lname',
                ext_name          = '$ename',
                contact_no      = '$contact_number',
                position       = '$position',
                email          = '$email',
                username          = '$uname',
               department     = '$office'
        WHERE  user_id              = '$user'";

       if($con->query($sql)){
            $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Successfully Updated</div>';

          $btnStatus = 'disabled';
            $btnNew = 'disabled';  

    }
        else{
            $_SESSION['error'] = $con->error;
           
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';


    }
?>