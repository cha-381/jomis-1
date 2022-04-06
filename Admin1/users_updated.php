<?php
    
 include('../config/db_config.php');
   if (isset($_POST['edit'])) {
    
    $id_user = $_POST['id'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $ename = $_POST['ext_name'];
    $email = $_POST['email'];
    $code = $_POST['code'];

    $abbre = $_POST['abbre'];
    $contact_number = $_POST['contact_number'];
    $uname = $_POST['username'];
    $account_type = $_POST['account_type'];
  
    $position = $_POST['position'];
    $office = $_POST['department'];
    $fileName = $_POST['location'];
    $status = $_POST['status'];
   
    
    // check if travelno number is available to avoid duplciation
    $sql ="UPDATE tbl_users SET 
                 first_name     = '$fname',
                middle_name    = '$mname',
                last_name      = '$lname',
                ext_name       = '$ename',
                code            = '$code',
                abbre          = '$abbre',
                account_type   = '$account_type',
                contact_no     = '$contact_number',
                position       = '$position',
                email          = '$email',
                username       = '$uname',
                location       = '$fileName',
                Department     = '$office',
                userStatus     = '$status'
                -- userpass       = :upass,
                -- account_type   => :account_type 
                WHERE user_id  = '$id_user'";

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