<?php


include ('../config/db_config.php');

if (isset($_POST['jo_name'])) {

  $namejo = $_POST['jo_name'];
  $code = '';

 
  // $user_id = $_SESSION['id  //select all data type
  $get_all_employeedetail1_sql = "SELECT * FROM `employeedetail` WHERE EmpFname = :fname";
  $get_all_employeedetail1_data = $con->prepare($get_all_employeedetail1_sql);
  $get_all_employeedetail1_data->execute([':fname'=> $namejo]);  
   while ($result = $get_all_employeedetail1_data->fetch(PDO::FETCH_ASSOC)) {
    $code =  $result['ControlNo'];
    $photo =  $result['EmpPhoto'];
    $middle =  $result['EmpMname'];
    $last =  $result['EmpLname'];
    $ext =  $result['EmpExt'];
    $id =  $result['ID'];

   }

  $data = array(
    'statuscode' => 200,
    'empcode' => $code,
    'middle' => $middle,
    'last' => $last,
    'photo' => $photo,
    'ext' => $ext,
     'id' => $id,
    'message' => 'success'
  );
  echo json_encode($data);
  
}

?>