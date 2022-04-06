<?php 
// Load the database configuration file 
include_once 'includes/config.php'; 
include_once 'includes/session.php'; 

// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "members-data_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('ID', 'NAME', 'SEX', 'AGE', 'BIRTHDAY', 'ADDRESS', 'BARANGAY', 'OFFICE', 'FUNCTION/POSITION'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $db->query("SELECT * FROM employeedetail ORDER BY ID ASC"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
if ($row['EmpExt']!="" AND $row['EmpLname']!="" AND $row['EmpMname']!="" AND $row['EmpFname']!="" AND $row['ID']!=1 AND $row['E_Status']="Active") { 
        $get_now=date('Y-m-d');
         $diff =  date_diff(date_create($row['EmpBirth']), date_create($get_now));
        $get_age = $diff->format('%y');
        $lineData = array($row['ID']-1, $row['EmpLname'].','.' '.$row['EmpFname'].' '.$row['EmpMname'][0].'.'.','.' '.$row['EmpExt'], $row['EmpGender'], $get_age, $row['EmpBirth'], $row['EmpAddress'],$row['EmpBrgy'], $row['DeptCharge'], $row['EmpDesignation']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
 }
elseif ($row['EmpExt']=="" AND $row['ID']!=1 AND $row['E_Status']=="Active") {
        $get_now=date('Y-m-d');
         $diff =  date_diff(date_create($row['EmpBirth']), date_create($get_now));
        $get_age = $diff->format('%y');
        $lineData = array($row['ID']-1, $row['EmpLname'].','.' '.$row['EmpFname'].' '.$row['EmpMname'][0].'.', $row['EmpGender'], $get_age, $row['EmpBirth'], $row['EmpAddress'],$row['EmpBrgy'], $row['DeptCharge'], $row['EmpDesignation']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
}
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;