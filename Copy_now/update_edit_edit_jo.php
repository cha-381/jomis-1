<?php
    
 include('../config/db_config.php');
   if (isset($_POST['update'])) {

        $jo_id = $_POST['id'];
        $jo_order_no = $_POST['JobOrderNo'];
        $jo_period = $_POST['Period'];
        $jo_days = $_POST['RegDays'];
        $jo_sched = $_POST['Schedule'];
        $jo_rate = $_POST['Rate'];    
        $jo_time = $_POST['Time1'];
        $jo_no_day1 = $_POST['Day1'];
        $jo_id_no = $_POST['id_no'];
        $jo_objid_pro = $_POST['objid_pro'];

        $jo_month1 = $_POST['Month1'];
        $jo_days1= $_POST['Days1'];
        $jo_time1 = $_POST['Time2'];
        $jo_rate1 = $_POST['Rate1'];
        $jo_day2 = $_POST['Day2'];
        $jo_sched1 = $_POST['Schedule1'];
       
        $jo_month2 = $_POST['Month2'];
        $jo_days2= $_POST['Days2'];
        $jo_time2 = $_POST['Time3'];
        $jo_rate2 = $_POST['Rate2'];
        $jo_day3 = $_POST['Day3'];
        $jo_sched2 = $_POST['Schedule2'];

        $jo_no = $_POST['no'];
        $jo_all_amount = $_POST['Amount'];
        $jo_prj_amount = $_POST['PrjAmount'];
        $jo_total= $_POST['TotalAmount'];
        $job_charges= $_POST['Charges'];
        $job_dept= $_POST['Department'];
        $job_dept= $_POST['Department'];
        $job_years= $_POST['Years'];
   

    
    // check if travelno number is available to avoid duplciation
    $sql ="UPDATE schedule SET Schedule   = '$jo_sched',
               Schedule1        = '$jo_sched1',
               Schedule2        = '$jo_sched2',
               Rate             = '$jo_rate',
               Period             = '$jo_period',
               RegDays             = '$jo_days',
               Month1             = '$jo_month1',
               Time1             =  '$jo_time',
               Day1             = '$jo_no_day1',
               Days1             = '$jo_days1',
               Time2             =  '$jo_time1',
               Rate1             =  '$jo_rate1',
               Day2             =  '$jo_day2',
              Month2             = '$jo_month2',
              objid_pro          = '$jo_objid_pro',
              Days2             = '$jo_days2',
              Time3             =  '$jo_time2',
              Rate2             =  '$jo_rate2',
              Day3             = '$jo_day3',
              no                = '$jo_no',
              Amount            = '$jo_all_amount',
              id_no            = '$jo_id_no',
              PrjAmount         = '$jo_prj_amount',
              Charges            = '$job_charges',
              Department         = '$job_dept',
              Years             = '$job_years',
              TotalAmount       = '$jo_total'

        WHERE   id                = '$jo_id'  

     ";

      $sql1 ="UPDATE schedule SET 
              Amount            = '$jo_all_amount',
              PrjAmount         = '$jo_prj_amount ',
               Department         = '$job_dept',
               Charges            = '$job_charges'
          
        WHERE   JobOrderNo                = '$jo_order_no'  

     ";

     $sql2 ="UPDATE createjo SET 
              Amount            = '$jo_all_amount',
              PreviousBalance   = '$jo_prj_amount '
          
        WHERE   JobOrderNo                = '$jo_order_no'  

     ";

      $sql3 ="UPDATE project SET 
              Balance            = '$jo_prj_amount '
                     
        WHERE   objid = '$jo_objid_pro'";

            
    if($con->query($sql) && $con->query($sql1) && $con->query($sql2) && $con->query($sql3)){
             $alert_msg .= '<div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>Successfully Updated</div>';
    }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }

  
?>
