<?php
    
 include('../config/db_config.php');
  if (isset($_POST['update'])) {
    

       $emp_id = $_POST['ID'];
        $emp_code = $_POST['EmpCode'];
        $emp_fname = $_POST['EmpFname'];
        $emp_mname = $_POST['EmpMname'];
        $emp_lname = $_POST['EmpLname'];
        $emp_ename = $_POST['EmpExt'];
        $emp_address = $_POST['EmpAddress'];
        $emp_brgy = $_POST['EmpBrgy'];
        $emp_city = $_POST['EmpCity'];
        $emp_province = $_POST['EmpProvince'];
        $emp_birth = date('Y-m-d', strtotime($_POST['EmpBirth']));

        $emp_status = $_POST['E_Status'];
        $emp_civil_status = $_POST['EmpStatus'];
        $emp_gender = $_POST['EmpGender'];
        $emp_skills = $_POST['EmpSkills'];
        $emp_designation = $_POST['EmpDesignation'];
        $emp_joining = date('Y-m-d', strtotime($_POST['EmpJoingdate']));
        $emp_service = $_POST['EmpNoService'];
        $emp_eligible = $_POST['EmpEligible'];
        $emp_email = $_POST['EmpEmail'];
        $emp_department = $_POST['EmpDept'];
        $emp_contact = $_POST['EmpContactNo'];
        $emp_remarks = $_POST['Remarks'];
        $emp_citizen = $_POST['EmpCitizen'];
        $emp_placebirth = $_POST['PlaceBirth'];
        $emp_category = $_POST['Category'];
        $emp_others = $_POST['Others'];
        $emp_charges = $_POST['Charges'];
        $fileName = $_POST['EmpPhoto'];

        $emp_spousefname = $_POST['SpouseFn'];
        $emp_spousemname = $_POST['SpouseMn'];
        $emp_spouselname = $_POST['SpouseLn'];
        $emp_spouseename = $_POST['SpouseEn'];
        $emp_spouseocc = $_POST['SpouseOcc'];
        $emp_child1      = $_POST['EmpChild1'];
        $emp_child1_yr   = date('Y-m-d', strtotime($_POST['EmpChildB1']));
        $emp_child2      = $_POST['EmpChild2'];
        $emp_child2_yr   = date('Y-m-d', strtotime($_POST['EmpChildB2']));
        $emp_child3      = $_POST['EmpChild3'];
        $emp_child3_yr   = date('Y-m-d', strtotime($_POST['EmpChildB3']));
        $emp_child4      = $_POST['EmpChild4'];
        $emp_child4_yr   = date('Y-m-d', strtotime($_POST['EmpChildB4']));
        $emp_child5      = $_POST['EmpChild5'];
        $emp_child5_yr   = date('Y-m-d', strtotime($_POST['EmpChildB5']));
       
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
       $sql ="UPDATE employeedetail SET EmpFname   = '$emp_fname',
               EmpCode               = '$emp_code',
               EmpMname              = '$emp_mname',
               EmpLname              = '$emp_lname',
               EmpExt                = '$emp_ename',
               EmpAddress            = '$emp_address',
               EmpBrgy               = '$emp_brgy',
               EmpCity               = '$emp_city',
               EmpProvince           = '$emp_province',
               EmpBirth              = '$emp_birth',
               EmpPhoto              =  '$fileName',
               E_Status              = '$emp_status',
               EmpStatus            = '$emp_civil_status',
               EmpGender             = '$emp_gender',
               EmpSkills             = '$emp_skills',
               EmpJoingdate          = '$emp_joining',
               EmpNoService          = '$emp_service',
               EmpEligible           = '$emp_eligible',
               EmpEmail              = '$emp_email',
               EmpContactNo          = '$emp_contact',
               EmpDept               = '$emp_department',
               EmpCitizen            = '$emp_citizen',
               PlaceBirth            = '$emp_placebirth',
               Category              = '$emp_category',
               Others                = '$emp_others',
               Charges               = '$emp_charges',
               Remarks               = '$emp_remarks',
               EmpDesignation        = '$emp_designation',
               SpouseFn              = '$emp_spousefname',
               SpouseMn              = '$emp_spousemname',
               SpouseLn              = '$emp_spouselname',
               SpouseEn              = '$emp_spouseename',
               SpouseOcc             = '$emp_spouseocc',
               EmpChild1             = '$emp_child1',
               EmpChildB1            = '$emp_child1_yr',
               EmpChild2             = '$emp_child2',
               EmpChildB2            = '$emp_child2_yr',
               EmpChild3             = '$emp_child3',
               EmpChildB3            = '$emp_child3_yr',
               EmpChild4             = '$emp_child4',
               EmpChildB4            = '$emp_child4_yr',
               EmpChild5             = '$emp_child5',
               EmpChildB5            = '$emp_child5_yr'
                 


        WHERE  ID              = '$emp_id'  

     ";

     $sql1="UPDATE empeducation SET  EmpCode = '$emp_code' WHERE ID   = '$emp_id'";
     $sql2="UPDATE empexperience SET EmpCode = '$emp_code' WHERE ID   = '$emp_id'";
     $sql3="UPDATE no SET EmpCode = '$emp_code' WHERE ID   = '$emp_id';";
     $sql4="UPDATE pag_ibig SET EmpCode = '$emp_code'  WHERE Name   = '$emp_fname'";
     $sql5="UPDATE sss SET EmpCode = '$emp_code'  WHERE Name   = '$emp_fname'";
     $sql6="UPDATE schedule SET EmpCode = '$emp_code'  WHERE FName   = '$emp_fname'";

              
    if($con->query($sql) And $con->query($sql1) And $con->query($sql2) And $con->query($sql3) And $con->query($sql4) And $con->query($sql5) And $con->query($sql6)){
            $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Successfully Updated</div>';

           

    }
        else{
            $_SESSION['error'] = $con->error;
           
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';


    }
    
           
           
  
?>