<?php
    
 include('../config/db_config.php');
   if (isset($_POST['delete'])) {

        $jo_id = $_POST['id'];
        $jo_id_no = $_POST['id_no'];
        $jo_order_no = $_POST['JobOrderNo'];
        $jo_period = $_POST['Period'];
        $jo_days = $_POST['RegDays'];
        $jo_sched = $_POST['Schedule'];
        $jo_rate = $_POST['Rate'];    
        $jo_time = $_POST['Time1'];
        $jo_no_day1 = $_POST['Day1'];

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
        $jo_none= "";
        $jo_none1= "0.00";


    
    $sql ="UPDATE schedule SET Schedule   = '$jo_sched',
               Schedule1        = '$jo_none',
               Schedule2        = '$jo_none',
               Rate             = '$jo_none1',
               Period             = '$jo_none',
               RegDays             = '$jo_none',
               Month1             = '$jo_none',
               Time1             =  '$jo_none',
               Day1             = '$jo_none',
               Days1             = '$jo_none',
               Time2             =  '$jo_none',
               Rate1             =  '$jo_none1',
               Day2             =  '$jo_none',
               Month2             = '$jo_none',
              Days2             = '$jo_none',
              Time3             =  '$jo_none',
              Rate2             =  '$jo_none1',
              Day3             = '$jo_none',
              no                = '$jo_none',
              Amount            = '$jo_all_amount',
              PrjAmount         = '$jo_prj_amount',
              TotalAmount       = '$jo_total',
              JobOrderNo        = '$jo_none'

        WHERE   id                = '$jo_id'  

     ";

      $sql1 ="UPDATE schedule SET 
              Amount            = '$jo_all_amount',
              PrjAmount         = '$jo_prj_amount'
          
        WHERE   id_no                = '$jo_id_no'  

     ";

     $sql2 ="UPDATE createjo SET 
              Amount            = '$jo_all_amount',
              PreviousBalance   = '$jo_prj_amount'
          
        WHERE   objid                = '$jo_id_no'  

     ";

            
    if($con->query($sql) && $con->query($sql1) && $con->query($sql2)){
              $alert_msg .= ' 
          <div class="alert alert-danger alert-dismissible">
              <i class="icon fa fa-danger"></i>
             Deleted!
          </div>     
      ';
      $btnStatus="disabled";
    }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }

  
?>
