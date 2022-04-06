<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
 <?php include 'includes/navbar.php'; ?>
 <?php include 'includes/sidebar.php'; ?>
 <?php include 'update_daily.php'; ?>
    
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
      <label style="text-align:right; font-size: 20px;" name="job_no" ><i>Job Order #:</i> <b class="mb-0 font-weight-bold bg-yellow"><?php echo  $get_sched_jo;?></b></label>
        <!-- <small>Version 2.0</small> -->
       
     </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Daily Time Record</li>
         </ol>
         </div>    
    </section>

  <div class="row">
       
        </div>
         <div class="col-md-12">
           <div class="card">
            
           
      
            <!-- /.card-header -->
            <!-- form start -->
             

            <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF");?>">
              <div class="card-body">
                
 <?php echo $alert_msg?>
 

                <table id="users2" class="table table-bordered table-striped">
                  <thead>
                    <tr bgcolor="lightgreen">
                      <th style="text-align:center;">Item #</th>
                     <th style="text-align:center;">Name</th>
                       <th style="text-align:center;">Period</th>
                       <th style="text-align:center;">Time</th>
                       <th style="text-align:center;">Rate</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                   <?php if($count>0){
            $n  =   1; while ($sched_data= $get_schedule_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                    
                    <?php if ($sched_data['id']==$get_sched_id) {
                     ?> 
                     <tr>
                     <td style="text-align:center; font-size:14px"><?php echo $sched_data['no'];?></td>
                    <td><?php echo $sched_data['FName']. " " . $sched_data['MName'][0] ."." . " " . $sched_data['LName'];?></td>

      <?php if ($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?> 
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                  <br>
                      <?php echo $sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years'];?></td>
                  <td style="text-align:center; font-size:14px"><?php echo $sched_data['Time1'];?>
                  <br>
                       <?php echo $sched_data['Time2'];?>
                  <br>
                        <?php echo $sched_data['Time3'];?>
                  </td>
                   <td style="text-align:right"><?php echo  number_format($sched_data['Rate'],2);?>
                   <br>
                      <?php echo number_format($sched_data['Rate1'],2);?>
                   <br>
                      <?php echo number_format($sched_data['Rate2'],2);?>
                   </td>

      <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
                    <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?></td>
                   <td style="text-align:center; font-size:14px"><?php echo $sched_data['Time1'];?>
                  <br>
                       <?php echo $sched_data['Time2'];?>
                    </td>
                    <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?>
                    <br>
                      <?php echo number_format($sched_data['Rate1'],2);?>
                    </td>


       <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']=="" && $sched_data['Month2']=="") {?>
                      <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays'].","." ".$sched_data['Years'];?> 
                    </td>
                    <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time1'];?></td>
                     <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?></td>

                      <?php } ?> 


                   

                  
                  

                           
                        <?php }elseif($sched_data['JobOrderNo']!=$JobNo) {?>

                              <?php } ?>   
                       
                 
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
              <hr>
              <label style="text-orientation:mixed; font-size: 24px">Daily Time Record</label>
             

 <div class="card-body">
  <form class="form-horizontal" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">

  <input type="hidden" class="id" value="<?php echo $schedule_id?>" name="id">
  <input type="hidden"  id="code" value="<?php echo  $get_sched_code?>" name="EmpCode">
       <div class="card card-dark">
             <div class="card-header with-border" >
               <input type="hidden" value="<?php echo "X"?>" class="form-control" id="none">
          <input type="hidden" value="<?php echo ""?>" class="form-control" id="none1">
 <div class="row">
 <div class="col-sm-1.5">
 <div class="form-group">
<button type="button" <?php echo $btnStatus;?> class="btn btn-info btn-sm pull-left" onclick="sync()"></i>Select All <i>(X)</i></button> </div> </div>
<div class="col-sm-3">
 <div class="form-group">
<button type="button" <?php echo $btnStatus;?> class="btn btn-default btn-sm pull-left" onclick="mysync()"></i>Unmark All</button>
</div></div></div><hr style="background-color:white;">

                   <div class="row">
              <div class="col-sm-2">
                      <div class="form-group">
                        <label>1</label>
                        <input style="text-align:center; color:blue;" type="text"  id="code1" name="One1" <?php echo $btnStatus;?> value="<?php echo $get_one?>" class="form-control">
                      </div>
                </div>
                  
            
                    <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>2</label>
                    <input type="text" style="text-align:center; color:blue;" id="code2" value="<?php echo $get_two?>" <?php echo $btnStatus;?> name="Two2" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>3</label>
                 <input type="text" style="text-align:center; color:blue;" id="code3" value="<?php echo $get_three?>" <?php echo $btnStatus;?> name="Three3" class="form-control">
                  </div>
                </div>


                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>4</label>
                    <input type="text" style="text-align:center; color:blue;" id="code4" name="Four4" <?php echo $btnStatus;?> value="<?php echo $get_four?>" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>5</label>
                 <input type="text" style="text-align:center; color:blue;" id="code5" name="Five5" <?php echo $btnStatus;?> value="<?php echo $get_five?>" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>6</label>
                    <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code6" name="" class="form-control">
                  </div>
                </div>
                </div>
              
              <div class="row">
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>7</label>
                 <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code7" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>8</label>
                    <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code8" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>9</label>
                 <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code9" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>10</label>
                    <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code10" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>11</label>
                 <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code11" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>12</label>
                    <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code12" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>13</label>
                 <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code13" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>14</label>
                    <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code14" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>15</label>
                 <input type="text" <?php echo $btnStatus;?> style="text-align:center; color:blue;" id="code15" name="" class="form-control">
                  </div>
              </div>

                <div class="col-sm-6">
                    <div class="form-group"> 
                 <label style="text-align:right">Total No. of days</label><b>
                 <input type="text" style="text-align:center; color:blue; background-color: pink" id="codeTotal" name="" class="form-control"></b>
                  </div>
              </div>
            </div>
           
          <hr>
            <div class="box-footer" align="right">

                       <a href="daily_time.php?objid=<?php echo $get_no?>" style="color:black"class="btn btn-default"><b>Back</b></a>
                     
                       <button type="submit" href="daily_time.php?objid=<?php echo $get_no?>" class="btn btn-success" <?php echo $btnStatus;?> name="update" value="update"><b>Save</b></button>
                       </div>
                       </div>
            </div>
              </form>
            </div>
              <!-- /.card-body -->
            </form>
          </div>
            </div>
          <!-- /.card -->
        </div>
        <div class="col-md-1"></div>
      </div>

   
    <!-- /.content -->


</div>
</div>
  </div>
  <?php include 'includes/footer.php'; ?>
 
 </div>
 <!-- Wrapper End -->

 

 

<script>
function sync()
{
  var none = document.getElementById('none');
  var code1 = document.getElementById('code1');
  var code2 = document.getElementById('code2');
  var code3 = document.getElementById('code3');
  var code4 = document.getElementById('code4');
  var code5 = document.getElementById('code5');
  var code6 = document.getElementById('code6');
  var code7 = document.getElementById('code7');
  var code8 = document.getElementById('code8');
  var code9 = document.getElementById('code9');
  var code10 = document.getElementById('code10');
  var code11 = document.getElementById('code11');
  var code12 = document.getElementById('code12');
  var code13 = document.getElementById('code13');
  var code14 = document.getElementById('code14');
  var code15 = document.getElementById('code15');

  code1.value = none.value;  
  code2.value = none.value;  
  code3.value = none.value;  
  code4.value = none.value;
  code5.value = none.value;  
  code6.value = none.value;  
  code7.value = none.value;  
  code8.value = none.value;
  code9.value = none.value;  
  code10.value = none.value;  
  code11.value = none.value;  
  code12.value = none.value;
  code13.value = none.value;  
  code14.value = none.value;  
  code15.value = none.value;
  }

  function mysync()
{
  var none1 = document.getElementById('none1');
  var code1 = document.getElementById('code1');
  var code2 = document.getElementById('code2');
  var code3 = document.getElementById('code3');
  var code4 = document.getElementById('code4');
  var code5 = document.getElementById('code5');
  var code6 = document.getElementById('code6');
  var code7 = document.getElementById('code7');
  var code8 = document.getElementById('code8');
  var code9 = document.getElementById('code9');
  var code10 = document.getElementById('code10');
  var code11 = document.getElementById('code11');
  var code12 = document.getElementById('code12');
  var code13 = document.getElementById('code13');
  var code14 = document.getElementById('code14');
  var code15 = document.getElementById('code15');

  code1.value = none1.value;  
  code2.value = none1.value;  
  code3.value = none1.value;  
  code4.value = none1.value;
  code5.value = none1.value;  
  code6.value = none1.value;  
  code7.value = none1.value;  
  code8.value = none1.value;
  code9.value = none1.value;  
  code10.value = none1.value;  
  code11.value = none1.value;  
  code12.value = none1.value;
  code13.value = none1.value;  
  code14.value = none1.value;  
  code15.value = none1.value;
}


 </script>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
