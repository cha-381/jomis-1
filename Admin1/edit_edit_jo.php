<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'update_edit_edit_jo.php'; ?>
<?php include 'delete_jo_sched.php'; ?>

   <!-- Content Header (Page header) -->


  <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
      Edit
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Edit</li>
         </ol>
         </div>



     <!-- Main content -->
           <div class="card-body"> 
           <div class="container">
            <div align="center">
               <?php echo $alert_msg; ?>
             </div>
           <i style="font-size:17px"><i style="color:red" align="center">*Fill up the form completely.</i></i>  
            <form method="post" action="" enctype="multipart/form-data">   


             
              <div class="jumbotron">
              <div class="row">
                 <div class="col-12">
                 <label style="text-align:right; font-size: 30px;"><i>Job Order #:</i> <b class="mb-0 font-weight-bold bg-yellow"><?php echo $no_jobOrder;?></b></label>
               </div>
             </div>

             <input type="hidden" class="form-control" name="JobOrderNo" value="<?php echo $no_jobOrder;?>">
             <input type="hidden" class="form-control" name="EmpCode" value="<?php echo  $get_sched_code;?>">
            
             
             <input type="hidden" class="form-control" name="id" value="<?php echo $schedule_id;?>">
             <input type="hidden" class="form-control" name="id_no" value="<?php echo $get_id_no;?>">
             <input type="hidden" class="form-control" name="objid_pro" value="<?php echo $get_pro;?>">
             <input type="hidden" class="form-control" name="noLaborers" value="<?php echo $get_laborer-1;?>">

              <div class="row">
                <div class="col-12 col-sm-3">
               <div class="widget-user-image" align="left">
             <?php if ($get_photo=='') {?>
      <img class="img-square elevation-5" id="image" src="../dist/img/no-photo-icon.png" width="170" height="170" vspace="5" alt="User Avatar">

<?php }elseif($get_photo<>'') {?>
      <img class="img-square elevation-5" id="image"
                       src="<?php echo (!empty([$get_photo])) ? '../dist/photo/'.$get_photo : '../dist/photo/no-photo-icon.png'; ?>"
                       width="170" height="170" vspace="5" alt="User Avatar">

                
<?php } ?>
</div>
            <br>

            <div class="col-sm-8">
                      <div class="row">
                        <input type="text" style="text-align: center; font-size: 18px" class="form-control" name="code"  value="<?php echo  $get_sched_code;?>" readonly>
                        <label style="text-align: center">**<i class="bg-yellow">Identification Card No</i>**</label>
                      </div>
                  </div>
                </div>

              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                     <b> <label style="text-align:right; font-size: 30px;"><i> <?php echo  $get_firstn. " " . $get_middlen[0] ."." . " " . $get_lastn;?></i></label></b>
                      </div>
                       </div>

                       <p> Item no.</p>
                      <div class="col-sm-1">
                      <div class="form-group">
                       <input type="text" style="text-align: center; font-size: 13px" class="form-control" name="no"  value="<?php echo  $no;?>">  
                      </div>
                       </div>
                       </div>
         
                  <hr>
                   <div class="form-group"> 
                     <div class="row">
                    <div class="col-sm-6">
                    <label> Regular Schedule </label>
                  </div>
                </div>
              </div>

             <div class="row">
                    <div class="col-sm-4">
                   <div class="input-group">
                   <select class="form-control custom-select"  name="Period">
                  <option selected><b><?php echo $get_month1?></b></option>
                  <option> </option>
                  <option>January</option> 
                  <option>February</option> 
                  <option>March</option>
                  <option>April</option> 
                  <option>May</option> 
                  <option>June</option> 
                  <option>July</option>
                  <option>August</option>  
                   <option>September</option> 
                  <option>October</option> 
                  <option>November</option>
                  <option>December</option>  
                </select>
                      </div>
                      </div>

                            

                    <div class="col-sm-5">
                      <div class="form-group">
                     <input type="text"  name="RegDays" class="form-control"  value="<?php echo $get_days1?>" placeholder="Specific days" ></div>
                      </div>      

                      <div class="col-sm-3">
                      <div class="form-group">
                     <input type="text" class="form-control" value= <?php echo $now=date('Y');?> ></div>
                      </div>  
                       </div> 
                
                <input type="hidden" name="Charges" class="form-control" value="<?php echo $get_proj_charges?>" placeholder="Total Amount" >     

              <input type="hidden" name="Department" class="form-control" value="<?php echo  $get_proj_dept?>" >

              <input type="hidden" name="objid_pro" class="form-control" value="<?php echo  $get_pro?>" >
               <input type="hidden" class="form-control" name="noLaborers" value="<?php echo $get_laborer-1;?>">

               <input type="hidden" name="Years" class="form-control" value="<?php echo  $get_proj_years?>" >

                <input type="hidden"  style="background-color: orange;" id="total1" class="form-control" value="<?php echo $get_sched_amount?>" placeholder="Total Amount" > 


                <input type="hidden"  id="total2" style="background-color: lightgreen;" name="Amount" class="form-control" value="<?php echo $get_Total_Amount?>">     

              <input type="hidden" style="background-color: red;" name="TotalAmount" id="total" class="form-control" value="<?php echo $get_rate1*$get_day1?>" >

                <input type="hidden"  style="background-color: orange;" id="total1" class="form-control" value="<?php echo $get_sched_amount?>"  > 

                 <input type="hidden" style="background-color: yellow;" id="total8" class="form-control" value="<?php echo $get_sched_amount-$get_Total_Amount?>"  > 

                 <input type="hidden"  id="total4" class="form-control" value="<?php echo $get_Total_Amount?>"> 

                <input type="hidden" id="total3" class="form-control"  > 

                <input type="hidden" id="total10" class="form-control" value="<?php echo  $get_prj_amount?>"name="PrjAmount"> 
                 <input type="hidden" value="<?php echo $charges=$get_proj_charges?>" > 


                 <input type="hidden" name="objid_pro" class="form-control" value="<?php echo  $get_pro?>"name="objid_pro"> 

                 <input type="hidden" class="form-control" name="noLaborers" value="<?php echo $get_laborer-1;?>">
              



 <?php while ($get_name = $get_pro_data->fetch(PDO::FETCH_ASSOC)) { ?>
 <?php if ($get_name['Charges']==$get_proj_charges && $get_name['Department']==$get_proj_dept) {?>
              <input type="hidden"  id="total5" style="background-color: violet;" class="form-control" value="<?php echo $get_name['Balance']?>" > 
 <?php }elseif($get_name['Charges']<>$get_proj_charges) {?>
            <?php }?>
             <?php }?>

     

                    <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">                  
                         <select class="form-control custom-select"  name="Time1">
                  <option selected disabled>Time</option>
                   <option> </option>
                  <?php while ($get_timer1 = $get_time_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <?php
                    $selected = ($get_time1  ==  $get_timer1['TimeSched'])? 'selected':'';?>
                    <option <?=$selected;?> value="<?php echo
    $get_timer1['TimeSched']; ?>"><?php echo $get_timer1['TimeSched']?></option> <?php } ?>
     </select>
                  </div>
                      </div>  

  
                    <div class="col-sm-7">
                      <div class="input-group">                  
                      <select class="form-control custom-select" name="Schedule">
                  <option selected><?php echo $get_schedule?></option>
                  <option>Monday-Friday</option>
                  <option>Monday-Friday (NO NOON BREAK)</option>
                  <option>Monday-Friday w/ Holidays</option> 
                  <option>Monday-Friday w/ Holidays (NO NOON BREAK)</option>
                  <option>Monday-Saturday</option>
                  <option>Monday-Saturday (NO NOON BREAK)</option>
                  <option>Monday-Saturday w/ Holidays</option> 
                  <option>Monday-Saturday w/ Holidays (NO NOON BREAK)</option>
                  <option>Monday-Sunday</option>
                  <option>Monday-Sunday (NO NOON BREAK)</option>
                  <option>Monday-Sunday w/ Holidays</option> 
                  <option>Monday-Sunday w/ Holidays (NO NOON BREAK)</option>                 
                  <option>Saturdays and Sundays</option>
                  <option>Saturdays and Sundays w/ Holidays</option>
                  <option>Saturdays, Sundays and Holidays</option>
                  <option>Holidays</option>  
                </select>
                      </div>
                      </div>
                       </div>

                       <div class="row"> 
                         <div class="col-sm-3">
                      <div class="input-group">               
                        <select class="form-control custom-select" onchange="sync()" id="rate1" name="Rate">
                  <option selected disabled>Php</option>
                  <?php while ($get_rate = $get_rate_data->fetch(PDO::FETCH_ASSOC)) { ?>
                     <?php
                    $selected = ($get_rate1  ==  $get_rate['Salary'])? 'selected':'';?>
                    <option <?=$selected;?> value="<?php echo
    $get_rate['Salary']; ?>"><?php echo $get_rate['Salary']?></option> <?php } ?>
                </select>
                      </div>
                    </div>

                      <div class="col-sm-2">
                      <div class="form-group">
                        <b><p>No. of days =</p></b>
                      </div>
                    </div>
                      <input type="hidden" readonly class="form-control" value="<?php echo $get_day1?>">

 
<?php if ($get_day1>=$get_day1) {?>
 
                     <div class="col-sm-1">
                      <div class="form-group">
                     <input type="text" name="Day1"  id="day1" Placeholder="0" onchange="sync()" class="form-control" value="<?php echo $get_day1?>"></div>
                      </div>           

<?php }elseif($get_day1<>$get_day1 or $get_day1<$get_day1) {?>
               <input type="text" name="Day1"  id="day1" Placeholder="0" onchange="sync2()" class="form-control" value="<?php echo $get_day1?>"></div>
                      </div>                              
     <?php } ?>
                    </div>
                  </div>
                  </div>


                
                  
                <hr>
                <div class="form-group"> 
                      <div class="row">
          <div class="col-lg-12">
                      <div class="card card-outline card-info" style="background-color: #fefbd8;">
              <div class="card-header">
                 <h5 class="card-title"><i> Additional Schedule</i></h5>
                  </div>
               


                   <div class="card-body">

                    

   

                          <div class="row">
                    <div class="col-sm-3">
                      <div class="input-group">                     
                      <select class="form-control custom-select"  name="Month1">
                  <option selected><?php echo $get_month2?></option>
                   <option> </option>
                  <option>January</option> 
                  <option>February</option> 
                  <option>March</option>
                  <option>April</option> 
                  <option>May</option> 
                  <option>June</option> 
                  <option>July</option>
                  <option>August</option>  
                   <option>September</option> 
                  <option>October</option> 
                  <option>November</option>
                  <option>December</option>  
                </select>
                      </div>
                      </div>
            
                <div class="col-sm-3">
                      <div class="form-group">
                     <input type="text"  name="Days1" class="form-control" value="<?php echo $get_days2?>" placeholder="Specific days" ></div>
                      </div>

             <div class="col-sm-2">
                      <div class="form-group">
             <input type="text" class="form-control" name="" value="<?php echo date("Y");?>"  required>
               </div>
                 </div>
                 

                    <div class="col-sm-4">
                      <div class="input-group">                    
                         <select class="form-control custom-select" placeholder="Time"  name="Time2">
                   <option>00:00</option>
                  <?php while ($get_timer2 = $get_time3_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <?php
                    $selected = ($get_time2  ==  $get_timer2['TimeSched'])? 'selected':'';?>
                    <option <?=$selected;?> value="<?php echo
    $get_timer2['TimeSched']; ?>"><?php echo $get_timer2['TimeSched']?></option> <?php } ?>
     </select>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="input-group">                     
                        <select class="form-control custom-select" onchange="sync()" id="rate2" placeholder="Php" name="Rate1">
                   <option>0.00</option>
                  <?php while ($get_rate = $get_rate1_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <?php
                    $selected = ($get_rate2  ==  $get_rate['Salary'])? 'selected':'';?>
                    <option <?=$selected;?> value="<?php echo
    $get_rate['Salary']; ?>"><?php echo $get_rate['Salary']?></option> <?php } ?>
                </select>
                      </div>
                    </div>

 <div class="col-sm-5">
                      <div class="input-group">                  
                      <select class="form-control custom-select" name="Schedule1">
                  <option selected><?php echo $get_schedule1?></option>
                  <option> </option>
                  <option>Monday-Friday</option>
                  <option>Monday-Friday (NO NOON BREAK)</option>
                  <option>Monday-Friday w/ Holidays</option> 
                  <option>Monday-Friday w/ Holidays (NO NOON BREAK)</option>
                  <option>Monday-Saturday</option>
                  <option>Monday-Saturday (NO NOON BREAK)</option>
                  <option>Monday-Saturday w/ Holidays</option> 
                  <option>Monday-Saturday w/ Holidays (NO NOON BREAK)</option>
                  <option>Monday-Sunday</option>
                  <option>Monday-Sunday (NO NOON BREAK)</option>
                  <option>Monday-Sunday w/ Holidays</option> 
                  <option>Monday-Sunday w/ Holidays (NO NOON BREAK)</option>                 
                  <option>Saturdays and Sundays</option>
                  <option>Saturdays and Sundays w/ Holidays</option>
                  <option>Saturdays, Sundays and Holidays</option>
                  <option>Holidays</option>  
                </select>
                      </div>
                      </div>

                      <p> No. of days:</p>

                        <div class="col-sm-1">
                      <div class="form-group">
                     <input type="number" placeholder="0" onchange="sync()" name="Day2" id="day2" Placeholder="0"  value="<?php echo $get_day2?>"class="form-control"id="day2"></div>
                      </div>           
     
                    </div>

<hr>
                   

                     <div class="row">
                    <div class="col-sm-3">
                      <div class="input-group">                     
                      <select class="form-control custom-select" name="Month2" placeholder="Month">
                  <option selected><?php echo $get_month3?></option>
                   <option></option>
                  <option>January</option> 
                  <option>February</option> 
                  <option>March</option>
                  <option>April</option> 
                  <option>May</option> 
                  <option>June</option> 
                  <option>July</option>
                  <option>August</option>  
                   <option>September</option> 
                  <option>October</option> 
                  <option>November</option>
                  <option>December</option>  
                </select>
                      </div>
                      </div>
            
                <div class="col-sm-3">
                      <div class="form-group">
                     <input type="text"  name="Days2" class="form-control" value="<?php echo $get_days3?>" placeholder="Specific days" ></div>
                      </div>

                       <div class="col-sm-2">
                      <div class="form-group">
             <input type="text" class="form-control" name="" value="<?php echo date("Y");?>"  required>
               </div>
                 </div>
                      

                 

                    <div class="col-sm-4">
                      <div class="input-group">                    
                         <select class="form-control custom-select" name="Time3" placeholder="Time" >
                   <option>00:00</option>
                  <?php while ($get_timer3 = $get_time2_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <?php
                    $selected = ($get_time3  ==  $get_timer3['TimeSched'])? 'selected':'';?>
                    <option <?=$selected;?> value="<?php echo
    $get_timer3['TimeSched']; ?>"><?php echo $get_timer3['TimeSched']?></option> <?php } ?>
                </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">                        
                        <select class="form-control custom-select" onchange="sync()" id="rate3" placeholder="Php"  name="Rate2">
                   <option>0.00</option>
                  <?php while ($get_rated = $get_rate2_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <?php
                    $selected = ($get_rate3  ==  $get_rated['Salary'])? 'selected':'';?>
                    <option <?=$selected;?> value="<?php echo
    $get_rated['Salary']; ?>"><?php echo $get_rated['Salary']?></option> <?php } ?>
                </select>
                      </div>
                    </div>

                    <div class="col-sm-5">
                      <div class="input-group">                  
                      <select class="form-control custom-select" name="Schedule2">
                  <option selected><?php echo $get_schedule2?></option>
                  <option> </option>
                  <option>Monday-Friday</option>
                  <option>Monday-Friday (NO NOON BREAK)</option>
                  <option>Monday-Friday w/ Holidays</option> 
                  <option>Monday-Friday w/ Holidays (NO NOON BREAK)</option>
                  <option>Monday-Saturday</option>
                  <option>Monday-Saturday (NO NOON BREAK)</option>
                  <option>Monday-Saturday w/ Holidays</option> 
                  <option>Monday-Saturday w/ Holidays (NO NOON BREAK)</option>
                  <option>Monday-Sunday</option>
                  <option>Monday-Sunday (NO NOON BREAK)</option>
                  <option>Monday-Sunday w/ Holidays</option> 
                  <option>Monday-Sunday w/ Holidays (NO NOON BREAK)</option>                 
                  <option>Saturdays and Sundays</option>
                  <option>Saturdays and Sundays w/ Holidays</option>
                  <option>Saturdays, Sundays and Holidays</option>
                  <option>Holidays</option>  
                </select>
                      </div>
                      </div>

                      <p> No. of days:</p>

                    <div class="col-sm-1">
                      <div class="form-group">
                     <input input type="number" placeholder="0" onchange="sync()" name="Day3" Placeholder="0"  value="<?php echo $get_day3?>"class="form-control" id="day3"></div>
                      </div>           
                    </div>
                  </div>
                    </div>
                      </div>
                    </div>
                    <hr>

                   <div class="box-footer" align="right">
                     
                        <a href="create_job_order_edit.php?objid=<?php echo $get_id_no?>" class="btn btn-default"><b>Back</b></a>

                         <a href="#myModal2" id="myBtn2"  <?php echo $btnStatus?> class="btn btn-danger"><b>Delete</b></a>

                        <button type="submit" <?php echo $btnStatus?> class="btn btn-success" name="update" value="save" id="saving"><b>Update</b></a></button>
                      </div>

                     </div>
                   </div>
                 </div>
               </div>
             </div>
        </div>   
           </div>
         </form>
       </div>
             </div>
             


          <!-------------------- modals here --------------------------------->
   <div id="myModal2" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-sm">

        <div class="modal-content ">
    
    <div class="modal-header bg-danger">
              <h3><i class="fa fa-remove"></i> Confirm Delete</h3>
              <span class="close2">&times;</span>
           
        </div>
     <form class="form-horizontal" method="POST"action="<?php htmlspecialchars("PHP_SELF"); ?>">

               
                    <div class="modal-body">  
                  <div class="box-body">
                    <div class="form-group">
                    <label>Are you sure you want to delete this record?</label>
                    <input type="text" name="id" id="id_delete" value="<?php echo $get_firstn." ".$get_middlen[0]."."." ".$get_lastn;?>"class="form-control">
                    </div>
                  </div>
                </div>
                <input type="hidden" name="id_no" value="<?php echo "$get_no"?>"class="form-control">
                <input type="hidden" class="form-control" name="id" value="<?php echo $schedule_id;?>">
                 <input type="hidden" name="JobOrderNo" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Period" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="RegDays" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Schedule" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Rate" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Time1" value="<?php echo ""?>"class="form-control">
                    <input type="hidden" name="Day1" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Month1" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Days1" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Time2" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Rate1" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Days2" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Schedule1" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Month2" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Day2" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Time3" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Rate2" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Day3" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="Schedule2" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" name="no" value="<?php echo ""?>"class="form-control">
                   <input type="hidden" class="form-control" name="objid_pro" value="<?php echo $get_pro;?>">
                   <input type="hidden" class="form-control" name="noLaborers" value="<?php echo $get_laborer-1;?>">

              <input type="hidden" id="number1" style="background-color: red;" name="" class="form-control" value="<?php echo  $get_Total_Amount?>" name="" placeholder="Total Amount" >

            <input type="hidden" id="number3" style="background-color: yellow;" name="Amount" class="form-control" value="<?php echo $get_sched_amount-$get_Total_Amount?>" placeholder="Total Amount" > 

              <input type="hidden"  id="total5" class="form-control" value="<?php echo $get_prj_amount+$get_Total_Amount?>" name="PrjAmount"> 

            
            
                

                <div class="modal-footer">

                  <button type="button" class="btn btn-default bg-olive" data-dismiss="modal2">Cancel</button>
                  <!-- <button type="submit" name="delete_user" class="btn btn-danger">Yes</button> -->
                  <input type="submit" name="delete" class="btn btn-danger" value="Yes">
                </div> 
                     </form>

                    </div>
                  </div>
                </div>
                  <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
                 

   


</div> <?php include 'includes/footer.php'; ?>
 <!-- Content-Wrapper End -->               

<script>
   $('#prjName').on('click', function() {
        var prjName = this.value;
        $.ajax({
            type:"POST",
            url:'fetch_project.php',
            data:{prj_name:prjName},
         
            success:function(response){
              var result = jQuery.parseJSON(response);
                console.log('response from server',result);
                $('#charges').val(result.data);
                $('#budget').val(result.budget);
                 $('#balance').val(result.balance);
            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });


    }); 

  function combine(int)
{
  var table7 = document.getElementById('table7');
  var table4 = document.getElementById('number2');
  var table5 = document.getElementById('table5');
 
 
  total.value = (rate1.value*day1.value)+(rate2.value*day2.value)+(rate3.value*day3.value);
  total2.value= (total1.value-total2.value*1) ;
   total4.value= (total3.value*1)+(total.value*1);
    total6.value= (total5.value*1)-(total4.value*1);
 
}
    function sync(int)
{
  var rate1 = document.getElementById('rate1');
  var day1 = document.getElementById('day1');
  var rate2 = document.getElementById('rate2');
  var day2 = document.getElementById('day2');
  var rate3 = document.getElementById('rate3');
  var day3 = document.getElementById('day3');
  var total = document.getElementById('total');
  var total1 = document.getElementById('total1');
  var total2 = document.getElementById('total2');
   var total3 = document.getElementById('total3');
   var total4 = document.getElementById('total4');
   var total5 = document.getElementById('total5');
    var total10 = document.getElementById('total10');
   var total6 = document.getElementById('total6');
  total.value = (rate1.value*day1.value)+(rate2.value*day2.value)+(rate3.value*day3.value);
  total2.value= (total8.value*1)+(total.value*1);
    total3.value= total1.value-total4.value;
     total10.value= (total5.value-total2.value)+(total1.value*1);
   
 
}

 


 function sync1(int)
{
  var number1 = document.getElementById('number1');
  var number2 = document.getElementById('number2');
  var number3 = document.getElementById('number3');
  var number4 = document.getElementById('number4');
 
  total.value = (rate1.value*day1.value)+(rate2.value*day2.value)+(rate3.value*day3.value);
  total2.value= (total1.value-total2.value*1) ;
   total4.value= (total3.value*1)+(total.value*1);
    total6.value= (total5.value*1)-(total4.value*1);
 
}

    $('#prjName').on('change',function(){
             var type = $(this).val();
            //  $('#doc_no').val(type);4
      
         
            $.ajax({
              type:'POST',
              data:{type:type},
              url:'orderjono.php',
               success:function(data){
             $('#jonumber').val(data);


            } 
                 
                });           
                        
                      });


    </script>


<script>
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});

</script>

<script>
 // Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal2.style.display = "none";
}
}
</script>
</body>
</html>