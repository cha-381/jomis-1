<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['insert'])) {


    $budgetNo = $_POST['budgetno'];
    $project_name = $_POST['projectname'];
    $project_budget = $_POST['projectbudget'];
    $project_charges = $_POST['projectcharges'];
    $project_status = $_POST['projectstatus']; 
    $project_year = $_POST['projectyear'];
    $project_abbre = $_POST['projectabbre'];
    $project_code = $_POST['projectcode'];
     $project_dept = $_POST['projectdept'];
     $project_supp = "0.00";

    
    $insert_project_sql  = "INSERT INTO project SET 
        BudgetNo               = :budgetno,
        ProjectName            = :projectname,
        ProjectBudget           = :projectbudget,
        Balance                 = :projectbudget,
        status                   = :projectstatus,
        year                    = :projectyear,
        code                    = :projectcode,
        abbre                   = :projectabbre,
        Department              = :projectdept,
        Charges                = :projectcharges
        ";

      $project_data = $con->prepare($insert_project_sql);
      $project_data->execute([
        ':budgetno'             => $budgetNo, 
        ':projectname'           => $project_name,
        ':projectcharges'       => $project_charges,
        ':projectstatus'         =>  $project_status,
        ':projectyear'          => $project_year,
        ':projectcode'         =>  $project_code,
        ':projectabbre'         =>  $project_abbre ,
        ':projectdept'         =>  $project_dept ,
        ':projectbudget'       => $project_budget]);



        $insert_project1_sql  = "INSERT INTO allproject SET 
        BudgetNo               = :budgetno,
        ProjectName            = :projectname,
        ProjectBudget           = :projectbudget,
        SupplementedAmount      = :projectsupp,
        Balance1                 = :projectbudget,
        year                    = :projectyear,
        abbre                   = :projectabbre,
        status                   = :projectstatus,
        code                    = :projectcode,
        Department             = :projectdept,
        Charges                = :projectcharges
        ";


      $project1_data = $con->prepare($insert_project1_sql);
      $project1_data->execute([
       ':budgetno'             => $budgetNo, 
        ':projectname'           => $project_name,
        ':projectcharges'       => $project_charges,
        ':projectyear'          => $project_year,
        ':projectabbre'         =>  $project_abbre ,
        ':projectstatus'         =>  $project_status,
        ':projectcode'         =>  $project_code,
        ':projectdept'         =>  $project_dept,
        ':projectsupp'         =>  $project_supp,
        ':projectbudget'       => $project_budget]);


      $alert_msg .= ' 
          <div class="alert alert-success alert-dismissible">
              <i class="icon fa fa-success"></i>
             Project Successfully Added!
          </div>     
      ';
     // $fname = $mname = $lname = $contact_number = $email = $uname = $upass = '';

     $btnStatus = 'disabled';
     $btnNew = 'enabled';
header('location: add_project.php');
    }
 
?>