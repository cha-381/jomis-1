<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
 <?php include 'includes/navbar.php'; ?>
 <?php include 'includes/sidebar.php'; ?>
    
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
      <label style="text-align:right; font-size: 30px;" name="job_no" ><i>Job Order #:</i> <b class="mb-0 font-weight-bold bg-yellow"><?php echo  $JobOrder;?></b></label>
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

  <div class="row">
        <div class="col-md-3">
            <a href="../plugins/TCPDF/User/daily_time_record.php?JobOrderNo=<?php echo $JobOrder?>"  id="btnn" class="btn btn-primary btn-block mb-3"><i class="icon fa fa-plus"></i> Print</a>
          </div> 
        </div>
         <div class="col-md-12">
           <div class="card card-secondary">
             <div class="card-header with-border">
               <h3 class="card-title">Daily Time Record</h3>
            </div>
            <?php echo $alert_msg?>
      
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF");?>">
              <div class="card-body">
                

 

                <table id="users2" class="table table-bordered table-striped">
                  <thead>
                    <tr bgcolor="lightgreen">
                      <th width= "3%" style="text-align:center;">No</th>
                      <th width="25%" style="text-align:center;">Employee</th>
                 
                     <th width= "10%" style="text-align:center;">Cntrl #</th>
                    
                       <th width= "1%" style="text-align:center;">1</th>
                       <th width= "1%" style="text-align:center;">2</th>
                       <th width= "1%" style="text-align:center;">3</th>
                       <th width= "1%" style="text-align:center;">4</th>
                       <th width= "1%" style="text-align:center;">5</th>
                       <th width= "1%" style="text-align:center;">6</th>
                       <th width= "1%" style="text-align:center;">7</th>
                       <th width= "1%" style="text-align:center;">8</th>
                        <th width= "1%" style="text-align:center;">9</th>
                       <th width= "1%" style="text-align:center;">10</th>
                       <th width= "1%" style="text-align:center;">11</th>
                       <th width= "1%" style="text-align:center;">12</th>
                       <th width= "1%" style="text-align:center;">13</th>
                        <th width= "1%" style="text-align:center;">14</th>
                       <th width= "1%" style="text-align:center;">15</th>
                        <th width= "5%" style="text-align:center;">Total</th>
                       <th width= "15%" style="text-align:center;">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php if($count>0){
            $n  =   1; while ($sched_data= $get_schedule_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                    
                    <?php if ($sched_data['JobOrderNo']==$JobOrder) {
                     ?> 
                     <tr>
                    <td rowspan="2"><?php echo $n++; ?></td>
                    <td rowspan="2"><?php echo $sched_data['FName']. " " . $sched_data['MName'][0] ."." . " " . $sched_data['LName'];?></td>
                   
                    <td rowspan="2" align="Center"><a href=""><?php echo $sched_data['EmpCode']; ?></a></td>
                    
                    <td align="Center"><?php echo $sched_data['One1']; ?></td>
                   <td align="Center"><?php echo $sched_data['Two2']; ?></td>
                    <td align="Center"><?php echo $sched_data['Three3']; ?></td>
                    <td align="Center"><?php echo $sched_data['Four4']; ?></td>
                    <td align="Center"><?php echo $sched_data['Five5']; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                      <td rowspan="2" align="center"></td> 
                        <td rowspan="2" align="center">
                           
                          
                              <a class="btn btn-outline-info btn-xs" href="sample_daily.php?id=<?php echo $sched_data['id'];?>" data-toggle="tooltip" title="Daily Time Record"><img src="../dist/img/daily_time.png" alt="" class="brand-image img-transparent" width="30" height="30" style="opacity: ">
                          </a>    

                            <a class="btn btn-outline-warning btn-xs" href="overtime.php?id=<?php echo $sched_data['id'];?>" data-toggle="tooltip" title="Overtime"><img src="../dist/img/overtime.png" alt="" class="brand-image img-transparent" width="30" height="30" style="opacity: ">
                          </a>    
                        </td> 
                       
                      </tr>

                      <tr>
                         <td align="Center"><?php echo $sched_data['O1']; ?></td>
                   <td align="Center"><?php echo $sched_data['O2']; ?></td>
                    <td align="Center"><?php echo $sched_data['O3']; ?></td>
                    <td align="Center"><?php echo $sched_data['O4']; ?></td>
                    <td align="Center"><?php echo $sched_data['O5']; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                      </tr>

     
                      <div class="form-group">      
            
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
              <hr>
              <!-- /.card-body -->
               <div class="box-footer" align="left">

                       <a href="payroll.php" style="color:black; width:23%;"class="btn btn-default"><b>Back</b></a>
                     
                      
                     </div>
            </form>
          </div>
            </div>
          <!-- /.card -->
        </div>
        <div class="col-md-1"></div>
      </div>

   
    <!-- /.content -->


 <!-------------------- modals here --------------------------------->
  <div id="delete" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-sm">

        <div class="modal-content ">
    
    <div class="modal-header bg-danger">
              <h3><i class="fa fa-remove"></i> Confirm Delete</h3>
           
           
        </div>
     <form class="form-horizontal" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">

               
                    <div class="modal-body">  
                  <div class="box-body">
                    <div class="form-group">
                    <label>Delete Record?</label>
                    <input type="hidden" name="id" id="id" class="form-control">
                    <input type="text"  id="edit_committee" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">

                  <button type="button" class="btn btn-default bg-olive" data-dismiss="modal">No</button>
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

         <!-- Edit -->
<div id="edit" class="modal">
      <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header card-outline card-success">
              <h4 class="modal-title"><b>Daily Time</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="update_daily.php">
                <input type="hidden" class="id" name="id">
                <input type="hidden" class="id2" name="id_no">
                
                <div class="form-group"> 
                     <div class="row">
                      <div class="col-sm-8">
                    <label> Name: </label>
                    <div class="col-md-10">
                       <input disabled type="text" class="form-control" id="edit_committee1" >
                    </div>
                </div>

                  <div class="col-sm-4">
                      <div class="form-group">
                        <label>Code</label>
                        <input type="text"  id="code" name="EmpCode" class="form-control" readonly></div>
                      </div>
          </div> <hr>
          <input type="hidden" value="<?php echo "X"?>" class="form-control" id="none">
          <input type="hidden" value="<?php echo ""?>" class="form-control" id="none1">
 <div class="row">
 <div class="col-sm-2">
 <div class="form-group">
<button type="button" class="btn btn-info btn-sm pull-left" onclick="sync()"></i>Select All</button> </div> </div>
<div class="col-sm-2">
 <div class="form-group">
<button type="button" class="btn btn-default btn-sm pull-left" onclick="mysync()"></i>Unmark All</button>
<br></div></div></div>
                   <div class="row">
              <div class="col-sm-2">
                      <div class="form-group">
                        <label>1</label>
                        <input style="text-align:center; color:blue;" type="text"  id="code1" name="One1" class="form-control">
                      </div>
                </div>
                  
            
                    <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>2</label>
                    <input type="text" style="text-align:center; color:blue;" id="code2" name="Two2" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>3</label>
                 <input type="text" style="text-align:center; color:blue;" id="code3" name="Three3" class="form-control">
                  </div>
                </div>


                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>4</label>
                    <input type="text" style="text-align:center; color:blue;" id="code4" name="Four4" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>5</label>
                 <input type="text" style="text-align:center; color:blue;" id="code5" name="Five5" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>6</label>
                    <input type="text" style="text-align:center; color:blue;" id="code6" name="" class="form-control">
                  </div>
                </div>
                </div>
              
              <div class="row">
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>7</label>
                 <input type="text" style="text-align:center; color:blue;" id="code7" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>8</label>
                    <input type="text" style="text-align:center; color:blue;" id="code8" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>9</label>
                 <input type="text" style="text-align:center; color:blue;" id="code9" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>10</label>
                    <input type="text" style="text-align:center; color:blue;" id="code10" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>11</label>
                 <input type="text" style="text-align:center; color:blue;" id="code11" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>12</label>
                    <input type="text" style="text-align:center; color:blue;" id="code12" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>13</label>
                 <input type="text" style="text-align:center; color:blue;" id="code13" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>14</label>
                    <input type="text" style="text-align:center; color:blue;" id="code14" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>15</label>
                 <input type="text" style="text-align:center; color:blue;" id="code15" name="" class="form-control">
                  </div>
              </div>

                <div class="col-sm-6">
                    <div class="form-group"> 
                 <label style="text-align:right">Total No. of days</label><b>
                 <input type="text" style="text-align:center; color:blue; background-color: pink" id="codeTotal" name="" class="form-control"></b>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-sm" name="edit"><i class="fa fa-check"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>


  <!-- Overtime -->
<div id="overtime" class="modal">
      <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header card-outline card-warning">
              <h4 class="modal-title"><b>Overtime</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="update_overtime.php">
                <input type="hidden" class="id" name="id">
   
                <div class="form-group"> 
                     <div class="row">
                      <div class="col-sm-8">
                    <label> Name: </label>
                    <div class="col-md-10">
                       <input disabled type="text" class="form-control" id="name2" >
                    </div>
                </div>

                  <div class="col-sm-4">
                      <div class="form-group">
                        <label>Code</label>
                        <input disabled type="text"  id="over_code" name="EmpCode" class="form-control" readonly></div>
                      </div>
          </div> <hr>
          <input type="hidden" value="<?php echo "4/8"?>" class="form-control" id="none2">
          <input type="hidden" value="<?php echo ""?>" class="form-control" id="none3">
 <div class="row">
 <div class="col-sm-3">
 <div class="form-group">
<button type="button" class="btn btn-warning btn-sm pull-left" onclick="sync2()"></i>Select All <i>(4/8)</i></button> </div> </div>
<div class="col-sm-3">
 <div class="form-group">
<button type="button" class="btn btn-default btn-sm pull-left" onclick="mysync2()"></i>Unmark All</button>
<br></div></div></div>
                   <div class="row">
              <div class="col-sm-2">
                      <div class="form-group">
                        <label>1</label>
                        <input style="text-align:center; color:blue;" type="text"  id="codeO1" name="O1" class="form-control">
                      </div>
                </div>
                  
            
                    <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>2</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO2" name="O2" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>3</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO3" name="O3" class="form-control">
                  </div>
                </div>


                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>4</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO4" name="O4" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>5</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO5" name="O5" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>6</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO6" name="" class="form-control">
                  </div>
                </div>
                </div>
              
              <div class="row">
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>7</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO7" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>8</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO8" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>9</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO9" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>10</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO10" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>11</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO11" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>12</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO12" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>13</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO13" name="" class="form-control">
                  </div>
                </div>

                  <div class="col-sm-2">
                      <div class="form-group"> 
                    <label>14</label>
                    <input type="text" style="text-align:center; color:blue;" id="codeO14" name="" class="form-control">
                  </div>
                </div>
              
         
                    <div class="col-sm-2">
                    <div class="form-group"> 
                 <label>15</label>
                 <input type="text" style="text-align:center; color:blue;" id="codeO15" name="" class="form-control">
                  </div>
              </div>

            <div class="col-sm-6">
                    <div class="form-group"> 
                 <label style="text-align:right">Total No. of days</label><b>
                 <input type="text" style="text-align:center; color:blue; background-color: lightgreen" id="codeTotal" name="" class="form-control"></b>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-sm" name="edit"><i class="fa fa-check"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
  </div>
  <?php include 'includes/footer.php'; ?>
 
 </div>
 <!-- Wrapper End -->

 

 <script>
 $(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

 $('.overtime').click(function(e){
    e.preventDefault();
    $('#overtime').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

$('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

 
});

function getRow(id){
  
  $.ajax({
    
    type: 'POST',
    url: 'fetch_employee.php',
    data: {id:id},
    dataType: 'json',
    success: function(data){
      
      $('.id').val(data.id);
      $('#id').val(data.id);
      $('#edit_committee').val(data.name);
       $('#edit_committee1').val(data.name);
        $('#code').val(data.EmpCode);
        $('#id2').val(data.id_no);
       $('#code1').val(data.One1);
      $('#code2').val(data.Two2);
       $('#code3').val(data.Three3);
        $('#code4').val(data.Four4);
         $('#code5').val(data.Five5);

         $('#name2').val(data.name);
         $('#over_code').val(data.EmpCode);
         $('#codeO1').val(data.O1);
       $('#codeO2').val(data.O2);
       $('#codeO3').val(data.O3);
       $('#codeO4').val(data.O4);
       $('#codeO5').val(data.O5);
    }
  });
};
</script>

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
