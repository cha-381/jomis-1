<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
 <?php include 'includes/navbar.php'; ?>
 <?php include 'includes/sidebar.php'; ?>
 <?php include 'update_overtime.php'; ?>
    
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
      <li class="breadcrumb-item active">DTR Overtime</li>
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
              <label style="text-orientation:mixed; font-size: 24px">Daily Time Record</label> <i class="mb-0 font-weight-bold bg-yellow" style="font-size: 20px">(Overtime)</i>
             

 <div class="card-body">
  <form class="form-horizontal" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">

<div class="card card-secondary">
             <div class="card-header with-border" >
              <input type="hidden" class="id" value="<?php echo $schedule_id?>" name="id">
  <input type="hidden" value="<?php echo "4/8"?>" class="form-control" id="none2">
          <input type="hidden" value="<?php echo ""?>" class="form-control" id="none3">
 <div class="row">
 <div class="col-sm-1.5">
 <div class="form-group">
<button type="button" <?php echo $btnStatus;?> class="btn btn-warning btn-sm pull-left" onclick="sync2()"></i>Select All <i>(4/8)</i></button> </div> </div>
<div class="col-sm-3">
 <div class="form-group">
<button type="button" <?php echo $btnStatus;?> class="btn btn-default btn-sm pull-left" onclick="mysync2()"></i>Unmark All</button>
</div></div></div><hr style="background-color:white;">
                   <div class="row">
              <div class="col-sm-2">
                      <div class="form-group">
                        <label>1</label>
                        <input style="text-align:center; color:blue;" type="text"  id="codeO1" <?php echo $btnStatus;?> value="<?php echo $get_o1?>" name="O1" class="form-control">
                      </div>
                </div>
                  
            
                    <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>2</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO2" name="O2" value="<?php echo $get_o2?>" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>3</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO3" name="O3" value="<?php echo $get_o3?>" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>


                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>4</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO4" name="O4" value="<?php echo $get_o4?>" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>5</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO5" name="O5" value="<?php echo $get_o5?>" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>6</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO6" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>
                </div>
              
              <div class="row">
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>7</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO7" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>8</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO8" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>9</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO9" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>10</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO10" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>11</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO11" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>12</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO12" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>13</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO13" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>14</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO14" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>15</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO15" name="" <?php echo $btnStatus;?> class="form-control">
                  </div>
              </div>

            <div class="col-sm-6">
                    <div class="form-group"> 
                 <label style="text-align:right">Total No. of days</label><b>
                 <input type="text" style="text-align:center; color:blue; background-color: lightgreen" <?php echo $btnStatus;?> id="codeTotal" name="" class="form-control"></b>
                  </div>
              </div>
            </div>
          <hr>
            <div class="box-footer" align="right">

                       <a href="daily_time.php?objid=<?php echo $get_no?>" style="color:black"class="btn btn-default"><b>Back</b></a>
                     
                       <button type="submit" href="daily_time.php?objid=<?php echo $get_no?>" class="btn btn-success" <?php echo $btnStatus;?> name="edit" value="update"><b>Save</b></button>
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

function sync2()
{
  var none2 = document.getElementById('none2');
  var codeO1 = document.getElementById('codeO1');
  var codeO2 = document.getElementById('codeO2');
  var codeO3 = document.getElementById('codeO3');
  var codeO4 = document.getElementById('codeO4');
  var codeO5 = document.getElementById('codeO5');
  var codeO6 = document.getElementById('codeO6');
  var codeO7 = document.getElementById('codeO7');
  var codeO8 = document.getElementById('codeO8');
  var codeO9 = document.getElementById('codeO9');
  var codeO10 = document.getElementById('codeO10');
  var codeO11 = document.getElementById('codeO11');
  var codeO12 = document.getElementById('codeO12');
  var codeO13 = document.getElementById('codeO13');
  var codeO14 = document.getElementById('codeO14');
  var codeO15 = document.getElementById('codeO15');

  codeO1.value = none2.value;  
  codeO2.value = none2.value;  
  codeO3.value = none2.value;  
  codeO4.value = none2.value;
  codeO5.value = none2.value;  
  codeO6.value = none2.value;  
  codeO7.value = none2.value;  
  codeO8.value = none2.value;
  codeO9.value = none2.value;  
  codeO10.value = none2.value;  
  codeO11.value = none2.value;  
  codeO12.value = none2.value;
  codeO13.value = none2.value;  
  codeO14.value = none2.value;  
  codeO15.value = none2.value;
  }
   function mysync2()
{
  var none3 = document.getElementById('none3');
  var codeO1 = document.getElementById('codeO1');
  var codeO2 = document.getElementById('codeO2');
  var codeO3 = document.getElementById('codeO3');
  var codeO4 = document.getElementById('codeO4');
  var codeO5 = document.getElementById('codeO5');
  var codeO6 = document.getElementById('codeO6');
  var codeO7 = document.getElementById('codeO7');
  var codeO8 = document.getElementById('codeO8');
  var codeO9 = document.getElementById('codeO9');
  var codeO10 = document.getElementById('codeO10');
  var codeO11 = document.getElementById('codeO11');
  var codeO12 = document.getElementById('codeO12');
  var codeO13 = document.getElementById('codeO13');
  var codeO14 = document.getElementById('codeO14');
  var codeO15 = document.getElementById('codeO15');

  codeO1.value = none3.value;  
  codeO2.value = none3.value;  
  codeO3.value = none3.value;  
  codeO4.value = none3.value;
  codeO5.value = none3.value;  
  codeO6.value = none3.value;  
  codeO7.value = none3.value;  
  codeO8.value = none3.value;
  codeO9.value = none3.value;  
  codeO10.value = none3.value;  
  codeO11.value = none3.value;  
  codeO12.value = none3.value;
  codeO13.value = none3.value;  
  codeO14.value = none3.value;  
  codeO15.value = none3.value;
}
 </script>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
