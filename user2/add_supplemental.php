<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['add'])) {


    $budget = $_POST['budno'];
    $proj_name = $_POST['projname'];
    $proj_budget = $_POST['projbudget'];
    $proj_charges = $_POST['projcharges'];
    $proj_year = $_POST['projyear'];
    $proj_bal = $_POST['projbal'];
     $proj_abbre = $_POST['projabbre'];
     $proj_objid = $_POST['projobjid'];
     $proj_code = $_POST['projcode'];
      $proj_add = $_POST['projadd'];
    
  
       $insert_project1_sql  = "INSERT INTO allproject SET 
        BudgetNo               = :budno,
        ProjectName            = :projname,
        ProjectBudget           = :projbudget,
        SupplementedAmount       = :projbudget,
        Balance1                 = :projbal,
        year                    = :projyear,
        abbre                   = :projabbre,
        obj_id                   = :projobjid,
        code                   = :projcode,
        Charges                = :projcharges
        ";


      $project1_data = $con->prepare($insert_project1_sql);
      $project1_data->execute([
       ':budno'             => $budget, 
        ':projname'           => $proj_name,
        ':projcharges'       => $proj_charges,
        ':projyear'          => $proj_year,
        ':projcode'          => $proj_code,
        ':projbal'          => $proj_bal,
        ':projabbre'         =>  $proj_abbre,
        ':projobjid'         =>  $proj_objid,
        ':projbudget'       => $proj_budget]);


   $sql ="UPDATE project SET 
    Balance = '$proj_add',
    ProjectBudget = '$proj_add'

        WHERE   objid = '$proj_objid'";

 if($con->query($sql)){
 $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Added Supplemental</div>';
 header('location: add_project.php');
    }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }
 
?>