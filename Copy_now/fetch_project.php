<?php


include ('../config/db_config.php');

if (isset($_POST['prj_name'])) {

  $nameproject = $_POST['prj_name'];
  $charges = '';
  // $user_id = $_SESSION['id  //select all data type
  $get_all_project_sql = "SELECT * FROM `project` WHERE objid = :objid";
  $get_all_project_data = $con->prepare($get_all_project_sql);
  $get_all_project_data->execute([':objid'=> $nameproject]);  
   while ($result = $get_all_project_data->fetch(PDO::FETCH_ASSOC)) {
    $charges =  $result['Charges'];
    $budget =  $result['ProjectBudget'];
    $balance =  $result['Balance'];
    $budgetno =  $result['BudgetNo'];
    $budget1 =  $result['ProjectBudget'];
    $balance1 =  $result['Balance'];
    $department = $result['abbre'];
    $prjid = $result['objid'];
    $prjname = $result['ProjectName'];
   }

    $data = array(
    'statuscode' => 200,
    'data' => $charges,
    'budget' => $budget,
    'balance' => $balance,
    'budget1' => number_format ($budget1, 2),
    'balance1' => number_format($balance1, 2),
    'budgetno' => $budgetno,
    'depart' => $department,
    'uniq' => $department.uniqid(),
    'objid' => $prjid,
    'proname' => $prjname,
    'message' => 'success'
  );
  echo json_encode($data);


}
?>