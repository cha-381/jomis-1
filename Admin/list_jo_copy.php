<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>

   <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
      List of Job Order 
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">List</li>
         </ol>
         </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="name_jo.php"  id="myButton" class="btn btn-primary btn-block mb-3">Create Job Order</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="#myModal" id="myBtn" class="nav-link">
                    <i class="fa fa-clock-o"></i> Time Schedule
                    <span class="badge bg-primary float-right"><?php echo $get_rate1_data->rowCount()?></span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="#myModal" id="myBtn" class="nav-link">
                    <i class="fa fa-money"></i> Rate
                    <span class="badge bg-primary float-right"><?php echo $get_time_data->rowCount()?></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-print"></i> Print
                  </a>
                </li>
                 </ul>
            </div>
            <!-- /.card-body -->
          </div>
          </div>


            <div class="col-md-9">      
            <div class="card card-info">
            
          
            <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">
            	<div class="card-body text-m">
                <table id="users" class="table table-bordered table-striped">
                  <thead>
                   
                      <tr bgcolor="orange">
                      <th width="3%" style="text-align:center;">No</th>
                      <th width="15%" style="text-align:center;">Date Filed</th>
                      <th width="20%" style="text-align:center;">Job Order #</th>
                      <th width="20%" style="text-align:center;">Period Covered</th>
                       <th  style="text-align:center; width:1%"></th>
                      <th width="5%" style="text-align:center;">Amount</th>
                      <th width="15%"style="text-align:center;">Action</th>
                    </tr>

                    </tr>
                  </thead>
                  <tbody>
                  	 <?php while ($get_list = $get_combine3_data-> fetch(PDO::FETCH_ASSOC)) { ?>
              <?php if($get_list['code']==$db_code) { ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $get_list['objid'];?></td>
                     <td style="text-align:left;"><?php echo $get_list['DateJo'];?></td>
                    <td><a href="create_job_order_edit.php?objid=<?php echo
                            $get_list['objid']; ?>"><?php echo $get_list['JobOrderNo'];?></a></td>
                     <td><?php echo $get_list['PeriodCovered'];?></td>
                    <td style="text-align:left;"><?php echo "P"?></td>
                     <td style="text-align:right;"><?php echo $get_list['Amount'];?></td>
                    <td align="center">

                       <?php if ( $get_list['Laborers']>"7") {
                     ?>  
                          <a class="btn btn-outline-success btn-xs" href="../plugins/TCPDF/User/job_order2.php?JobOrderNo=<?php echo
                            $get_list['JobOrderNo']; ?>" data-toggle="tooltip" title="Print"> <img src="../dist/img/print.png" alt="" class="brand-image img-transparent" width="25" height="25" style="opacity: ">
                          </a>  
                       <?php }elseif($get_list['Laborers']<="7"){
                     ?>  
                      <a class="btn btn-outline-success btn-xs" href="../plugins/TCPDF/User/job_order.php?JobOrderNo=<?php echo
                            $get_list['JobOrderNo']; ?>" data-toggle="tooltip" title="Print"> <img src="../dist/img/print.png" alt="" class="brand-image img-transparent" width="25" height="25" style="opacity: ">
                          </a>   <?php } ?>

                        <?php if ( $get_list['status']=="Done" And $get_list['Filenames']=="") {
                     ?>  
                     <a class="btn btn-outline-warning btn-xs" href="attachement.php?objid=<?php echo
                            $get_list['id_no']; ?>" data-toggle="tooltip" title="Attached File"><img src="../dist/img/attache.png" alt="" class="brand-image img-transparent" width="25" height="25" style="opacity: ">
                          </a>    

                    <a class="btn btn-outline-warning btn-xs" href="payroll.php?objid=<?php echo $get_list['objid_pro']?>"  data-toggle="tooltip" title="Payroll"><img src="../dist/img/list.png" alt="" class="brand-image img-square" width="25" height="25" style="opacity: ">
                          </a>   

                    <?php }elseif( $get_list['status']=="Done" And $get_list['Filenames']!="" Or $get_list['status']=="" And $get_list['Filenames']!="") {
                     ?>  
                     <a class="btn btn-outline-primary btn-xs" href="<?php echo $get_list['Filenames']?> "data-toggle="tooltip" title="Approved File"><img src="../dist/img/approve.png" alt="" class="brand-image img-square" width="25" height="25" style="opacity: ">
                          </a>  

                        <a class="btn btn-outline-warning btn-xs" href="payroll.php?objid=<?php echo $get_list['objid_pro']?>" data-toggle="tooltip" title="Payroll"><img src="../dist/img/list.png" alt="" class="brand-image img-square" width="25" height="25" style="opacity: ">
                          </a>   

                    <?php }elseif($get_list['status']!="Done" AND $get_list['Filenames']=="" AND $get_list['Amount']!="") {?>
                          

                          <a class="btn btn-outline-warning btn-xs" href="created_payroll.php?objid=<?php echo $get_list['objid']?>" data-toggle="tooltip" title="Created Payroll"><img src="../dist/img/pay.png" alt=""  class="brand-image img-square" width="35" height="25" style="opacity: ">
                          </a> 

                          <a class="btn btn-outline-warning btn-xs" href="attachement.php?objid=<?php echo
                            $get_list['id_no']; ?>" data-toggle="tooltip" title="Attached File"><img src="../dist/img/attache.png" alt="" class="brand-image img-square" width="25" height="25" style="opacity: ">
                          </a> 
                        
                      <?php }elseif($get_list['status']!="Done" AND $get_list['Filenames']=="" AND $get_list['Amount']=="") {?>    

                           <a class="btn btn-outline-warning btn-xs" href="created_payroll.php?objid=<?php echo $get_list['objid']?>" data-toggle="tooltip" title="Created Payroll"><img src="../dist/img/pay.png" alt=""  class="brand-image img-square" width="35" height="25" style="opacity: ">
                          </a> 

                          <a class="btn btn-outline-warning btn-xs" href="attachement.php?objid=<?php echo
                            $get_list['id_no']; ?>" data-toggle="tooltip" title="Attached File"><img src="../dist/img/attache.png" alt="" class="brand-image img-square" width="25" height="25" style="opacity: ">
                          </a> 
  <?php } ?>    
                        
                    </td>

                          </tr>
                      <div class="form-group">
              <?php }?>   <?php } ?>
                  </tbody>
                </table>
              </div>
             <!-- /.box-body -->


                          
            </form>
       </section>
    <!-- /.content -->
</div>
 <?php include 'includes/footer.php'; ?>
 <!-- Content-Wrapper End -->
</div>      
   <!-------------------- modals here --------------------------------->

<div id="myModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content ">
    <div class="modal-header bg-primary">
              <h3><b> <i class="fa fa-plus"> Add Schedule </i></b></h3>
               <span class="close">&times;</span>
           
        </div>
    
                 <div class="modal-body">
                 <table id="users" class="table table-bordered table-striped">
                  <thead>
                   
                      <tr bgcolor="">
                      <th width="10%" style="text-align:center;">No</th>
                      <th width="35%" style="text-align:center;">Schedule<i style="font-size:12px;">(Time)</i></th>
                    </tr>

                    </tr>
                  </thead>
                  <tbody>
                     <?php while ($get_list = $get_time_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $get_list['id'];?></td>
                     <td style="text-align:center;"><?php echo $get_list['TimeSched'];?></td>
                  </tr>
                      <div class="form-group">
                   <?php } ?>
                  </tbody>
                </table>
              </div>

               <form class="form-horizontal" method="POST" action="insert">

               
                    <div class="col-md-5">
                  <div class="form-group"> 
                    <label> Additional </label>
                   <input type="text"  id="budgetno" name="budgetno" class="form-control">
                  </div>
                </div>
                            

                  	<div class="modal-footer">
                  	 <button type="submit" class="btn btn-success btn-l float-right" href="list_jo.php" name="insert" value="save" ><i class="fa fa-check"></i> Proceed</button>

                  	 </div>
              </form>
                        
    </div>
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

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />




 
</body>
</html>