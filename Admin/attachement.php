<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>



  

  <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
   Monthly Deduction
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
            
             </div>
           <i style="font-size:17px"><i style="color:red" align="center">*Laborers are directed to proceed to jobsite namely:</i></i>  
             <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">

              <div class="jumbotron">
                <div class="form-group"> 
                     <div class="row">
                      <div class="col-sm-12">
              <label style="text-align:right; font-size: 30px;" name="job_no" ><i>Job Order #:</i> <b class="mb-0 font-weight-bold bg-yellow"><?php echo $JobOrder;?></b></label>
<input type="hidden" id="news" name="new_number"  class="form-control" value="<?php echo $countjo;?>" required>

              <input type="hidden" id="none" class="form-control" value="<?php echo $details_no;?>"  required>

              <input type="hidden" id="nonen" class="form-control" value="<?php echo $PayrollNo;?>"  required>

              <hr>
           
               <div class="form-group"> 
                    <div class="col-sm-4">
                      <h3>List of Employees</h3>
      <h6> <i> Attached Approved Job Order:</i> <button type="button" href="#myModal" id="myBtn"  <?php echo $btnAdd;?> class="btn btn-primary"><i class="fa fa-paperclip"></i> Attached File</button></h3>
       </div>
       </div>   

      
       
              
                    <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">
                    
               
              <div class="card-body"style="overflow-x:auto;">
                <table id="user" class="table" cellspacing="1" cellpadding="8"  border="3px white;" border-collapse="collapse;"
  border-spacing="0;" width= "100%;">
                  <thead>
                    <tr bgcolor="lightgreen">
                      <th width= "5%" style="text-align:center;">No.</th>
                     <th width= "17%" style="text-align:center;">Name</th>
                       <th width= "17%" style="text-align:center;">Period</th>
                       <th width= "28%" style="text-align:center;">Time</th>
                       <th width= "5%" style="text-align:center;">Rate</th>
                       
                     
                    </tr>
                  </thead>
                  <tbody>
                          <?php if($count>0){
            $n  =   1; while ($sched_data= $get_schedule_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                    
                    <?php if ($sched_data['JobOrderNo']==$JobOrder) {
                     ?> 
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
                  <td style="text-align:left; font-size:13px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
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

      <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
                    <td style="text-align:left; font-size:13px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
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
                      <td style="text-align:left; font-size:13px"><?php echo $sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years'];?> 
                    </td>
                     <td style="text-align:left; font-size:13px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                     <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?></td>

                      <?php } ?> 

 


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
                      <a href=""  style="font-size: 13px;">Edit description</a>

               <form class="form-horizontal" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">

                <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>No. of Laborers</label>
                <?php if ($totalcount==$totalcount) {
                     ?> 
                        <input type="text" id="laborers" class="form-control" name="jo_laborers" value="<?php echo $laborers1;?>" disabled>
                   <?php }elseif($totalcount!=$laborers1) {?>
                     <input type="text" id="laborers" class="form-control" name="jo_laborers" value="<?php echo $totalcount;?>" disabled>
                      <?php } ?>  
                      </div>
                    </div>
                  
  
                     


                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Total Amount</label>

                        <?php if ($finalcount==$finalcount) {
                     ?> 
                      <input type="text" id="amount" class="form-control" value="<?php echo number_format($amount1,2);?>"  disabled>
                      <?php }elseif($finalcount!=$amount1) {?>
                        <input type="text" id="amount" class="form-control" value="<?php echo number_format($finalcount_1,2);?>"  required>
                          <?php } ?>   
                      </div>
                      </div>
                    

                    
                    <div class="col-sm-5">
                      <div class="form-group"> 
                       
           <input type="hidden" id="amount" class="form-control" name="job_date" value="<?php echo $scheds?>"  disabled>
       
                      </div>
                      </div>  
                      </div>
          

                   <input type="hidden" id="amount" class="form-control" name="job_date" value="<?php echo date("F d,Y (h:i:s A) l");?>"  required>

                      <input type="hidden" id="amount" class="form-control" name="jo_amount" value="<?php echo $finalcount;?>"  required>

                      <input type="hidden" id="amount" class="form-control" name="job_charge" value="<?php echo $charges;?>"  required>

                     

                    <label style="text-align:right; font-size: 18px;"><i>Available Balance:</i> <b class="mb-0 font-weight-bold bg-yellow"><?php echo number_format($count_1, 2);?></b></label>

                    <input type="hidden" name="job_no" id="jonum" value="<?php echo $JobNo;?>" class="form-control">  

                     <input type="hidden" id="balance" name="jo_balance" class="form-control" value="<?php echo $count-$finalcount;?>" name="jo_bal" required>

                      <input type="hidden" id="prevbalance" name="job_prev" class="form-control" value="<?php echo $count;?>" name="jo_bal" required>
                     
                    <hr>
                     <div class="box-footer" align="right">

                       <a href="list_jo.php" class="btn btn-default"><b>Back</b></a>
                     
                     

                    
                     
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
   <div id="myModal2" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-sm">

        <div class="modal-content ">
    
    <div class="modal-header bg-danger">
              <h3><i class="fa fa-remove"></i> Confirm Delete</h3>
              <span class="close2">&times;</span>
           
        </div>
     <form class="form-horizontal" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">

               
                    <div class="modal-body">  
                  <div class="box-body">
                    <div class="form-group">
                    <label>Delete Record?</label>
                    <input type="text" name="id" id="id" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">

                  <button type="button" class="btn btn-default bg-olive" data-dismiss="modal2">No</button>
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



<!-------------------- modals here --------------------------------->

<div id="myModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content ">
    <div class="modal-header bg-primary">
              <h3><b> <i class="fa fa-paperclip"></i> Attachment</b></h3>
               <span class="close">&times;</span>
           
        </div>
     <form enctype="multipart/form-data" method="post" action="insert_pdf.php">

       
        <input type="hidden"  value="<?php echo $JobOrder?>" readonly class="form-control">

              <div class="modal-body">
                  <div class="row">
                  <div class="col-md-6"> 
                  <div class="form-group"> 
                    <label> Job Order No. </label>
                    <input type="text"  value="<?php echo $JobOrder?>" name="joborno" readonly class="form-control">
                    </div>
                    </div>

            <div class="col-md-6"> 
                  <div class="form-group"> 
                <label> Upload File </label>
                          <input class="text-sm" name="pdfFile" type ="file" id="fileToUpload" onchange="one()">

             
                          <p class="help-block">Upload .pdf file only.</p>
             <br>
                    </div>
                    </div>
                </div>
                    <br>

                    <div class="modal-footer">
                     <button type="submit" class="btn btn-success btn-l float-right" name="insert" value="save" ><i class="fa fa-check"></i> Proceed</button>

                     </div>
              </form>
                        
    </div>
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
                $('#code').val(result.data);
                $('#jo_last').val(result.last);
                $('#jo_middle').val(result.middle);
                 $('#jo_photo').val(result.photo);
                                               
            
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



function sync()
{
  var nonen = document.getElementById('nonen');
  var jonumber1 = document.getElementById('jonumber1');
  var laborers = document.getElementById('laboreres');

  jonumber1.value = nonen.value;
  laborers.disabled='false';
   
  }

  function mysync()
{
  var news = document.getElementById('news');
  var new1 = document.getElementById('new1');
  
  new1.value = news.value;
 
   
  }

  function one()
{
  var fileToUpload = document.getElementById('fileToUpload');
  var file = document.getElementById('file');
  
  file.value = fileToUpload.value;
 
   
  }


 function copy()
{
  var nonen = document.getElementById('nonen');
  var payrollno = document.getElementById('payrollno');
  
 payrollno.value = nonen.value;
 
   
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
</script>

<script>
function loadImage(){
    var input = document.getElementById("fileToUpload");
var fReader = new FileReader();
fReader.readAsDataURL(input.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById("image");
    img.src = event.target.result;
}
}
</script> 

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


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

 $('#payrollno').on('click', function() {
        var joName = this.value;
        $.ajax({
            type:"POST",
            url:'fetch_sss.php',
            data:{jo_code:joName},
         
            success:function(response){
              var result = jQuery.parseJSON(response);
                console.log('response from server',result);
                $('#payroll').val(result.data);
                                                                
            
          },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });


    }); 


</script>
 
</body>
</html>
