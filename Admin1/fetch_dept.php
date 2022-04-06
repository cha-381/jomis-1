<?php


include ('../config/db_config.php');

if (isset($_POST['jo_name'])) {

  $namejo = $_POST['jo_name'];
  $code = '';

 
  // $user_id = $_SESSION['id  //select all data type
  $get_all_employeedetail1_sql = "SELECT * FROM `department` WHERE `department` = :department";
  $get_all_employeedetail1_data = $con->prepare($get_all_employeedetail1_sql);
  $get_all_employeedetail1_data->execute([':department'=> $namejo]);  
   while ($result = $get_all_employeedetail1_data->fetch(PDO::FETCH_ASSOC)) {
    $code =  $result['code'];
    $abbre =  $result['abbre'];
    $dept =  $result['department'];
  
   }

  $data = array(
    'statuscode' => 200,
    'code' => $code,
    'abbre' => $abbre,
    'dept' => $dept,
    'message' => 'success'
  );
  echo json_encode($data);
  
}

?>