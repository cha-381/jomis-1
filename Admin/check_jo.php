<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/update_check_jo.php'; ?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-10">
    <div class="col-sm-6">
    <h1 class="m=o text-dark">
   Checking
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Record</li>
         </ol>
         </div>
       </section>

  <section class="content">
 <div class="container-fluid">
            <?php echo $alert_msg?>
        <div class="row">
   
      <div class="col-md-4">
     <form role="form" method="post" action="<?php htmlspecialchars("PHP_SELF"); ?>">            

            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
 
 <?php if ($get_empphoto=='') {?>
      <img class="profile-user-img img-fluid img-circle" style="background-color:red"
                       src="../dist/photo/no-photo-icon.png"
                       alt="User profile picture">

<?php }elseif($get_empphoto<>'') {?>
      <img class="profile-user-img img-fluid img-circle" style="background-color:red"
                       src="<?php echo (!empty([$get_emp_photo])) ? '../dist/photo/'.$get_emp_photo : '../dist/photo/no-photo-icon.png'; ?>"
                       alt="User profile picture">

<?php } ?>


                        </div>
 <input type="hidden" class="form-control"  name="id" value="<?php echo $schedule_id;?>">
 <input type="hidden" class="form-control"  name="id_no" value="<?php echo $get_id_no;?>">
  <?php if ($get_middlen=='' && $get_firstn=='' && $get_lastn=='') {?>
     <input type="hidden" class="form-control" name="Status" readonly="true" value="<?php echo $get_emp_id;?>" >

                <h3 class="profile-username text-center"></h3>

                <p class="text-muted text-center"></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>ID</b> <a class="float-right"></a>
                  </li>
                </ul>
                <a class="btn btn-primary btn-block disabled" id='profile_edit'><b>Edit Profile</b></a>
<?php }elseif($get_middlen!='' && $get_firstn!='' && $get_lastn!='' && $get_extn=='') {?>
   <input type="hidden" class="form-control" name="Status" readonly="true" value="<?php echo $get_emp_id;?>" >

                <h3 class="profile-username text-center" style="font-size: 20px"><?php echo ucwords(strtoupper($get_firstn . " " . $get_middlen[0] ."." . " " . $get_lastn)) ?></h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>ID</b> <a class="float-right"><?php echo $get_sched_code?></a>
                  </li>
                </ul>
                <div class="row">
              <div class="col-sm-12">
                      <div class="input-group">                     
                      <select class="form-control custom-select" name="Remarks">
                  <option selected disabled><?php echo $get_remark?></option>
                  <option>Checked</option> 
                  <option>Pending</option>
                </select>
                      </div>
                      </div> 
                    </div>
                    <hr>
                <button type="submit" class="btn btn-info btn-block" <?php echo $btnStatus;?> name="update" value="update"><b>Update</b></button>
                  <a href="check2.php?objid=<?php echo $get_no;?>" class="btn btn-default btn-block" id='profile_edit'><b>Back</b></a>
 <?php }elseif($get_middlen!='' && $get_firstn!='' && $get_lastn!='' && $get_extn!='') {?>

                <h3 class="profile-username text-center" style="font-size: 20px"><?php echo ucwords(strtoupper($get_firstn . " " . $get_middlen[0] ."." . " " . $get_lastn.","." ".$get_extn))?></h3>


                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>ID</b> <a class="float-right"><?php echo $get_sched_code?></a>
                  </li>
                </ul>
                  <div class="row">
              <div class="col-sm-12">
                      <div class="input-group">                     
                      <select class="form-control custom-select" name="Remarks">
                  <option selected disabled><?php echo $get_remark?></option>
                  <option>Checked</option> 
                  <option>Pending</option>
                </select>
                      </div>
                      </div> 
                    </div>
                    <hr>
                <button type="submit" class="btn btn-info btn-block" <?php echo $btnStatus;?> name="update" value="update"><b>Update</b></button>
                  <a href="check2.php?objid=<?php echo $get_no;?>" class="btn btn-default btn-block" id='profile_edit'><b>Back</b></a>
                </form>
  <?php } ?>

             

              </div>
              <!-- /.card-body -->
           
</div>
 



</div>

    <div class="col-md-8">
            <div class="card card-outline card-primary">
              <div class="card-header p-2" >
        
              </div><!-- /.card-header -->

 
              <div class="card-body">
                <div class="tab-content" >
                    <!-- Post -->
        <i style="font-size:14px"><i style="color:red" align="center">*PROPOSED SCHEDULED:</i></i>  
                  
          <div class="col-md-12">
          <div class="card card-info">
         
                   <div class="card-body table-responsive p-0" style="height: 150px;">
                  <table id="user" class="table table-bordered table-striped table-hover" cellspacing="1" cellpadding="8"  style="background-color: #f1f1f1;">

                  <thead style="position: relative;">
                    <tr bgcolor="#d6b380" >
                      <th style="text-align:center;" width="5%">No.</th>
                       <th style="text-align:center;" width="22%">PERIOD COVERED</th>
                         <th style="text-align:center;" width="48%">TIME</th>
                       <th style="text-align:center;" width="5%">RATE</th>
                       <th style="text-align:center;" width="10%">OFFICE</th>
            
                    </tr>
                  </thead>

                  <tbody>
                                  <?php $n  =   1;  while ($sched_data= $get_schedules_data-> fetch(PDO::FETCH_ASSOC)) { ?>

                  <tr>

            <?php if ($sched_data['id']==$schedule_id){?>
               <td><?php echo $n++; ?></td>
           

    <?php if ($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?> 
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                  <br>
                      <?php echo $sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years'];?></td>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
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

      <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
                    <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?></td>
                    <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                  <br>
                       <?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                    </td>
                    <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?>
                    <br>
                      <?php echo number_format($sched_data['Rate1'],2);?>
                    </td>

       <?php }elseif($sched_data['Period']=="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                  <br>
                      <?php echo $sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years'];?></td>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                  <br>
                        <?php echo $sched_data['Time3']." "."(".$sched_data['Schedule2'].")";?>
                  </td>
                   <td style="text-align:right"><?php echo number_format($sched_data['Rate1'],2);?>
                   <br>
                      <?php echo number_format($sched_data['Rate2'],2);?>
                   </td>

      <?php }elseif($sched_data['Period']=="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                 </td>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                  </td>
                   <td style="text-align:right"><?php echo number_format($sched_data['Rate1'],2);?>
                   </td>


       <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']=="" && $sched_data['Month2']=="") {?>
                      <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                    </td>
                     <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                     <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?></td>
                      <?php } ?> 
   <td style="text-align:left; font-size:14px; text-align: center"><?php echo $sched_data['abbre'];?></td>

                          </tr>
                                   </tr>
                                   <?php } ?>
                      
        </tr>
        <?php } ?>
                  </tbody>
                </table>
              </div>
          </div>
        
        </div>

    <!-- /.post -->
                    </div>   
 <!-- /.tab-pane -->


         <div class="col-md-12">
              <div class="card-header p-2" >
        
              </div><!-- /.card-header -->

 
              <div class="card-body">
                <div class="tab-content" >
             
                    <!-- Post -->
        <i style="font-size:14px"><i style="color:red" align="center">*APPROVED SCHEDULES:</i></i>  

          <div class="col-md-12">
          <div class="card card-info">
                   <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table id="user" class="table table-bordered table-striped table-hover" cellspacing="1" cellpadding="8"  style="background-color: #f1f1f1;">

                  <thead style="position: relative;">
                    <tr bgcolor="#80ced6" >
                      <th style="text-align:center;" width="5%">No.</th>
                       <th style="text-align:center;" width="22%">PERIOD COVERED</th>
                         <th style="text-align:center;" width="48%">TIME</th>
                       <th style="text-align:center;" width="5%">RATE</th>
                       <th style="text-align:center;" width="10%">OFFICE</th>
            
                    </tr>
                  </thead>

                  <tbody>
                                  <?php $n  =   1;  while ($sched_data= $get_schedule_data-> fetch(PDO::FETCH_ASSOC)) { ?>

                  <tr>

            <?php if ($sched_data['ID_sched']==$get_id_sched && $sched_data['Period']==$get_month1 OR $sched_data['Month1']==$get_month1 OR $sched_data['Month2']==$get_month1){?>
               <td><?php echo $n++; ?></td>
           

    <?php if ($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?> 
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                  <br>
                      <?php echo $sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years'];?></td>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
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

      <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
                    <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?></td>
                    <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                  <br>
                       <?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                    </td>
                    <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?>
                    <br>
                      <?php echo number_format($sched_data['Rate1'],2);?>
                    </td>

       <?php }elseif($sched_data['Period']=="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                  <br>
                      <?php echo $sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years'];?></td>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                  <br>
                        <?php echo $sched_data['Time3']." "."(".$sched_data['Schedule2'].")";?>
                  </td>
                   <td style="text-align:right"><?php echo number_format($sched_data['Rate1'],2);?>
                   <br>
                      <?php echo number_format($sched_data['Rate2'],2);?>
                   </td>

      <?php }elseif($sched_data['Period']=="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                 </td>
                  <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                  </td>
                   <td style="text-align:right"><?php echo number_format($sched_data['Rate1'],2);?>
                   </td>


       <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']=="" && $sched_data['Month2']=="") {?>
                      <td style="text-align:left; font-size:14px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                    </td>
                     <td style="text-align:left; font-size:14px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                     <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?></td>
                      <?php } ?> 
   <td style="text-align:left; font-size:14px; text-align: center"><?php echo $sched_data['abbre'];?></td>

                          </tr>
                                   </tr>
                                   <?php } ?>
                      
        </tr>
        <?php } ?>
                  </tbody>
                </table>
              </div>
          </div>
        
        </div>

    <!-- /.post -->
                    </div>   
 <!-- /.tab-pane -->

             


      
              </div>
            </div>
          </div>
           </form>    
    </section>
     <!-- Main Content End --> 
   </div>
   <?php include 'includes/footer.php'; ?> 
    
   </div> 
   <!-- Content-Wrapper End -->

<!-------------------- modals here --------------------------------->

<div id="myModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content ">
    
    <div class="modal-header bg-warning">
              <h5>Covered Period</h5>
               <span class="close">&times;</span>
           
        </div>
     <form class="form-horizontal" method="Post" action="insert_cut.php">

               
              <div class="modal-body">
                  <div class="form-group"> 
                    <input type="hidden"  id="code" name="ID" class="form-control" value="<?php echo $get_emp_id;?>" >
                  </div>
          
            
                   <div class="row">
                    <div class="col-sm-6">
                   <div class="input-group date mb-3">
                <div class="input-group date mb-3" data-provide="datepicker">
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text"  class="form-control" name="periodStart" placeholder="-From-" value="Start">
                 </div>
                    </div>
                  </div>
                            

                    <div class="col-sm-6">
                   <div class="input-group date mb-3">
                <div class="input-group date mb-3" data-provide="datepicker">
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text"  class="form-control" name="periodEnd" placeholder="-To-" value="End">
                      </div>
                    </div>
                  </div>
                  </div> 
               
                                     
               <div class="modal-footer">         
                      <button class="button" name="add"><span> Proceed </i></span></button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
                
                


 <?php include 'includes/scripts.php'; ?>
 
<script>
   // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

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
</script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("user");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
      td = tr[i].getElementsByTagName("td")[2];
    
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

 </body>
</html>



         