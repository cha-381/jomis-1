<?php


session_start();
include ('../config/db_config.php');

$user_id = $_SESSION['id'];

 $btnStatus = 'enabled';
 $btnNew = 'disbled';  
$btnAdd = 'enabled';

//fetch user from database
$get_user_sql = "SELECT * FROM tbl_users where user_id = :id";
$user_data = $con->prepare($get_user_sql);
$user_data->execute([':id' => $user_id]);
while ($result = $user_data->fetch(PDO::FETCH_ASSOC)) {

    $db_user = $result['user_id'];
    $db_first_name = $result['first_name'];
    $db_middle_name = $result['middle_name'];
    $db_last_name = $result['last_name'];
    $db_contact_number = $result['contact_no'];
    $db_position = $result['position'];
    $db_email_ad = $result['email'];
    $db_user_name = $result['username'];
    $db_location = $result['location'];
    $db_department = $result['Department'];
    $db_code = $result['code'];

    }

    if (isset($_GET['objid'])) {

  $schedule_id = $_GET['objid'];
  // $user_id = $_SESSION['id  //select all data type
  $get_all_schedule_sql = "SELECT * FROM createjo WHERE objid = :objid";
  $get_all_schedule_data = $con->prepare($get_all_schedule_sql);
  $get_all_schedule_data->execute([':objid'=> $schedule_id]);  
   while ($result = $get_all_schedule_data->fetch(PDO::FETCH_ASSOC)) {
  
    $no_jobOrder =  $result['JobOrderNo'];
    $no =  $result['no'];
   
   
   }

 }





