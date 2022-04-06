<?php
    
 include('../config/db_config.php');
   if (isset($_POST['update'])) {

       $emp_id = $_POST['ID'];
    

        $emp_elem_sch = $_POST['ElementarySchool'];
        $emp_elem_year = $_POST['ElementaryYear'];
        $emp_sec_sch = $_POST['SecondarySchool'];
        $emp_sec_year = $_POST['SecondaryYear'];
        $emp_col_sch = $_POST['SchoolCollegeGra'];
        $emp_col_year = $_POST['YearPassingGra'];
        $emp_voc_sch = $_POST['Vocational'];
        $emp_voc_year = $_POST['VocationalYear'];
        $emp_gra_sch = $_POST['Graduate'];
        $emp_gra_year =$_POST['GraduateYear'];
        $emp_elem_award = $_POST['ElementaryAward'];
        $emp_sec_award = $_POST['SecondaryAward'];
        $emp_col_award = $_POST['CollegeAward'];
        $emp_voc_award = $_POST['VocationalAward'];
        $emp_grad_award = $_POST['GraduateAward'];



    
    // check if travelno number is available to avoid duplciation
    $sql ="UPDATE empeducation SET   
              ElementarySchool      = '$emp_elem_sch',
               ElementaryYear        = '$emp_elem_year',
               SecondarySchool       = '$emp_sec_sch',
               SecondaryYear         = '$emp_sec_year',
               SchoolCollegeGra      = '$emp_col_sch',
               YearPassingGra        ='$emp_col_year',
               Vocational            = '$emp_voc_sch',
               VocationalYear        = '$emp_voc_year',
               Graduate              = '$emp_gra_sch',
               GraduateYear          ='$emp_gra_year',
              ElementaryAward        = '$emp_elem_award',
              SecondaryAward        = '$emp_sec_award',
              CollegeAward        = '$emp_col_award',
              VocationalAward        = '$emp_voc_award',
              GraduateAward        = '$emp_grad_award'


        WHERE   ID                = '$emp_id'  

     ";

      $sql1 ="UPDATE employeedetail SET   ElementarySchool      = '$emp_elem_sch',
               ElementaryYear        = '$emp_elem_year',
               SecondarySchool       = '$emp_sec_sch',
               SecondaryYear         = '$emp_sec_year',
               SchoolCollegeGra      = '$emp_col_sch',
               YearPassingGra        ='$emp_col_year',
               Vocational            = '$emp_voc_sch',
               VocationalYear        = '$emp_voc_year',
               Graduate              = '$emp_gra_sch',
               GraduateYear          ='$emp_gra_year',
              ElementaryAward        = '$emp_elem_award',
              SecondaryAward        = '$emp_sec_award',
              CollegeAward        = '$emp_col_award',
              VocationalAward        = '$emp_voc_award',
              GraduateAward        = '$emp_grad_award'


        WHERE   ID                = '$emp_id'  

     ";
            
    if($con->query($sql) && $con->query($sql1)){
             $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Successfully Updated</div>';
             $btnStatus ='disabled';
    }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }

  
?>
