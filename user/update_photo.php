<?php
    
 include('../config/db_config.php');
  if (isset($_POST['update'])) {
    

       $emp_id = $_POST['ID'];
    
        $fileName = $_POST['EmpPhoto'];
     
         $currentDir = getcwd();
    $uploadDirectory = "../dist/photo/";

    $errors = [];

    $fileExtensions = ['png','jpg','jpeg','gif',''];

    $fileName = $_FILES['myFiles']['name'];
    $fileSize = $_FILES['myFiles']['size'];
    $fileTmpName = $_FILES['myFiles']['tmp_name'];
    $fileType = $_FILES['myFiles']['type'];
    $target_file = $uploadDirectory . basename($_FILES['myFiles']['name']);
    $fileExtension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // $fileExtension = strtolower(end(explode('.',$fileName)));
    $uploadPath = $uploadDirectory . basename($fileName);

    if (!in_array($fileExtension, $fileExtensions)) {
        $errors[] = "This file extension is not allowed.";
    }
    if (empty($errors)) {
        $dipUpload = move_uploaded_file($fileTmpName, $uploadPath);


        if ($dipUpload) {
            $alert_msg1 .= ' 
       <div class="table-bordered">
           <i class="icon fa fa-success"></i>
           File has been uploaded
       </div>     
   ';
            // $fname = $mname = $lname = $contact_number = $email = $uname = $upass = '';


        } else {
            $alert_msg1 .= ' 
       <div class="alert alert-warning alert-dismissible"">
           <i class="icon fa fa-warning"></i>
           An Error Occured;
       </div>     
   ';
            // $fname = $mname = $lname = $contact_number = $email = $uname = $upass = '';

            $btnStatus = 'disabled';
            $btnNew = 'disabled';
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";

        }
    }
    
    // check if travelno number is available to avoid duplciation
       $sql ="UPDATE employeedetail SET
               EmpPhoto              =  '$fileName'

        WHERE  ID              = '$emp_id'  

     ";


              
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