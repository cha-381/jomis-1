<?php include 'includes/session2.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/update_edit_jo.php'; ?>
<?php include 'deletejo_sched.php'; ?>

  

  <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
      Create Job Order
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Job Order</li>
         </ol>
         </div>
       </section>



     <!-- Main content -->
           <div class="card-body"> 
           <div class="container">
            <div align="center">
               <?php echo $alert_msg;?>
             </div>
           <i style="font-size:17px"><i style="color:red" align="center">*Laborers are directed to proceed to jobsite namely:</i></i>  
             <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">

              <div class="jumbotron">
                <div class="form-group"> 
                     <div class="row">
                      <div class="col-sm-12">
              <label style="text-align:right; font-size: 30px;" name="job_no"><i>Job Order #:</i> <b class="mb-0 font-weight-bold bg-yellow"><?php echo $JobOrder;?></b></label>


            <input type="hidden" id="news" name="new_number"  class="form-control" value="<?php echo  $get_objid;?>">
              <input type="hidden" id="none" class="form-control" value="" >
             <input type="hidden" id="nonen" class="form-control" value="<?php echo $JobOrder;?>">
             <input type="hidden" id="abbre_jo" class="form-control" value="<?php echo $get_abbree;?>">


              <div class="row">
              <div class="form-group"> 
              <div class="col-sm-12">
              <label ><b>Project Name:</b> <i><?php echo $get_prjnme;?></i></label>
              </div>

                      <div class="col-sm-12">
                  
                          <label ><b>Charges:</b> <i><?php echo $get_charges;?></i></label>
                      </div></div></div>
                    


              <hr>
           
               <div class="form-group"> 
                    <div class="col-sm-4">
                      <h3>List of Employees                     
         <button type="button" href="#myModal" id="myBtn"   <?php echo $btnAdd;?> class="btn btn-success">Add Employee</button></h3>
      
       </div>
       </div>   

      
       
              
                  
                      <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">
                    
               
              <div class="card-body"style="overflow-x:auto;">
                <table id="user" class="table" cellspacing="1" cellpadding="8"  border="3px white;" border-collapse="collapse;"
  border-spacing="0;" width= "100%;">
                  <thead>
                    <tr bgcolor="lightgreen">
                      <th style="text-align:center;" with="5%">No.</th>
                     <th style="text-align:center;" with="25%">Name</th>
                       <th style="text-align:center;" with="20%">Period</th>
                       <th style="text-align:center;" with="20%">Time</th>
                       <th style="text-align:center;" with="5%">Rate</th>
                     
                       <th style="text-align:center;" with="5%">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                          <?php if($count>0){
            $n  =   1;  while ($sched_data= $get_schedule_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                    
                   <?php if ($sched_data['JobOrderNo']==$JobOrder) {?> 
                   <td><?php echo $n++; ?></td>
        <?php if ($sched_data['EName']=="" && $sched_data['FName']!="" && $sched_data['MName']!="" && $sched_data['LName']!="") {?> 
                    <td><?php echo ucwords(strtoupper($sched_data['FName']. " " . $sched_data['MName'][0] ."." . " " . $sched_data['LName']));?></td>
      <?php }elseif($sched_data['EName']!="" && $sched_data['FName']!="" && $sched_data['MName']!="" && $sched_data['LName']!="") {?> 
                    <td><?php echo ucwords(strtoupper($sched_data['FName']. " " . $sched_data['MName'][0] ."." . " " . $sched_data['LName'].","." ". $sched_data['EName']));?></td>
      <?php }elseif($sched_data['EName']=="" && $sched_data['FName']!="" && $sched_data['MName']=="" && $sched_data['LName']!="") {?> 
                     <td><?php echo ucwords(strtoupper($sched_data['FName']. " " . $sched_data['LName']));?></td>
      <?php }elseif($sched_data['EName']!="" && $sched_data['FName']!="" && $sched_data['MName']=="" && $sched_data['LName']!="") {?> 
                      <td><?php echo ucwords(strtoupper($sched_data['FName']. " " .$sched_data['LName'].","." ".$sched_data['EName']));?></td>
      <?php } ?>

      <?php if ($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?> 
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                  <br>
                      <?php echo $sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years'];?></td>
                  <td style="text-align:left; font-size:13px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                  <br>
                        <?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                  <br>
                        <?php echo $sched_data['Time3']." "."(".$sched_data['Schedule2'].")";?>
                  </td>
                   <td style="text-align:right"><?php echo  number_format($sched_data['Rate'],2);?>
                   <br>
                      <?php echo number_format($sched_data['Rate1'],2);?>
                   <br>
                      <?php echo number_format($sched_data['Rate2'],2);?>
                   </td>

                      <?php }elseif($sched_data['Period']=="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?>
                  <td style="text-align:left; font-size:13px"><?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                  <br>
                      <?php echo $sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years'];?></td>
                  <td style="text-align:left; font-size:13px"><?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                  <br>
                        <?php echo $sched_data['Time3']." "."(".$sched_data['Schedule2'].")";?>
                  </td>
                   <td style="text-align:right"><?php echo number_format($sched_data['Rate1'],2);?>
                   <br>
                      <?php echo number_format($sched_data['Rate2'],2);?>
                   </td>

      <?php }elseif($sched_data['Period']=="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
                  <td style="text-align:left; font-size:13px"><?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                 </td>
                  <td style="text-align:left; font-size:13px"><?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                  </td>
                   <td style="text-align:right"><?php echo number_format($sched_data['Rate1'],2);?>
                   </td>

      <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
                    <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?></td>
                 <td style="text-align:left; font-size:13px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                  <br>
                       <?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                    </td>
                    <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?>
                    <br>
                      <?php echo number_format($sched_data['Rate1'],2);?>
                    </td>


       <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']=="" && $sched_data['Month2']=="") {?>
                      <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                    </td>
                    <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?></td>
                     <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?></td>

                      <?php } ?> 


                
                     

                   <td align="center">

                 <a class="btn btn-outline-primary btn-xs"  href="edit_edit_jo.php?id=<?php echo $sched_data['id']; ?>" data-toggle="tooltip" title="Edit"><img class="img-fluid img-square"
                       src="../dist/img/pen.png"
                       alt="Icon" width="30" height="30" ></a>
         
                                                              
                    
                        <?php }elseif($sched_data['JobOrderNo']!=$JobNo) {?>

                              <?php } ?>   
                       
                    </td>

                          </tr>
                     <?php 
                    }
        }else{?>
        <tr>
            <td colspan="6" align="center"><strong>No Record(s) Found!</strong></td>
        </tr>
        <?php } ?>
                  </tbody>
                </table>
              </form>
              </div>

                       

<form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">
              <div class="card-body text-m">
                <table id="user" class="table-secondary">
                  <thead>
                   
                      <tr style="font-size: 14px; background-color: hsla(89, 43%, 51%, 0.3)">
                      <th width="15%" style="text-align:center;">ITEM</th>
                      <th width="50%"style="text-align:center;background-color: hsla(99, 43%, 51%, 0.3)">Description</th>
                     
                    </tr>

                    </tr>
                  </thead>
                  <tbody>

                     <?php while ($get_project = $get_create_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                       <?php if ($get_project['JobOrderNo']==$JobOrder) {
                     ?> 
          
                    <tr>
                    <td style="text-align:left; font-size:12px"><?php echo $get_project['Item1'];?></td>
                    <td style="text-align:left; font-size:12px"><?php echo $get_project['Description1'];?></td>
                  </tr>
                    <tr>
                    <td style="text-align:left; font-size:12px"><?php echo $get_project['Item2'];?></td>
                    <td style="text-align:left; font-size:12px"><?php echo $get_project['Description2'];?></td>
                  </tr>
                  <tr>
                    <td style="text-align:left; font-size:12px"><?php echo $get_project['Item3'];?></td>
                   <td style="text-align:left; font-size:12px"><?php echo $get_project['Description3'];?></td>
                 </tr>
                 <tr>
                   <td style="text-align:left; font-size:12px"><?php echo $get_project['Item4'];?></td>
                   <td style="text-align:left; font-size:12px"><?php echo $get_project['Description4'];?></td></tr>
                   <tr>
                   <td style="text-align:left; font-size:12px"><?php echo $get_project['Item5'];?></td>
                   <td style="text-align:left; font-size:12px"><?php echo $get_project['Description5'];?></td>
                          </tr>

                      <div class="form-group">
                 
                       <?php }?>
                   <?php } ?>

                  </tbody>
                </table>
                <div class="form-group"> 
                    <div class="col-sm-12">
                      <a href="editDescription.php?objid=<?php echo $get_objid?>"  style="font-size: 13px;">Edit description</a>
                      </div>
                      </div>
                  </form>
              </div>
             <!-- /.box-body -->
  

               <form class="form-horizontal" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">

                <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>No. of Laborers</label>
                        <input type="text" id="laborers" class="form-control" name="job_laborers" value="<?php echo $count_emm;?>" disabled>
                 
                      </div>
                    </div>

                  
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Total Amount</label>
                    
                      <input type="text" id="amount" class="form-control" value="<?php echo number_format($count_em2,2);?>"  disabled>
                     

                      </div>
                      </div>
                    </div>
                    

                 

                   <input type="hidden" id="" class="form-control" name="" value="<?php echo date("F d,Y");?>">

                      <input type="hidden" id="amt" class="form-control" name="Amount" value="<?php echo $count_em2;?>">

                       <input type="hidden" class="form-control" name="" value="<?php echo $count_em3;?>">
 
                      <input type="hidden" id="" class="form-control"  name="Charges" value="<?php echo $get_charges;?>"  >

                       <input type="hidden" id="" class="form-control"  value="<?php echo $get_prjnme;?>"  >

                       <input type="hidden" id="" class="form-control"  value="<?php echo $dept;?>" >
                       <input type="hidden" name="objid_pro" class="form-control"  value="<?php echo $get_objid_pro;?>" >

                        <input type="hidden" id="laborers" class="form-control" name="job_laborers" value="<?php echo $count_emm;?>">


  <?php   while ($get = $get_proj_data->fetch(PDO::FETCH_ASSOC)) { ?>
              <?php if ($get['objid']==$get_objid_pro) { ?>
                <label style="text-align:right; font-size: 18px;"><i>Available Balance:</i> <b class="mb-0 font-weight-bold bg-yellow"><?php echo number_format($get['ProjectBudget']-$count_em4,2);?> </b></label>
                
                 <input type="hidden" id=""  name="Balance" value="<?php echo $get['ProjectBudget']-$count_em5;?>" class="form-control">    
                    
                    <input type="hidden" id="jonum" name="JobOrderNo" value="<?php echo $JobOrder;?>" class="form-control">

          
                <input type="hidden" name="Subject" value="<?php echo "";?>" class="form-control">  
         
                        
              <input type="hidden" id="balance"  class="form-control">

               <input type="hidden" name="Bal" value="<?php echo $get['ProjectBudget']-$count_em4-$count_em2;?>" name="" class="form-control">
             
               <input type="hidden" id="balance" name="PreviousBalance" value="<?php echo $get['ProjectBudget']-$count_em4;?>" name="" class="form-control">

              <input type="hidden" id="balance"  value="<?php echo $get_objid;?>" name="objid" class="form-control">

                    
                      <input type="hidden" id="prevbalance"  class="form-control" value="<?php echo $get_prev_bal-$count_em2;?>" >

                        <input type="hidden" id="" class="form-control" name="code" value="<?php echo $get['code'];?>" >
               <?php } ?>
                     <?php } ?>



       
                    <hr>
                     <div class="box-footer" align="right">
                       <button type="submit" class="btn btn-success" <?php echo $btnStatus?> name="update" value="save">Update</button>
                       <a href="list_jo.php" <?php echo $btnNew?> class="btn btn-default"><b>Close</b></a>
                   </div>
                    </div>
          </div>
          
        </div>

    <!-- /.post -->
                    </div>   
 <!-- /.tab-pane -->
                </section> </form>

              </div>
                     </div>  
              </div>
            </div>
          </form>
        </div>
      </div>



<!-------------------- modals here --------------------------------->

<div id="myModal" class="modal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
    
    <div class="modal-header bg-info">
              <h3><i class="fa fa-plus"></i> ADD</h3>
               <span class="close">&times;</span>
           
        </div>
     <form class="form-horizontal" method="POST" action="insert_edit_jo.php">

               
              <div class="modal-body">
                 

<input type="hidden" name="jo_no" id="jonumber1" value="" class="form-control">  

<input type="hidden" name="new_number" id="new1" value="" class="form-control">

<input type="hidden" name="jo_last" id="jo_last" value="" class="form-control">     

<input type="hidden" name="jo_middle" id="jo_middle" value="" class="form-control">  
<input type="hidden" name="jo_id" id="jo_id" value="" class="form-control">   
     
<input type="hidden" name="jo_photo" id="jo_photo" value="" class="form-control">  

<input type="hidden" name="" id="jo_total" value="" class="form-control">     


      
<input type="hidden" name="jo_prev_prj" id="jo_total_amount" value="<?php echo $get_prev_bal?>" class="form-control"> 

<input type="hidden" name="jo_abbre" id="jo_abbre" value="" class="form-control">    

<input type="hidden" name="jo_total" value="<?php echo $laborers1 + 1?>" class="form-control">
<input type="hidden" name="jo_uniq" value="<?php echo $get_uniq_no?>" class="form-control">  
<input type="hidden" name="jo_dept" value="<?php echo $db_department?>" class="form-control">  
<input type="hidden" name="jo_charges" value="<?php echo $db_charges?>" class="form-control"> 
<input type="hidden" name="jo_objid_pro" value="<?php echo $get_objid_pro?>" class="form-control"> 
<?php if($amount1=="") { ?>
<input type="hidden" name="jo_prev_amount" id="jon1" value="<?php echo "0.00"?>" class="form-control"> 
<?php }elseif($amount!="") {?>
<input type="hidden" name="jo_prev_amount" id="jon1" value="<?php echo $amount1?>" class="form-control"> 
<?php }?>

            
     

                  <div class="form-group"> 
                     <div class="row">
                      <div class="col-sm-8">

                    <label> Name: </label>
                      <select class="form-control custom-select" id="joName" name="name" onclick="sync()">
                  <option selected>Please select....</option>
                <?php while ($get_name = $get_allemp1_data->fetch(PDO::FETCH_ASSOC)) { ?>

 <?php if ($get_name['JO']!=$JobOrder && $get_name['EmpExt']=='' && $get_name['DeptCharge']==$db_department && $get_name['Charges']==$get_prjnme) {?>
          <option value="<?php echo
   $get_name['EmpFname']; ?>"><?php echo  $get_name['EmpLname'].","." ".$get_name['EmpFname']. " " . $get_name['EmpMname'][0] ."."?></option>

<?php }elseif($get_name['JO']!=$JobOrder && $get_name['EmpExt']=='' && $get_name['DeptCharge']=='All' && $get_name['Charges']==$get_prjnme) {?>
          <option value="<?php echo
   $get_name['EmpFname']; ?>"><?php echo  $get_name['EmpLname'].","." ".$get_name['EmpFname']. " " . $get_name['EmpMname'][0] ."."?></option>

<?php }elseif($get_name['JO']!=$JobOrder && $get_name['EmpExt']!='' && $get_name['DeptCharge']==$db_department && $get_name['Charges']==$get_prjnme) {?>
           <option value="<?php echo
   $get_name['EmpFname']; ?>"><?php echo  $get_name['EmpLname'].","." ".$get_name['EmpFname']. " " . $get_name['EmpMname'][0] .".".","." ". $get_name['EmpExt']?></option>

<?php }elseif($get_name['JO']!=$JobOrder && $get_name['EmpExt']!='' && $get_name['DeptCharge']=='All' && $get_name['Charges']==$get_prjnme) {?>
            <option value="<?php echo
   $get_name['EmpFname']; ?>"><?php echo  $get_name['EmpLname'].","." ".$get_name['EmpFname']. " " . $get_name['EmpMname'][0] .".".","." ". $get_name['EmpExt']?></option>


 <?php } ?><?php } ?>
                </select>
              </div>
    

                <div class="col-sm-4">
                      <div class="form-group">
                        <label>Code</label>
                        <input type="text"  id="code3" name="empcode" class="form-control" readonly></div>
                      </div>
          </div>
                  
              <div class="form-group"> 
                     <div class="row">
                    <div class="col-sm-6">
                    <label style="font-size:28px"> Covered Period </label>
                  </div>
                </div>
              
              <div class="form-group"> 
                     <div class="row">
                    <div class="col-sm-6">
                 <label style="font-size:14px"> Regular Schedule </label>
                  </div>
                </div>
              </div>
                   <div class="row">
                    <div class="col-sm-2">
                        <div class="input-group">
                   <select class="form-control custom-select" name="period">
                  <option selected disabled>Month</option>
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

                  <div class="col-sm-1">
                  <div class="input-group">     
                 <input type="text"  class="form-control" id="start" name="jo_regdays" onclick="mysync()" style="text-align: center" placeholder="-From-" >
                 </div>
                 </div>

                  <div class="col-sm-1">
                  <div class="input-group">     
                <input type="text"  class="form-control"  value="<?php echo "-"?>"  disabled>
                 </div>
                 </div>

                 <div class="col-sm-1">
                  <div class="input-group">     
                 <b><input type="text"  class="form-control" id="end" name="jo_regdays2" onchange="sync2()" style="text-align: center"placeholder="-To-"></b>
                 </div>
                 </div>

                 <div class="col-sm-1">
                  <div class="input-group">     
                 <input type="text" class="form-control" name="jo_years" value= <?php echo $now_year= date('Y');?>></div>
                   </div>   

                   <div class="col-sm-5">
                      <div class="input-group date mb-3">              
                      <select class="form-control custom-select"  style="width:100%" name="schedule" >
                  <option selected disabled>--</option>
                  <?php while ($get_days = $get_days_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_days['DaysSched']; ?>"><?php echo $get_days['DaysSched']?></option> <?php } ?>
                </select>
                      </div>
                    </div>
                      
                    <button type="button" href="#myModal4" id="myBtn4"  <?php echo $btnStatus?> class="btn btn-success" style="height: 10%"><i class="fa fa-plus"></i></button>
                     </div>
     
                      <div class="row">
                    <div class="col-sm-4">                  
                         <select class="form-control custom-select" name="time1">
                  <option selected disabled>Time</option>
                  <?php while ($get_time = $get_time_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_time['TimeSched']; ?>"><?php echo $get_time['TimeSched']?></option> <?php } ?>
                </select>
                      </div>                      
                    

                     <button type="button" href="#myModal2" id="myBtn2"  <?php echo $btnStatus?> class="btn btn-success" style="height: 10%"><i class="fa fa-plus"></i></button>
                  
                  
                    <div class="col-sm-3">
                      <div class="input-group">               
                        <select class="form-control custom-select" name="rate">
                  <option selected disabled>Php</option>

                  <?php while ($get_rate = $get_rate_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_rate['Salary']; ?>"><?php echo $get_rate['Salary']?></option> <?php } ?>
                </select>
                      </div>
                    </div>

                     <button type="button" href="#myModal3" id="myBtn3"  <?php echo $btnStatus?> class="btn btn-success" style="height: 10%"><i class="fa fa-plus"></i></button>

                   

                       

                      <p> No. of days:</p>

                        <div class="col-sm-1">
                      <div class="form-group">
                     <input type="number" placeholder="0" style="color:red; border-color: red" name="jo_day1" class="form-control" id="day1"></div>
                      </div>           
                    </div>


                    <div class="form-group"> 
                      <div class="row">
          <div class="col-lg-12">
                      <div class="card card-outline card-info" style="background-color: #fefbd8;">
              <div class="card-header">
                 <h5 class="card-title"><i> Additional Schedule</i></h5>
                 <div class="card-tools">
                      <span class="badge badge-danger" ></span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                  </div>
                </div>
            

               <div class="card-body collapse">
                     

                          <div class="row">
                    <div class="col-sm-3">
                      <div class="input-group">                     
                      <select class="form-control custom-select" name="jo_month1">
                  <option selected disabled>Month</option>
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
                     <input type="text"  name="jo_days1" class="form-control" placeholder="Specific days" ></div>
                      </div>
             
                 <div class="col-sm-2">
                      <div class="form-group">
                     <input type="text" class="form-control" name="" value= <?php echo $now_year= date('Y');?>></div>
                      </div>  

                    <div class="col-sm-4">
                      <div class="input-group">                    
                         <select class="form-control custom-select" name="jo_time1">
                  <option selected disabled>Time</option>
                  <?php while ($get_time1 = $get_time1_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_time1['TimeSched']; ?>"><?php echo $get_time1['TimeSched']?></option> <?php } ?>
                </select>
                      </div>
                    </div>


<div class="col-sm-3">
                      <div class="input-group">                     
                        <select class="form-control custom-select" name="jo_rate1">
                  <option selected disabled>0.00</option>
                  <?php while ($get_rate1 = $get_rate1_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_rate1['Salary']; ?>"><?php echo $get_rate1['Salary']?></option> <?php } ?>
                </select>
                      </div>
                    </div>



                <div class="col-sm-5">
                      <div class="input-group">                  
                      <select class="form-control custom-select" name="schedule1">
                  <option selected>--</option>
                 <option>Monday</option>
                  <option>Tuesday</option>
                  <option>Wednesday</option>
                  <option>Thursday</option>
                  <option>Friday</option>
                  <option>Saturday</option>
                  <option>Sunday</option>
                  <option>Monday, Wednesday & Friday</option>
                  <option>Tuesday, Thursday & Saturday</option>
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
                     <input type="number" value="<?php echo 0;?>" style="color:red; border-color: red" name="jo_day2" class="form-control"id="day2"></div>
                      </div>           
     
                    </div>

<hr>

                   

                     <div class="row">
                    <div class="col-sm-3">
                      <div class="input-group">                     
                      <select class="form-control custom-select" name="jo_month2">
                  <option selected disabled>Month</option>
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
                     <input type="text"  name="jo_days2" class="form-control" placeholder="Specific days" ></div>
                      </div>
                    
              <div class="col-sm-2">
                      <div class="form-group">
                     <input type="text" class="form-control" name="" value= <?php echo $now_year= date('Y');?>></div>
                      </div>  
                 

                    <div class="col-sm-4">
                      <div class="input-group">                    
                         <select class="form-control custom-select" name="jo_time2">
                  <option selected disabled>Time</option>
                  <?php while ($get_time2 = $get_time2_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_time2['TimeSched']; ?>"><?php echo $get_time2['TimeSched']?></option> <?php } ?>
                </select>
                      </div>
                    </div>

                      
                    <div class="col-sm-3">
                      <div class="input-group">                        
                        <select class="form-control custom-select" name="jo_rate2">
                  <option selected disabled>0.00</option>
                  <?php while ($get_rate2 = $get_rate2_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_rate2['Salary']; ?>"><?php echo $get_rate2['Salary']?></option>
                        <?php } ?>
                </select>
                      </div>
                       </div>

                       <div class="col-sm-5">
                       <div class="input-group">                  
                      <select class="form-control custom-select" name="schedule2">
                 <option>Monday</option>
                  <option>Tuesday</option>
                  <option>Wednesday</option>
                  <option>Thursday</option>
                  <option>Friday</option>
                  <option>Saturday</option>
                  <option>Sunday</option>
                  <option>Monday, Wednesday & Friday</option>
                  <option>Tuesday, Thursday & Saturday</option>
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
                     <input input type="number" style="color:red; border-color: red" value="<?php echo 0;?>" name="jo_day3"class="form-control" id="day3"></div>              
                    </div>
                   


                      </div>           
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

                   
                
          <div class="modal-footer">    
           
                       <div class="col-sm-2">
                      <div class="input-group"> 
                      <button class="button" name="insert" href="create_job_order_edit1.php?objid=<?php echo $get_objid?>"><span> Proceed</span></button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
                  <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


<!-------------------- modals here --------------------------------->
   <div id="myModal2" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-m">

        <div class="modal-content ">
    
    <div class="modal-header bg-info">
              <h3><i class="fa fa-plus-square-o"></i> Add Time Schedule</h3>
              <span class="close2">&times;</span>
           
        </div>
     <form class="form-horizontal" method="POST" action="insert_time2.php">

<input type="hidden" name="new_number" id="new1" value=""  class="form-control">  
<input type="hidden" name="user_no" id="" value="<?php echo $db_user?>"  class="form-control"> 
               
                    <div class="modal-body">  
                       <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label><b style="font-size: 150%">Time</b><i> (ex. 8:00AM-12:00PM/1:00PM-5:00PM)</i></label>
                    <input type="text" name="jo_time"  id="" onclick="mysync()" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="modal-body">  
                  <div class="row">
                 </div>
                </div>




                <div class="modal-footer">

                  <input type="submit" name="add" class="btn btn-success" value="Add">

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


<!-------------------- modals here --------------------------------->
   <div id="myModal3" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-s">

        <div class="modal-content ">
    
    <div class="modal-header bg-info">
              <h3><i class="fa fa-plus-square-o"></i> Add Rate</h3>
              <span class="close3">&times;</span>
           
        </div>
     <form class="form-horizontal" method="POST" action="insert_rate2.php">

<input type="hidden" name="new_number" id="new2" value=""  class="form-control">  
<input type="hidden" name="user_no" id="" value="<?php echo $db_user?>"  class="form-control"> 
               
                    <div class="modal-body">  
                       <div class="row">
                        <label><b style="font-size: 150%">P</b><i> =</i></label>
                  <div class="col-sm-11">
                    <div class="form-group">
                    <input type="text" name="jo_rate"  id="" onclick="mysync()" style="text-align: right" class="form-control">
                    </div>
                  </div>


                </div>

                <div class="modal-body">  
                  <div class="row">
                 </div>
                </div>
              <div class="modal-footer">

                  <input type="submit" name="add" class="btn btn-success" value="Add">

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

<!-------------------- modals here --------------------------------->
   <div id="myModal4" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-s">

        <div class="modal-content ">
    
    <div class="modal-header bg-info">
              <h3><i class="fa fa-plus-square-o"></i> Add Days</h3>
              <span class="close4">&times;</span>
           
        </div>
     <form class="form-horizontal" method="POST" action="insert_days2.php">

<input type="hidden" name="new_number" id="new4" value=""  class="form-control">  
<input type="hidden" name="user_no" id="" value="<?php echo $db_user?>"  class="form-control"> 
               
                   <div class="modal-body">  
                       <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <input type="text" name="jo_days"  id="" onclick="mysync()" style="text-align: left" class="form-control">
                    </div>
                  </div>

                </div>

                <div class="modal-body">  
                  <div class="row">
                 </div>
                </div>
              <div class="modal-footer">

                  <input type="submit" name="add" class="btn btn-success" value="Add">
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
</div> 

<?php include 'includes/scripts.php'; ?>

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
 


 <script>
      $('#joName').on('click', function() {
        var joName = this.value;
        $.ajax({
            type:"POST",
            url:'fetch_code.php',
            data:{jo_name:joName},
         
            success:function(response){
              var result = jQuery.parseJSON(response);
                console.log('response from server',result);
                $('#code3').val(result.empcode);
                $('#jo_last').val(result.last);
                $('#jo_middle').val(result.middle);
                 $('#jo_photo').val(result.photo);
                 $('#jo_id').val(result.id);                               
            
          },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });


    }); 

      
                 
                  

     $('#joName').on('click',function(){
             var type = $(this).val();
            //  $('#doc_no').val(type);
      
         
            $.ajax({
              type:'POST',
              data:{type:type},
              url:'fetch_no.php',
               success:function(data){
             $('#jo_total').val(data);
            

            } 
                 
                });           
                        
                      });

   function sync2(int)
{
  var start = document.getElementById('start');
  var end = document.getElementById('end');
  var day1 = document.getElementById('day1');
  
  day1.value = (end.value-start.value)+1;
 
   
  }
function sync()
{
  var nonen = document.getElementById('nonen');
  var jonumber1 = document.getElementById('jonumber1');
  var laborers = document.getElementById('laboreres');
   var abbre_jo = document.getElementById('abbre_jo');
  var jo_abbre = document.getElementById('jo_abbre');
  
 jo_abbre.value= abbre_jo.value;
  jonumber1.value = nonen.value;
  laborers.disabled='false';
   
  }

  function mysync()
{
  var news = document.getElementById('news');
  var new1 = document.getElementById('new1');
  var new2 = document.getElementById('new2');
  var new4 = document.getElementById('new4');
  
  new1.value = news.value; 
  new2.value = news.value;
  new4.value = news.value; 
  }



   function newsync(int)
{
  var amt = document.getElementById('amt');
  var balance = document.getElementById('balance');
  var prevbalance = document.getElementById('prevbalance');
  balance.value=prevbalance.value-amt.value;
}


 
   // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the button that opens the modal


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
}
}

var modal4 = document.getElementById("myModal4");

// Get the button that opens the modal
var btn4 = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks the button, open the modal 
btn4.onclick = function() {
  modal4.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
  modal4.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal4.style.display = "none";
}
}
</script>

<script>
 // Get the modal
var modal3 = document.getElementById("myModal3");

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
  modal3.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  modal3.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal3.style.display = "none";
}
}
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
 
</body>
</html>
