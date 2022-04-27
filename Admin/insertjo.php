<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['insert'])) {

    $jo_no = $_POST['jo'];
    $jo_charges = $_POST['jo_charges'];
    $jo_project_name = $_POST['jo_name'];
    $jo_budget = $_POST['jo_budget'];
    $jo_previous= $_POST['jo_previous'];
    $jo_period= $_POST['datefilter'];
    $jo_depart= $_POST['jo_depart'];
    $jo_abbre= $_POST['abbre'];
    $jo_user= $_POST['user'];
    $jo_dept_code= $_POST['jo_dept_code'];
    $job_uniq = $_POST['uniq'];
    $job_date = date('F d, Y', strtotime($_POST['job_date']));
    $jo_objid_pro = $_POST['jo_objid_pro'];
    $jo_sub= $_POST['jo_sub'];
    $jo_num= $_POST['jo_objid'];
    $jo_process = "Unprocessed";
  

  
    $insert_createjo_sql  = "INSERT INTO createjo SET 
        JobOrderNo               = :jo,
        Charges                  = :jo_charges,
        Uniq                     = :job_uniq,
        ProjectName              = :jo_name,
        code                     = :jo_dept_code,
        ProjectBudget            = :jo_budget,
        PreviousBalance          = :jo_previous,
        Department               = :jo_depart,
        DateJo                   = :job_date,
        abbre                    = :abbre,
        user_id                  = :user,
        objid_pro                = :objid_pro,
        Subject                  = :jo_sub,
        Remarks                  = :jo_process,
        PeriodCovered            = :datefilter
        ";

      $createjo_data = $con->prepare($insert_createjo_sql);
      $createjo_data->execute([
        ':jo'                   => $jo_no, 
        ':jo_charges'           => $jo_charges,
        ':job_uniq'             => $job_uniq,
        ':jo_name'              => $jo_project_name,
        ':jo_dept_code'         => $jo_dept_code,
        ':jo_budget'            => $jo_budget,
        ':jo_previous'          => $jo_previous,
        ':jo_depart'            => $jo_depart,
        ':jo_sub'               => $jo_sub,
        ':job_date'             => $job_date,
        ':abbre'                => $jo_abbre,
        ':user'                 => $jo_user,
        ':objid_pro'            => $jo_objid_pro,
        ':jo_process'           => $jo_process,
        ':datefilter'           => $jo_period
   
      ]);

    
      $sql="UPDATE tbl_users SET 
           ProjectName    = '$jo_project_name', 
           Charges        = '$jo_charges', 
           JO             = '$jo_no' 
           WHERE user_id  = '$jo_user'";



    if($con->query($sql)){
           $alert_msg .= ' 
          <div class="alert alert-success alert-dismissible">
              <i class="icon fa fa-success"></i>
             Proceed to continue!
          </div>     
      ';
     // $fname = $mname = $lname = $contact_number = $email = $uname = $upass = '';

     $btnStatus = 'disabled';
     $btnNew = 'enabled';
     
    }
 }


?>

 
