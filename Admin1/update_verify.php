<?php
    
 include('../config/db_config.php');
  if (isset($_POST['insert'])) {
    

       $emp_id = $_POST['ID'];
        $emp_report = $_POST['Report'];
      
     
    
    // check if travelno number is available to avoid duplciation
       $sql ="UPDATE employeedetail SET 
               Report               = '$emp_report'
              

        WHERE  ID              = '$emp_id'  

     ";


              
    if($con->query($sql)){
            $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Success</div>';

$btnStatus = 'disabled';
           

    }
        else{
            $_SESSION['error'] = $con->error;
           
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';


    }
    
           
           
  
?>