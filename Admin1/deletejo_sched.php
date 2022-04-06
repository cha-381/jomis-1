<?php


  include('../config/db_config.php');

  if(isset($_POST['delete'])){

  $delete_id = $_POST['id'];
    $jo_all_amount = $_POST['Amount'];
    $jo_prj_amount = $_POST['PrjAmount'];
    $jo_id_no = $_POST['id_no'];
    $jo_objid_pro = $_POST['objid_pro'];
    $jo_laborers = $_POST['noLaborers'];
  
  

    $sql1 ="UPDATE project SET 
              Balance           = '$jo_prj_amount'    
        WHERE   objid           = '$jo_objid_pro' ";


    $sql2 ="UPDATE createjo SET 
              Amount            = '$jo_all_amount',
              PreviousBalance   = '$jo_prj_amount',
              Laborers          = '$jo_laborers'      
        WHERE   objid           = '$jo_id_no' ";


    $sql ="UPDATE schedule SET
              Amount            = '$jo_all_amount',
              noLaborers        = '$jo_laborers'
        WHERE id_no             = '$jo_id_no'";


    $delete_user_sql = "DELETE FROM schedule WHERE id = :id";
    $delete_user_data = $con->prepare($delete_user_sql);
    $delete_user_data->execute([':id'=>$delete_id]);


if($con->query($sql) && $con->query($sql1) && $con->query($sql2)){
    $alert_msg .= '<div class="alert alert-danger alert-dismissible"><i class="icon fa fa-check"></i>Deleted</div>';

    $btnStatus='disabled';
  }
  else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }
?>