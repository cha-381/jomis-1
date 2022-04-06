<?php 
	include 'includes/session.php';
  
if (isset($_POST['id'])) {

    //select filename
    $getEmpno = $_POST['id'];
    $get_emp_sql = "SELECT * FROM schedule where id = :id";
    $get_emp_data = $con->prepare($get_emp_sql);
    $get_emp_data->execute([':id' => $getEmpno]);
    while ($result = $get_emp_data->fetch(PDO::FETCH_ASSOC)) {
    
        $EmpCode = $result['EmpCode'];
        $Fname = $result['FName'];
        $Mname = $result['MName'];
        $Lname = $result['LName'];
        $id_num = $result['id_no'];
        $name = $Fname." ".$Mname[0] ."." . " " .$Lname;
        $One1 = $result['One1'];
        $Two2 = $result['Two2'];
        $Three3 = $result['Three3'];
        $Four4 = $result['Four4'];
        $Five5 = $result['Five5'];

         $O1 = $result['O1'];
        $O2 = $result['O2'];
        $O3 = $result['O3'];
        $O4 = $result['O4'];
        $O5 = $result['O5'];
}

$row = array(
  'id'                   => $getEmpno,
  'FName'                => $Fname,
  'MName'                => $Mname,
  'LName'                => $Lname,
  'EmpCode'              => $EmpCode,
  'name'                 =>$name,
  'One1'                 =>$One1,
  'Two2'                 =>$Two2,
  'Three3'               =>$Three3,
  'Four4'                =>$Four4,
  'Five5'                =>$Five5,
  'O1'                 =>$O1,
  'O2'                 =>$O2,
  'O3'               =>$O3,
  'O4'                =>$O4,
  'O5'                =>$O5,
  'id_no'                =>$id_num
  );
    echo json_encode($row);
    
	}
?>