<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  

  if (isset($_POST['insert'])) {


    $createjo_id = $_POST['objid'];
    $createjo_item1 = $_POST['Item1'];
    $createjo_item2 = $_POST['Item2'];
    $createjo_item3 = $_POST['Item3'];
    $createjo_item4 = $_POST['Item4'];  
    $createjo_item5 = $_POST['Item5'];
    $createjo_description1 = $_POST['Description1'];
    $createjo_description2 = $_POST['Description2'];
    $createjo_description3 = $_POST['Description3'];
    $createjo_description4 = $_POST['Description4'];
    $createjo_description5 = $_POST['Description5'];
      
  $sql ="UPDATE createjo SET 
    Item1   = '$createjo_item1', 
    Item2   = '$createjo_item2', 
    Item3   = '$createjo_item3', 
    Item4   = '$createjo_item4',  
    Item5   = '$createjo_item5',
    Description1   = '$createjo_description1', 
    Description2   = '$createjo_description2', 
    Description3   = '$createjo_description3',
    Description4   = '$createjo_description4',
    Description5   = '$createjo_description5'


        WHERE   objid = '$createjo_id'";

 if($con->query($sql)){
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


 
