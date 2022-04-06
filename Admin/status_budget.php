<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'update_prj_status.php'; ?>

   <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
      List of Budget
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Budget</li>
         </ol>
         </div>
    </section>

    <!-- Main content -->
      <section class="content">
      
          
        
      <?php echo $alert_msg ?>

      <div class="row">
              <div class="col-md-12"> 
          <div class="card card-info">
          
              <form role="form" enctype="multipart/form-data" method="post" action="<?php htmlspecialchars("PHP_SELF"); ?>">

  <?php if ($PrjSts=='Close') {?>

    <div class="alert alert-danger alert-dismissible"><i class="icon fa fa-lock"></i>Budget Close</div>
     <input type="hidden"  id="" name="" value="<?php echo $code?>" class="form-control">
             <input type="hidden"  id=""  value="<?php echo  $allpro?>" name="objid" class="form-control">
                <input type="text" readonly id="" value="<?php echo "Project Name:"." ".$NameProj?>" class="form-control">
                <input type="text"  id="" name="" value="<?php echo 'Year:'." ".$year?>" class="form-control" readonly>
                <input type="text"  id="" name="" value="<?php echo "Charges:"." ". $prj_sts_id?>"  class="form-control" readonly>
              </div>


     <div class="box-footer" align="left">
                    <a href="add_project.php" class="btn btn-default float-left mb-2"><i class="fa fa-arrow-left"></i>  Back</a></div>
         
              <button type="submit" disabled class="btn btn-success btn-l float-right" name="add" value="save" ><i class="fa fa-check"></i> Update</button> </div>

     <?php }elseif($PrjSts=='Open') {?> 
 
             <input type="hidden"  id="" name="" value="<?php echo $code?>" class="form-control">
             <input type="hidden"  id=""  value="<?php echo  $allpro?>" name="objid" class="form-control">
                <input type="text" readonly id="" value="<?php echo "Project Name:"." ".$NameProj?>" class="form-control">
                <input type="text"  id="" name="" value="<?php echo 'Year:'." ".$year?>" class="form-control" readonly>
                <input type="text"  id="" name="" value="<?php echo "Charges:"." ". $prj_sts_id?>"  class="form-control" readonly>

           

 <?php if ($PrjSts=='Open') {?> 
                <select class="form-control custom-select" name="status" style="background-color: lightgreen; border-color: red;" name="job_schedules">
                  <option selected><?php echo $PrjSts?></option>
                  <option>Open</option>
                  <option>Close</option>
                </select>
    <?php }elseif($PrjSts<>'Open') {?> 
     
              <?php }?> </div>



              <div class="box-footer" align="left">
                    <a href="add_project.php" class="btn btn-default float-left mb-2"><i class="fa fa-arrow-left"></i>  Back</a></div>
         
              <button type="submit" <?php echo $btnStatus?> class="btn btn-success btn-l float-right" name="add" value="save" ><i class="fa fa-check"></i> Update</button> 
     
              <?php }?> </div> 
      </form>
</section>
              <hr>

                 <div class="card card-outline card-info">
            <div class="card-header">

            <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">
             
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Project Name.." title="Type in a name" style="                 background-position: 10px 10px;
                  background-repeat: no-repeat;
                  width: 100%;
                  font-size: 16px;
                  padding: 12px 20px 12px 40px;
                  border: 1px solid #ddd;
                  margin-bottom: 12px;"> 
                   <div class="card-body table-responsive p-0" style="height: 500px;">
                  <table id="user" class="table table-bordered table-striped table-hover" cellspacing="1" cellpadding="8"  style="background-color: #f1f1f1;">

                   <thead style="position: relative;">                   
                      <tr style="font-size: 12px; background-color: hsla(89, 43%, 51%, 0.3)">
                      <th width="15%" style="text-align:center;">Code</th>
                      <th width="30%"style="text-align:center;background-color: hsla(99, 43%, 51%, 0.3)">Project Name</th>
                      <th width="15%"style="text-align:center;background-color: hsla(99, 43%, 51%, 0.3)">Charges</th>
                      
                       <th  style="text-align:center; background-color: hsla(99, 43%, 51%, 0.3)">Previous Balance</th>
                       <th  style="text-align:center;">Supplemental Budget</th>
                      <th  style="text-align:center; background-color: hsla(99, 43%, 51%, 0.3)">Available Balance</th>
                  
                    </tr>

                    </tr>
                  </thead>
                  <tbody>
                     <?php while ($get_project = $get_allproj_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                      <?php if ($get_project['obj_id']==$allpro) {?> 
                    <td style="text-align:center;"><?php echo $get_project['BudgetNo'];?></td>

                   <td> <strong><?php echo $get_project['ProjectName'];?></strong></td>
                   <td> <strong><?php echo $get_project['Charges'];?></strong></td>
                   
                     <td style="text-align:right;"><b><?php echo "P"." ".number_format($get_project['Balance1'],2);?></b></td>
                      <td style="text-align:right;"><?php echo  "P"." ".number_format($get_project['SupplementedAmount'], 2);?></td>
                      <td style="text-align:right;"><b><?php echo "P"." ".number_format($get_project['SupplementedAmount']+$get_project['Balance1'],2);?></b></td>
                 

                          </tr>
                      <div class="form-group">
                   <?php } ?>  <?php } ?>
                  </tbody>
                </table>
                
              </div>
        

             <!-- /.box-body -->


                          
            </form>
       </section>
    <!-- /.content -->
</div>
</div>
</div>   
 <?php include 'includes/footer.php'; ?>
 <!-- Content-Wrapper End -->
</div>   
   <!-------------------- modals here --------------------------------->

<div id="myModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content ">
    <div class="modal-header bg-primary">
              <h3><b> <i class="fa fa-plus"> New Budget </i></b></h3>
               <span class="close">&times;</span>
           
        </div>
     <form class="form-horizontal" method="POST" action="insert_project.php">

                <div class="modal-body">
                   <input type="hidden"  id="code" name="projectcode" value="<?php echo $db_code?>" class="form-control">
                    <input type="hidden"  id="abbre" name="projectabbre" value="<?php echo $db_abbre?>" class="form-control">
                    <input type="text"  id="department" name="projectdept" value="<?php echo $db_department?>" class="form-control">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group"> 
                    <label> Budget No. </label>
                    <input type="text"  id="budgetno" name="budgetno" readonly value="<?php echo $count_budgetno1?>" class="form-control">
                  </div>
                </div>

                   <div class="col-sm-6">
                  <div class="form-group"> 
                    <label> Year: </label>
                    <input type="text"  id="year" name="projectyear" value="<?php echo date('Y')?>" class="form-control">
                  </div>
                   </div>
                </div>

                 <div class="row">
                <div class="col-sm-12">
                  <div class="form-group"> 
                    <label> Budget Title: </label>
                    <input type="text" id="" name="projectname" class="form-control">
                  </div>
                   </div>
                </div>

                   <div class="row">
                <div class="col-sm-12">
                   <div class="form-group"> 
                    <label> Charges Code: </label>
                    <input type="text" id="projectcharges" name="projectcharges" class="form-control">
                  </div>
                   </div>
                </div>

                   <div class="row">
                <div class="col-sm-6">
                  <div class="form-group"> 
                    <label>Amount Budget</label>
                    <input type="text" id="projectbudget" name="projectbudget" class="form-control" >
                  </div>
                   </div>

                <div class="col-sm-6">
                  <div class="form-group"> 
                    <label> Status</label>
                    <select class="form-control custom-select" id="joName" name="projectstatus">
                  <option selected>Please select....</option>
                  <option>Open</option> 
                  <option>Close</option>
                </select>
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


 <!-------------------- modals here --------------------------------->

<div id="myModal2" class="modal">
      <div class="modal-dialog">
        <div class="modal-content ">
    <div class="modal-header bg-primary">
              <h3><b> <i class="fa fa-plus"> Supplemental Budget </i></b></h3>
               <span2 class="close2">&times;</span2>
           
        </div>
     <form class="form-horizontal" method="POST" action="add_supplemental.php">

                <div class="modal-body">
                   <input type="hidden"  id="code" name="projcode" value="<?php echo $db_code?>" class="form-control">
                    <input type="hidden"  id="abbre" name="projabbre" value="<?php echo $db_abbre?>" class="form-control">
                    <input type="hidden"  id="department" name="projdepartment" value="<?php echo $db_department?>" class="form-control"> 
                    <input type="hidden" id="prjid" name="projobjid" class="form-control" >
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group"> 
                    <label> Budget No. </label>
                    <input type="text"  id="budgetno" name="budno" readonly value="<?php echo $count_budgetno1?>" class="form-control">
                  </div>
                </div>

                   <div class="col-sm-6">
                  <div class="form-group"> 
                    <label> Year: </label>
                    <input type="text"  id="year" name="projyear" value="<?php echo date('Y')?>" class="form-control">
                  </div>
                   </div>
                </div>

                 <div class="row">
                <div class="col-sm-12">
                  <div class="form-group"> 
                    <label> Budget Title: </label>
                  <select class="form-control custom-select" id="prjName" name="projname" onclick="mysync()">
                  <option selected>Please select....</option>
                  <?php while ($get_name =$get_proj_data->fetch(PDO::FETCH_ASSOC)) { ?>
<?php if ($get_name['code']==$db_code && $get_name['status']=='Open') {?>
                    <option value="<?php echo
   $get_name['ProjectName']; ?>"><?php echo  $get_name['ProjectName']?></option> <?php } ?><?php } ?>
                </select>
                </div>

                   <div class="row">
                <div class="col-sm-12">
                   <div class="form-group"> 
                    <label> Charges Code: </label>
                    <input type="text" id="charges" readonly name="projcharges" class="form-control">
                  </div>
                   </div>
                </div>

                   <div class="row">
                <div class="col-sm-6">
                  <div class="form-group"> 
                    <label> Supplemental Amount </label>
                    <input type="text" id="budget" style="text-align: right;" onchange="sync()" name="projbudget" class="form-control" >
                  </div>
                   </div>

                   <input type="hidden" id="add" name="projadd" style="text-align: right;" name="" class="form-control" >

                    <div class="col-sm-6">
                  <div class="form-group"> 
                    <label> Outstanding Balance</label>
                    <input type="text" id="balance1" readonly style="text-align: right;" class="form-control" >
                     <input type="hidden" id="balance"  name="" class="form-control" >
                   </div>
                </div>
                </div>
                    <br>

                    <div class="modal-footer">
                     <button type="submit" class="btn btn-success btn-l float-right" name="add" value="save" ><i class="fa fa-check"></i> Proceed</button>

                     </div>
              </form>
                        
    </div>
  </div>

</div>
</div>







 <?php include 'includes/scripts.php'; ?>
 
<script>

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

   function sync()
{
  var add = document.getElementById('add');
  var budget = document.getElementById('budget');
  var balance = document.getElementById('balance');
  add.value = (balance.value*1)+(budget.value*1);

}

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
  if (event.target == modal2) {
    modal2.style.display = "none";
}
}
</script>


 <script>
   $('#projectname').on('click',function(){
             var type = $(this).val();
            //  $('#doc_no').val(type);
      
         
            $.ajax({
              type:'POST',
              data:{type:type},
              url:'orderbudgetno.php',
               success:function(data){
             $('#budgetno').val(data);
               
            }
        });
  }); 

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
                $('#prjid').val(result.objid);
                 $('#balance').val(result.balance);
                 $('#balance1').val(result.balance1);
               
            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });


    }); 
</script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("user");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
      td = tr[i].getElementsByTagName("td")[1];
    
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