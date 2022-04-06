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
        $emp_dept_charge = $_POST['DeptCharge'];
        $emp_contact = $_POST['EmpContactNo'];
        $emp_remarks = $_POST['Remarks'];
        $emp_citizen = $_POST['EmpCitizen'];
        $emp_placebirth = $_POST['PlaceBirth'];
        $emp_category = $_POST['Category'];
        $emp_others = $_POST['Others'];
        $emp_charges = $_POST['Charges'];
        $emp_control = $_POST['ControlNo'];
        $emp_end = $_POST['EndDate'];

       

        $emp_spousefname = $_POST['SpouseFn'];
        $emp_spousemname = $_POST['SpouseMn'];
        $emp_spouselname = $_POST['SpouseLn'];
        $emp_spouseename = $_POST['SpouseEn'];
        $emp_spouseocc = $_POST['SpouseOcc'];
        $emp_child1      = $_POST['EmpChild1'];
        $emp_child1_yr   = $_POST['EmpChildB1'];
        $emp_child2      = $_POST['EmpChild2'];
        $emp_child2_yr   = $_POST['EmpChildB2'];
        $emp_child3      = $_POST['EmpChild3'];
        $emp_child3_yr   = $_POST['EmpChildB3'];
        $emp_child4      = $_POST['EmpChild4'];
        $emp_child4_yr   = $_POST['EmpChildB4'];
        $emp_child5      = $_POST['EmpChild5'];
        $emp_child5_yr   = $_POST['EmpChildB5'];
          $emp_child6      = $_POST['EmpChild6'];
        $emp_child6_yr   = $_POST['EmpChildB6'];
        $emp_child7      = $_POST['EmpChild7'];
        $emp_child7_yr   = $_POST['EmpChildB7'];
        $emp_child8      = $_POST['EmpChild8'];
        $emp_child8_yr   = $_POST['EmpChildB8'];
        $emp_child9      = $_POST['EmpChild9'];
        $emp_child9_yr   = $_POST['EmpChildB9'];
        $emp_child10      = $_POST['EmpChild10'];
        $emp_child10_yr   = $_POST['EmpChildB10'];
       
     
    
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
               DeptCharge            = '$emp_dept_charge',
               EndDate               = '$emp_end',
               EmpCitizen            = '$emp_citizen',
               PlaceBirth            = '$emp_placebirth',
               Category              = '$emp_category',
               ControlNo             = '$emp_control',
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
               EmpChildB5            = '$emp_child5_yr',
               EmpChild6             = '$emp_child6',
               EmpChildB6            = '$emp_child6_yr',
               EmpChild7             = '$emp_child7',
               EmpChildB7            = '$emp_child7_yr',
               EmpChild8             = '$emp_child8',
               EmpChildB8            = '$emp_child8_yr',
               EmpChild9             = '$emp_child9',
               EmpChildB9            = '$emp_child9_yr',
               EmpChild10             = '$emp_child10',
               EmpChildB10            = '$emp_child10_yr'
                 


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