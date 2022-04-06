<?php


session_start();
include ('../config/db_config.php');

$user_id = $_SESSION['id'];

 $btnStatus = 'enabled';
 $btnNew = 'disbled';  
$btnAdd = 'enabled';

 $finalcount="0";
  $alert_msg = '';     
  $alert_msg1 = '';  
   $alert_msg3 = '';  
 $sss="";
  $pag_ibig="";
  $photo="";
   $month="enabled";
 


//fetch user from database
$get_user_sql = "SELECT * FROM tbl_users where user_id = :id";
$user_data = $con->prepare($get_user_sql);
$user_data->execute([':id' => $user_id]);
while ($result = $user_data->fetch(PDO::FETCH_ASSOC)) {

    $db_user = $result['user_id'];
    $db_first_name = $result['first_name'];
    $db_middle_name = $result['middle_name'];
    $db_last_name = $result['last_name'];
     $db_ext_name = $result['ext_name'];
    $db_contact_number = $result['contact_no'];
    $db_position = $result['position'];
    $db_email_ad = $result['email'];
    $db_user_name = $result['username'];
     $db_user_pass = $result['userpass'];
    $db_location = $result['location'];
    $db_department = $result['Department'];
    $db_code = $result['code'];
    $db_abbre = $result['abbre'];
    $db_prjname = $result['ProjectName'];
    $db_charges = $result['Charges'];
     $db_status = $result['userStatus'];
    $db_all = "All";
     $db_print_dept = $result['PrintDept'];
      $db_jo = $result['JO'];
    }

     if (isset($_GET['user_id'])) {

  $id_user = $_GET['user_id'];
  $get_all_user_sql = "SELECT * FROM tbl_users WHERE user_id = :user_id";
  $get_all_user_data = $con->prepare($get_all_user_sql);
  $get_all_user_data->execute([':user_id'=> $id_user]);  
   while ($result = $get_all_user_data->fetch(PDO::FETCH_ASSOC)) {
  
    $user_first_name = $result['first_name'];
    $user_middle_name = $result['middle_name'];
    $user_last_name = $result['last_name'];
    $user_ext_name = $result['ext_name'];
    $user_contact_number = $result['contact_no'];
    $user_position = $result['position'];
    $user_email_ad = $result['email'];
    $user_user_name = $result['username'];
    $user_password = $result['userpass'];
    $user_location = $result['location'];
    $user_department = $result['Department'];
   $user_code = $result['code'];
    $user_abbre = $result['abbre'];
    $user_prjname = $result['ProjectName'];
    $user_charges = $result['Charges'];
    $user_status = $result['userStatus'];
    $user_account_type = $result['account_type'];
   $user_all = "All";
   $user_print_dept = $result['PrintDept'];
 
   
   
   }

 }

    if (isset($_GET['id'])) {

  $schedule_id = $_GET['id'];
  $get_all_schedule_sql = "SELECT * FROM schedule WHERE id = :id";
  $get_all_schedule_data = $con->prepare($get_all_schedule_sql);
  $get_all_schedule_data->execute([':id'=> $schedule_id]);  
   while ($result = $get_all_schedule_data->fetch(PDO::FETCH_ASSOC)) {
  
    $no_jobOrder =  $result['JobOrderNo'];
    $no =  $result['no'];
    $get_firstn =  $result['FName'];
    $get_middlen =  $result['MName'];
    $get_lastn =  $result['LName'];
    $get_extn =  $result['EName'];
    $get_sched_code =  $result['EmpCode'];
    $get_rate1 =  $result['Rate'];
    $get_rate2 =  $result['Rate1'];
    $get_rate3 =  $result['Rate2'];
    $get_month1 =  $result['Period'];
    $get_month2 =  $result['Month1'];
    $get_month3 =  $result['Month2'];
    $get_days1 =  $result['RegDays'];
    $get_days_2 =  $result['RegDays2'];
    $get_days2 =  $result['Days1'];
    $get_days3 =  $result['Days2'];
  $get_time1 =  $result['Time1'];
  $get_time2 =  $result['Time2'];
  $get_time3 =  $result['Time3'];
  $get_schedule =  $result['Schedule'];
  $get_schedule1 =  $result['Schedule1'];
  $get_schedule2 =  $result['Schedule2'];
  $get_photo =  $result['EmpPhoto'];
  $get_pro =  $result['objid_pro'];
  $get_laborer =  $result['noLaborers'];
  $get_day1 =  $result['Day1'];
  $get_day2 =  $result['Day2'];
  $get_day3 =  $result['Day3'];
  $get_total = ($get_day1*$get_rate1)+($get_day2*$get_rate2)+($get_day3*$get_rate3);
  $get_no =  $result['id_no'];
  $get_payrollno =  $result['PayrollNo'];
  $get_id_no =  $result['id_no'];
  $get_Total_Amount = $result['TotalAmount'];
  $get_sched_amount =  $result['Amount'];
  $get_prj_amount =  $result['PrjAmount'];
  $get_proj_dept =  $result['Department'];
  $get_proj_charges =  $result['Charges'];
  $get_proj_years =  $result['Years'];
  $get_id_sched =  $result['ID_sched'];
   
   
   }


 }

 if (isset($_GET['ID'])) {

  $emp_id = $_GET['ID'];
  // $user_id = $_SESSION['id  //select all data type
  $get_all_emp_sql = "SELECT * FROM `employeedetail` WHERE ID = :ID";
  $get_all_emp_data = $con->prepare($get_all_emp_sql);
  $get_all_emp_data->execute([':ID'=> $emp_id]);  
   while ($result = $get_all_emp_data->fetch(PDO::FETCH_ASSOC)) {
    $emp_code =  $result['EmpCode'];
    $emp_photo =  $result['EmpPhoto'];
          
   }
}

    if (isset($_GET['objid'])) {

  $get_objid = $_GET['objid'];
  $get_objid_sql = "SELECT * FROM createjo WHERE objid = :objid";
  $get_objid_data = $con->prepare($get_objid_sql);
  $get_objid_data->execute([':objid'=> $get_objid]);  
   while ($result = $get_objid_data->fetch(PDO::FETCH_ASSOC)) {
  
    $get_abbre =  $result['Department'];
    $JobOrder = $result['JobOrderNo'];
    $get_abbree = $result['abbre'];
    $PayrollNo = $result['PayrollNo'];
    $get_starting_date =  $result['PeriodCovered'];
    $scheds = $result['Schedules'];
    $amount1 = $result['Amount'];
    $laborers1 = $result['Laborers'];
    $filenames = $result['Filenames'];
    $item1 = $result['Item1'];
    $get_charges = $result['Charges'];
    $get_prjnme = $result['ProjectName'];
    $get_deptcode = $result['code'];
    $get_prev_bal = $result['PreviousBalance'];
    $get_uniq_no = $result['Uniq'];
    $get_objid_pro=$result['objid_pro'];


    $create_item1 = $result['Item1'];
    $create_item2 = $result['Item2'];
    $create_item3 = $result['Item3'];
    $create_item4 = $result['Item4'];  
    $create_item5 = $result['Item5'];
    $create_description1 = $result['Description1'];
    $create_description2 = $result['Description2'];
    $create_description3 = $result['Description3'];
    $create_description4 = $result['Description4'];
    $create_description5 = $result['Description5'];

 }
}

if (isset($_GET['user_id'])) {

    //select filename
    $id_user = $_GET['user_id'];
    $get_user_data_sql = "SELECT * FROM tbl_users where user_id = :user_id";
    $get_user_data_data = $con->prepare($get_user_data_sql);
    $get_user_data_data->execute([':user_id' => $id_user]);
    while ($result = $get_user_data_data->fetch(PDO::FETCH_ASSOC)) {
    $get_db_user = $result['user_id'];
    $get_db_first_name = $result['first_name'];
    $get_db_middle_name = $result['middle_name'];
    $get_db_last_name = $result['last_name'];
    $get_db_ext_name = $result['ext_name'];
    $get_db_contact_number = $result['contact_no'];
    $get_db_position = $result['position'];
    $get_db_email_ad = $result['email'];
    $get_db_user_name = $result['username'];
    $get_db_location = $result['location'];
    $get_db_password = $result['userpass'];
    $get_db_department = $result['Department'];
    $get_db_department_code = $result['code'];
    $get_db_abbre = $result['abbre'];
    $get_db_account_type = $result['account_type'];

    
    }
}


if (isset($_GET['objid'])) {

    //select filename
    $allpro = $_GET['objid'];
    $get_allpro_data_sql = "SELECT * FROM project where objid = :objid";
    $get_allpro_data_data = $con->prepare($get_allpro_data_sql);
    $get_allpro_data_data->execute([':objid' => $allpro]);
    while ($result = $get_allpro_data_data->fetch(PDO::FETCH_ASSOC)) {
    $NameProj = $result['ProjectName'];
    $PrjBudget = $result['ProjectBudget'];
     $PrjSts = $result['status'];
     $prj_sts_id = $result['Charges'];
    $prj_balance = $result['Actual'];
    $prj_dept = $result['Department'];

  
}
}


if (isset($_GET['objid'])) {

    //select filename
    $new_job = $_GET['objid'];
    $get_job_data_sql = "SELECT * FROM createjo where objid = :objid";
    $get_job_data_data = $con->prepare($get_job_data_sql);
    $get_job_data_data->execute([':objid' => $new_job]);
    while ($result = $get_job_data_data->fetch(PDO::FETCH_ASSOC)) {
    $Job = $result['JobOrderNo'];
    $Bal = $result['PreviousBalance'];
}
}

if (isset($_GET['ID'])) {

    //select filename
    $id_emp = $_GET['ID'];
    $get_emp_data_sql = "SELECT * FROM employeedetail where ID = :ID";
    $get_emp_data_data = $con->prepare($get_emp_data_sql);
    $get_emp_data_data->execute([':ID' => $id_emp]);
    while ($result = $get_emp_data_data->fetch(PDO::FETCH_ASSOC)) {
    $get_emp_id = $result['ID'];
    $get_emp_fname = $result['EmpFname'];
    $get_emp_mname = $result['EmpMname'];
    $get_emp_lname = $result['EmpLname'];
    $get_emp_ename = $result['EmpExt'];
    $get_emp_contact_number = $result['EmpContactNo'];
    $get_emp_designation = $result['EmpDesignation'];
    $get_emp_email= $result['EmpEmail'];
    $get_emp_gender = $result['EmpGender'];
    $get_emp_photo = $result['EmpPhoto'];
    $get_emp_department = $result['EmpDept'];
    $get_emp_dept_charge = $result['DeptCharge'];
    $get_emp_code = $result['EmpCode'];
    $get_emp_control = $result['ControlNo'];
    $get_emp_joingdate = $result['EmpJoingdate'];
    $get_emp_address = $result['EmpAddress'];
    $get_emp_brgy = $result['EmpBrgy'];
    $get_emp_city = $result['EmpCity'];
    $get_emp_province = $result['EmpProvince'];
    $get_emp_skills = $result['EmpSkills'];
    $get_emp_status = $result['EmpStatus'];
    $get_status = $result['E_Status'];
    $get_emp_birth =$result['EmpBirth'];
    $get_emp_category =$result['Category'];
    $get_emp_others =$result['Others'];
    $get_emp_charges =$result['Charges'];
    $get_emp_remarks =$result['Remarks'];
    $get_emp_citizen =$result['EmpCitizen'];
    $get_place_birth =$result['PlaceBirth'];
    $get_emp_blood = $result['EmpBlood'];
    $get_emp_service = $result['EmpNoService'];
    $get_emp_eligibility = $result['EmpEligible'];
    $get_emp_now = $result['PostingDate'];
    $get_now=date('Y-m-d');
    $diff =  date_diff(date_create($get_emp_birth), date_create($get_now));
    $get_age = $diff->format('%y');
    $diff1 =  date_diff(date_create($get_emp_joingdate), date_create($get_now));
    $get_start = $diff1->format('%y');
    $get_user= $result['user'];
    $get_report= $result['Report'];
    $get_spouse_ln= $result['SpouseLn'];
    $get_spouse_fn= $result['SpouseFn'];
    $get_spouse_mn= $result['SpouseMn'];
    $get_spouse_en= $result['SpouseEn'];
     $get_spouse_occ= $result['SpouseOcc'];
    $get_child1= $result['EmpChild1'];
    $get_child1_yr= $result['EmpChildB1'];
    $get_child2= $result['EmpChild2'];
    $get_child2_yr= $result['EmpChildB2'];
    $get_child3= $result['EmpChild3'];
    $get_child3_yr= $result['EmpChildB3'];
    $get_child4= $result['EmpChild4'];
    $get_child4_yr= $result['EmpChildB4'];
    $get_child5= $result['EmpChild5'];
    $get_child5_yr= $result['EmpChildB5'];
    $get_child6= $result['EmpChild6'];
    $get_child6_yr= $result['EmpChildB6'];
    $get_child7= $result['EmpChild7'];
    $get_child7_yr= $result['EmpChildB7'];
    $get_child8= $result['EmpChild8'];
    $get_child8_yr= $result['EmpChildB8'];
    $get_child9= $result['EmpChild9'];
    $get_child9_yr= $result['EmpChildB9'];
    $get_child10= $result['EmpChild10'];
    $get_child10_yr= $result['EmpChildB10'];
    $get_end= $result['EndDate'];
    $get_edu_elem_sch1 = $result['ElementarySchool'];
    $get_edu_elem_yr1 = $result['ElementaryYear'];
    $get_edu_elem_award1 = $result['ElementaryAward'];
    $get_edu_sec_sch1 = $result['SecondarySchool'];
    $get_edu_sec_award1 = $result['SecondaryAward'];
    $get_edu_sec_yr = $result['SecondaryYear'];
    $get_edu_col_sch1 = $result['SchoolCollegeGra'];
    $get_edu_col_yr1 = $result['YearPassingGra'];
    $get_edu_col_award1 = $result['CollegeAward'];
    $get_edu_voc_sch1 = $result['Vocational'];
    $get_edu_voc_award1 = $result['VocationalAward'];
    $get_edu_voc_y1r= $result['VocationalYear'];
    $get_edu_gra_yr1 = $result['GraduateYear'];
    $get_edu_gra_award1 = $result['GraduateAward'];
    $get_edu_gra_sch1 = $result['Graduate'];
    $get_id_no1 = $result['ID'];
    $get_id_sss1 = $result['SssNo'];
    $get_id_pagibig1 = $result['PagIbigNo'];
    $get_id_ctc1 = $result['CtcNo'];
    $get_id_date1= $result['CtcDate'];
    $get_id_place1 = $result['CtcAt'];
    $get_id_atm1 = $result['AtmNo'];
    $get_id_tin1 = $result['TinNo'];
    $get_id_phil1 = $result['PhilNo'];
     $get_exp_emp1_name1 = $result['Employer1Name'];
    $get_exp_emp1_designation1 = $result['Employer1Designation'];
    $get_exp_emp1_salary1= $result['Employer1CTC'];  
    $get_exp_emp1_duration1 = $result['Employer1WorkDuration'];
    $get_exp_emp2_name1 = $result['Employer2Name'];
    $get_exp_emp2_designation1 = $result['Employer2Designation'];
    $get_exp_emp2_salary1 = $result['Employer2CTC'];  
    $get_exp_emp2_duration1 = $result['Employer2WorkDuration'];
    $get_exp_emp3_name1 = $result['Employer3Name'];
    $get_exp_emp3_designation1 = $result['Employer3Designation'];
    $get_exp_emp3_salary1 = $result['Employer3CTC'];  
    $get_exp_emp3_duration1 = $result['Employer3WorkDuration'];
    $get_filename = $result['Filenames'];
    $get_vamos = $result['Vamos'];
     $get_JO = $result['JO'];
    }
}



if (isset($_GET['ID'])) {

    //select filename
    $id_edu = $_GET['ID'];
    $get_edu_data_sql = "SELECT * FROM empeducation where ID = :ID";
    $get_edu_data_data = $con->prepare($get_edu_data_sql);
    $get_edu_data_data->execute([':ID' => $id_edu]);
    while ($result = $get_edu_data_data->fetch(PDO::FETCH_ASSOC)) {
    $get_edu_id1 = $result['ID'];
    $get_edu_elem_sch = $result['ElementarySchool'];
    $get_edu_elem_yr = $result['ElementaryYear'];
    $get_edu_elem_award = $result['ElementaryAward'];
    $get_edu_sec_sch = $result['SecondarySchool'];
    $get_edu_sec_award = $result['SecondaryAward'];
    $get_edu_sec_yr = $result['SecondaryYear'];
    $get_edu_col_sch = $result['SchoolCollegeGra'];
    $get_edu_col_yr = $result['YearPassingGra'];
    $get_edu_col_award = $result['CollegeAward'];
    $get_edu_voc_sch = $result['Vocational'];
    $get_edu_voc_award = $result['VocationalAward'];
    $get_edu_voc_yr= $result['VocationalYear'];
    $get_edu_gra_yr = $result['GraduateYear'];
    $get_edu_gra_award = $result['GraduateAward'];
    $get_edu_gra_sch = $result['Graduate'];
    
    }
}

if (isset($_GET['ID'])) {

    //select filename
    $id_no = $_GET['ID'];
    $get_id_no_data_sql = "SELECT * FROM no where ID = :ID";
    $get_id_no_data_data = $con->prepare($get_id_no_data_sql);
    $get_id_no_data_data->execute([':ID' => $id_no]);
    while ($result = $get_id_no_data_data->fetch(PDO::FETCH_ASSOC)) {
    $get_id_no = $result['ID'];
    $get_id_sss = $result['SssNo'];
    $get_id_pagibig = $result['PagIbigNo'];
    $get_id_ctc = $result['CtcNo'];
    $get_id_date= $result['CtcDate'];
    $get_id_place = $result['CtcAt'];
    $get_id_atm = $result['AtmNo'];
    $get_id_tin = $result['TinNo'];
    $get_id_phil = $result['PhilNo'];
       
    }
}


if (isset($_GET['ID'])) {

    //select filename
    $exp_id = $_GET['ID'];
    $get_exp_data_sql = "SELECT * FROM empexperience where ID = :ID";
    $get_exp_data_data = $con->prepare($get_exp_data_sql);
    $get_exp_data_data->execute([':ID' => $exp_id]);
    while ($result = $get_exp_data_data->fetch(PDO::FETCH_ASSOC)) {
    $get_exp_id = $result['ID'];
    $get_exp_emp1_name = $result['Employer1Name'];
    $get_exp_emp1_designation = $result['Employer1Designation'];
    $get_exp_emp1_salary = $result['Employer1CTC'];  
    $get_exp_emp1_duration = $result['Employer1WorkDuration'];
    $get_exp_emp2_name = $result['Employer2Name'];
    $get_exp_emp2_designation = $result['Employer2Designation'];
    $get_exp_emp2_salary = $result['Employer2CTC'];  
    $get_exp_emp2_duration = $result['Employer2WorkDuration'];
    $get_exp_emp3_name = $result['Employer3Name'];
    $get_exp_emp3_designation = $result['Employer3Designation'];
    $get_exp_emp3_salary = $result['Employer3CTC'];  
    $get_exp_emp3_duration = $result['Employer3WorkDuration'];
    }
}



$get_total_rate_sql= "SELECT `createjo`.`JobOrderNo`, `schedule`.`JobOrderNo`, SUM(`schedule`.`TotalAmount`) as total FROM `createjo`left join `schedule` on `createjo`.`JobOrderNo`=`schedule`.`JobOrderNo`  where `createjo`.`JobOrderNo` IS NOT NULL group by `createjo`.`JobOrderNo";
$get_total_rate_data = $con->prepare($get_total_rate_sql);
$get_total_rate_data->execute();
$get_total_rate_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_total_rate_data->fetch(PDO::FETCH_ASSOC)) {
  $finalcount =  $result1['total'];
  $finalcount_1 =  $result1['total'];
}






$get_j_sql= "SELECT * FROM `createjo`";
$get_j_data = $con->prepare($get_j_sql);
$get_j_data->execute();
$get_j_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_j_data->fetch(PDO::FETCH_ASSOC)) {
  $uniqjo =  $result1['Uniq'];
  $num =  $result1['objid_pro']; 
  $createjo_abbre =  $result1['abbre']; 

}

$get_nojo_sql= "SELECT COUNT(`objid`) as total, Uniq, Amount, PreviousBalance, Laborers FROM `createjo`";
$get_nojo_data = $con->prepare($get_nojo_sql);
$get_nojo_data->execute();
$get_nojo_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_nojo_data->fetch(PDO::FETCH_ASSOC)) {
  $countjo =  $result1['total']; 
  $amount2 =  $result1['Amount']; 
  $prevbal2 =  $result1['PreviousBalance']; 
  $labor =  $result1['Laborers']; 

}
$JobNo =date('Y').'-'.$countjo;


$get_noo_sql= "SELECT `jo_details`.`objid`,`schedule`.`id_no` as total FROM `jo_details` left join  `schedule` on `jo_details`.`objid`=`schedule`.`id_no` where `jo_details`.`objid` IS NOT NULL group by `schedule`.`id_no`";
$get_noo_data = $con->prepare($get_noo_sql);
$get_noo_data->execute();
$get_noo_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_noo_data->fetch(PDO::FETCH_ASSOC)) {
  $countjob =  $result1['total']; 
}




$get_jo_sql= "SELECT * FROM `createjo`";
$get_jo_data = $con->prepare($get_jo_sql);
$get_jo_data->execute();
$get_jo_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_jo_data->fetch(PDO::FETCH_ASSOC)) {
  $count =  $result1['PreviousBalance']; 
  $amount =  $result1['Amount']; 
  $count_1 =  $result1['PreviousBalance'];
  $createjo_charges =  $result1['Charges'];
  $createjo_laborers =  $result1['Laborers']; 
}



$get_final_sql= "SELECT `schedule`.`JobOrderNo`, COUNT(`createjo`.`JobOrderNo`) as total FROM  `createjo`left join  `schedule` on `createjo`.`JobOrderNo`=`schedule`.`JobOrderNo` where `createjo`.`JobOrderNo` IS NOT NULL group by `createjo`.`JobOrderNo`";
$get_final_data = $con->prepare($get_final_sql);
$get_final_data->execute();
$get_final_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_final_data->fetch(PDO::FETCH_ASSOC)) {
  $totalcount =  $result1['total'];
}



$get_jo_sql= "SELECT * FROM `project`";
$get_jo_data = $con->prepare($get_jo_sql);
$get_jo_data->execute();
$get_jo_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_jo_data->fetch(PDO::FETCH_ASSOC)) {
 
  $charges =  $result1['Charges'];
  $objid1 =  $result1['objid'];
  $project_budget =  $result1['ProjectBudget'];
  $project_nme =  $result1['ProjectName'];
  $dept =  $result1['Department'];
  $code =  $result1['code'];
  $year =  $result1['year'];
  $prjbal =  $result1['Balance'];
  $prjactual =  $result1['Actual'];
}

$get_pay_sql= "SELECT COUNT(`objid`) as total FROM `payroll`";
$get_pay_data = $con->prepare($get_pay_sql);
$get_pay_data->execute();
$get_pay_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_pay_data->fetch(PDO::FETCH_ASSOC)) {
 
  $payroll1 =$result1['total'];
  $payroll2 =$payroll1+1;
}

  $payroll = "P".date('Y')."_".$payroll2;


$get_pay_amount_sql= "SELECT SUM(`PayAmount`) as total FROM `payroll`";
$get_pay_amount_data = $con->prepare($get_pay_amount_sql);
$get_pay_amount_data->execute();
$get_pay_amount_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_pay_amount_data->fetch(PDO::FETCH_ASSOC)) {
 
  $payrolltotal =$result1['total'];
}

$get_nojo_sql= "SELECT COUNT(`objid`) as total FROM `project` ";
$get_nojo_data = $con->prepare($get_nojo_sql);
$get_nojo_data->execute();
$get_nojo_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_nojo_data->fetch(PDO::FETCH_ASSOC)) {
  $count_budgetno =  $result1['total'] + 1;

}

$count_budgetno1 =date('Y').'-'.date('m').'-'. $count_budgetno;


$get_o_sql= "SELECT COUNT(`code`) as total FROM `createjo` WHERE `createjo`.`Department`='$db_department' ";
$get_o_data = $con->prepare($get_o_sql);
$get_o_data->execute();
$get_o_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_o_data->fetch(PDO::FETCH_ASSOC)) {
  $count_0 =  $result1['total']+1;
}

$get_em_sql= "SELECT COUNT(`ID`) as total FROM `employeedetail` ";
$get_em_data = $con->prepare($get_em_sql);
$get_em_data->execute();
$get_em_data->setFetchMode(PDO::FETCH_ASSOC);
while ($result1 = $get_em_data->fetch(PDO::FETCH_ASSOC)) {
  $count_em =  $result1['total']+1;
}


$get_create_sql= "SELECT * FROM createjo";
$get_create_data = $con->prepare($get_create_sql);
$get_create_data->execute();

$get_cr_sql= "SELECT * FROM createjo";
$get_cr_data = $con->prepare($get_cr_sql);
$get_cr_data->execute();


$get_all_user_sql = "SELECT * FROM tbl_users";
$get_all_user_data = $con->prepare($get_all_user_sql);
$get_all_user_data->execute();

$get_all_user3_sql = "SELECT * FROM tbl_users";
$get_all_user3_data = $con->prepare($get_all_user3_sql);
$get_all_user3_data->execute();

$get_all_user1_sql = "SELECT * FROM tbl_users WHERE userStatus = 'Active'";
$get_all_user1_data = $con->prepare($get_all_user1_sql);
$get_all_user1_data->execute();

$get_all_user2_sql = "SELECT * FROM tbl_users WHERE userStatus = 'Inactive'";
$get_all_user2_data = $con->prepare($get_all_user2_sql);
$get_all_user2_data->execute();

$get_all_emp_sql = "SELECT * FROM employeedetail Where ID<>1";
$get_all_emp_data = $con->prepare($get_all_emp_sql);
$get_all_emp_data->execute();

$get_all_sql = "SELECT * FROM employeedetail";
$get_all_data = $con->prepare($get_all_sql);
$get_all_data->execute();

$get_all1_sql = "SELECT * FROM employeedetail Where E_Status='Active'";
$get_all1_data = $con->prepare($get_all1_sql);
$get_all1_data->execute();

$get_all2_sql = "SELECT * FROM employeedetail Where E_Status='Inactive'";
$get_all2_data = $con->prepare($get_all2_sql);
$get_all2_data->execute();

$get_att_sql = "SELECT * FROM eduattainment";
$get_att_data = $con->prepare($get_att_sql);
$get_att_data->execute();


$get_dep_sql = "SELECT DISTINCT department FROM department ORDER BY department ASC";
$get_dep_data = $con->prepare($get_dep_sql);
$get_dep_data->execute();

$get_department_sql = "SELECT * FROM department ORDER BY department ASC";
$get_department_data = $con->prepare($get_department_sql);
$get_department_data->execute();

$get_details_sql = "SELECT * FROM jo_details";
$get_details_data = $con->prepare($get_details_sql);
$get_details_data->execute();

$get_year_sql = "SELECT * FROM year";
$get_year_data = $con->prepare($get_year_sql);
$get_year_data->execute();

$get_barangay_sql = "SELECT * FROM barangay";
$get_barangay_data = $con->prepare($get_barangay_sql);
$get_barangay_data->execute();


$get_department3_sql = "SELECT * FROM department ORDER BY department ASC";
$get_department3_data = $con->prepare($get_department3_sql);
$get_department3_data->execute();

$get_depart3_sql = "SELECT * FROM department ORDER BY department ASC";
$get_depart3_data = $con->prepare($get_depart3_sql);
$get_depart3_data->execute();

$get_department4_sql = "SELECT * FROM department ORDER BY department ASC";
$get_department4_data = $con->prepare($get_department4_sql);
$get_department4_data->execute();

$get_proj_sql = "SELECT * FROM project";
$get_proj_data = $con->prepare($get_proj_sql);
$get_proj_data->execute();


$get_project_sql = "SELECT * FROM project";
$get_project_data = $con->prepare($get_project_sql);
$get_project_data->execute();

$get_pro_sql = "SELECT * FROM project";
$get_pro_data = $con->prepare($get_pro_sql);
$get_pro_data->execute();

$get_allproj_sql = "SELECT * FROM allproject ORDER BY objid DESC";
$get_allproj_data = $con->prepare($get_allproj_sql);
$get_allproj_data->execute();

$get_period_sql = "SELECT * FROM period ORDER BY obj_id DESC";
$get_period_data = $con->prepare($get_period_sql);
$get_period_data->execute();

$get_period_sql = "SELECT * FROM period";
$get_period_data = $con->prepare($get_period_sql);
$get_period_data->execute();

$get_rate_sql = "SELECT * FROM rate";
$get_rate_data = $con->prepare($get_rate_sql);
$get_rate_data->execute();

$get_time_sql = "SELECT * FROM timer";
$get_time_data = $con->prepare($get_time_sql);
$get_time_data->execute();

$get_times_sql = "SELECT * FROM timers ";
$get_times_data = $con->prepare($get_times_sql);
$get_times_data->execute();

$get_all_emp1_sql = "SELECT * FROM employeedetail WHERE E_Status = 'Active'  ORDER BY EmpLname";
$get_all_emp1_data = $con->prepare($get_all_emp1_sql);
$get_all_emp1_data->execute();


$get_time1_sql = "SELECT * FROM timer";
$get_time1_data = $con->prepare($get_time1_sql);
$get_time1_data->execute();

$get_time2_sql = "SELECT * FROM timer";
$get_time2_data = $con->prepare($get_time2_sql);
$get_time2_data->execute();

$get_time3_sql = "SELECT * FROM timer";
$get_time3_data = $con->prepare($get_time3_sql);
$get_time3_data->execute();


$get_rate1_sql = "SELECT * FROM rate";
$get_rate1_data = $con->prepare($get_rate1_sql);
$get_rate1_data->execute();

$get_days_sql = "SELECT * FROM dayz";
$get_days_data = $con->prepare($get_days_sql);
$get_days_data->execute();

$get_days2_sql = "SELECT * FROM dayz";
$get_days2_data = $con->prepare($get_days2_sql);
$get_days2_data->execute();

$get_days3_sql = "SELECT * FROM dayz";
$get_days3_data = $con->prepare($get_days3_sql);
$get_days3_data->execute();



$get_rate2_sql = "SELECT * FROM rate";
$get_rate2_data = $con->prepare($get_rate2_sql);
$get_rate2_data->execute();

$get_schedule_sql = "SELECT * FROM schedule ORDER BY LName ASC";
$get_schedule_data = $con->prepare($get_schedule_sql);
$get_schedule_data->execute();

$get_createjo_sql = "SELECT * FROM createjo";
$get_createjo_data = $con->prepare($get_createjo_sql);
$get_createjo_data->execute();

$get_payroll_sql = "SELECT * FROM payroll";
$get_payroll_data = $con->prepare($get_payroll_sql);
$get_payroll_data->execute();

$get_sql = "SELECT * FROM sss";
$get_data = $con->prepare($get_sql);
$get_data->execute();

$get_pag_sql = "SELECT * FROM pag_ibig";
$get_pag_data = $con->prepare($get_pag_sql);
$get_pag_data->execute();


$get_combine_sql = "SELECT * FROM createjo INNER JOIN schedule  WHERE `createjo`.`JobOrderNo` =  `schedule`.`JobOrderNo` AND `schedule`.`no`= 1 ORDER BY `createjo`.`JobOrderNo` DESC  ";
$get_combine_data = $con->prepare($get_combine_sql);
$get_combine_data->execute();


$get_combine2_sql = "SELECT * FROM createjo INNER JOIN schedule  WHERE  `createjo`.`JobOrderNo`=`schedule`.`JobOrderNo` AND `createjo`.`Uniq`=`schedule`.`Uniq` AND `schedule`.`no`= 1 ORDER BY `createjo`.`JobOrderNo` DESC  ";
$get_combine2_data = $con->prepare($get_combine2_sql);
$get_combine2_data->execute();

$get_combine3_sql = "SELECT * FROM createjo ORDER BY `createjo`.`JobOrderNo` DESC  ";
$get_combine3_data = $con->prepare($get_combine3_sql);
$get_combine3_data->execute();


$get_sched_sql = "SELECT * FROM createjo INNER JOIN payroll INNER JOIN schedule WHERE `createjo`.`objid` = `payroll`.`id_no` AND `schedule`.`JobOrderNo` = `payroll`.`JobOrderNo` AND `schedule`.`no`= 1 ORDER BY `schedule`.`PayrollNo` DESC ";
$get_sched_data = $con->prepare($get_sched_sql);
$get_sched_data->execute();

$get_pr_sql = "SELECT `project`.`code`, `project`.`ProjectName`, `project`.`Charges`,  `project`.`year`, `allproject`.`Department`,  `project`.`BudgetNo`,  `allproject`.`ProjectBudget`, `allproject`.`Balance1`FROM project INNER JOIN allproject WHERE `project`.`code` = `allproject`.`code` AND `project`.`ProjectName` = `allproject`.`ProjectName` AND `project`.`Charges` = `allproject`.`Charges` ORDER BY `project`.`Balance` DESC ";
$get_pr_data = $con->prepare($get_pr_sql);
$get_pr_data->execute();

$get_p_sql = "SELECT `project`.`objid`, `project`.`Charges`, `project`.`Department`, `project`.`Actual`,`createjo`.`ProjectName`,`createjo`.`Charges`, `createjo`.`Department`,  `createjo`.`JobOrderNo` FROM project INNER JOIN createjo WHERE `project`.`Charges` = `createjo`.`Charges` AND  `createjo`.`Department`=`project`.`Department`";
$get_p_data = $con->prepare($get_p_sql);
$get_p_data->execute();


$get_jo_sql= "SELECT * FROM project";
$get_jo_data = $con->prepare($get_jo_sql);
$get_jo_data->execute();

$get_jo1_sql= "SELECT * FROM project WHERE Department='$db_department'";
$get_jo1_data = $con->prepare($get_jo1_sql);
$get_jo1_data->execute();

$get_sss_sql = "SELECT * FROM sss INNER JOIN employeedetail INNER JOIN no WHERE `sss`.`EmpCode` = `employeedetail`.`EmpCode` AND `sss`.`Empcode` = `no`.`EmpCode` ORDER BY `sss`.`id` DESC";
$get_sss_data = $con->prepare($get_sss_sql);
$get_sss_data->execute();


$get_pag_sql = "SELECT * FROM pag_ibig INNER JOIN no INNER JOIN employeedetail WHERE `employeedetail`.`EmpCode`= `no`.`EmpCode`  AND `pag_ibig`.`EmpCode` = `no`.`EmpCode` ";
$get_pag_data = $con->prepare($get_pag_sql);
$get_pag_data->execute();


$get_namejo_sql= "SELECT `payroll`.`objid`,`schedule`.`id_no`,`payroll`.`PayrollNo`,`schedule`.`PayrollNo`,`schedule`.`FName`,`schedule`.`LName`,`schedule`.`MName` FROM  `schedule`left join  `payroll` on `payroll`.`objid`=`schedule`.`id_no` where `schedule`.`id_no` IS NOT NULL group by `schedule`.`id_no`";
$get_namejo_data = $con->prepare($get_namejo_sql);
$get_namejo_data->execute();

$get_prj_sql= "SELECT `project`.`code`,`tbl_users`.`code` FROM   `tbl_users` left join `project` on `tbl_users`.`code`=`project`.`code` where `tbl_users`.`code` IS NOT NULL group by `project`.`code`";
$get_prj_data = $con->prepare($get_prj_sql);
$get_prj_data->execute();


$get_payrollno_sql = "SELECT * FROM payroll INNER JOIN schedule INNER JOIN employeedetail INNER JOIN jo_details WHERE `schedule`.`JobOrderNo` = `payroll`.`JobOrderNo` AND `schedule`.`EmpCode` = `employeedetail`.`EmpCode`";
$get_payrollno_data = $con->prepare($get_payrollno_sql);
$get_payrollno_data->execute();


$get_emp_prj_sql = "SELECT DISTINCT `employeedetail`.`EmpFname`,`employeedetail`.`EmpMname`,`employeedetail`.`EmpLname`,`employeedetail`.`E_Status`, `employeedetail`.`EmpDept`, `employeedetail`.`Charges`,`project`.`ProjectName`,`project`.`Department`FROM project INNER JOIN employeedetail INNER JOIN  department WHERE `project`.`ProjectName`=`employeedetail`.`Charges` And `project`.`Department`=`employeedetail`.`EmpDept` And `project`.`Department`=`department`.`department` AND `employeedetail`.`EmpDept`=`department`.`department`";
$get_emp_prj_data = $con->prepare($get_emp_prj_sql);
$get_emp_prj_data->execute();



$get_allemp1_sql = "SELECT * FROM employeedetail where E_Status='Active'";
$get_allemp1_data = $con->prepare($get_allemp1_sql);
$get_allemp1_data->execute();








