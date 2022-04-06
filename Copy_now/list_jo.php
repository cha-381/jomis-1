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
        </div>
      </div>

      <div class="row">
            <div class="col-md-12">      
            <div class="card card-outline card-info">
            
          
            <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">
              <div class="card-body text-l">
                <table id="users" class="table table-bordered table-striped" style="background-color: #f1f1f1;">
                  <thead>
                   
                      <tr style="font-size: 20px; background-color: hsla(195, 43%, 45%, 0.3)">
                      <th  width="5%" style="text-align:center;">No</th>
                      <th  width="18%" style="text-align:center;">JO #</th>
                     
                       <th  width="18%" style="text-align:center;">Particulars</th>
                       <th  width="5%" style="text-align:center; font-size: 12px">No. Laborers</th>
                    <th  width="20%" style="text-align:center;">Period Covered</th>
                    <th  width="1%" style="text-align:center;"></th>
                      <th  style="text-align:center;">Amount</th>
                      <th style="text-align:center;">Action</th>

                    </tr>

                    </tr>
                  </thead>
                  <tbody>
                     <?php if($count>0){
            $n  =   1; while ($get_list = $get_combine2_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                       <?php if ( $get_list['code']==$db_code) {
                     ?>  
                       <td><?php echo $n++; ?></td>
                    <td style="text-align:left;"><?php echo $get_list['JobOrderNo'];?></td>    

                     <td style="text-align:left;"> <?php echo $get_list['LName'].","." ".$get_list['FName']." ". $get_list['MName'][0] .".";?>  </td>
                     <td style="text-align:center;"><?php echo $get_list['Laborers'];?></td>
                   <td style="text-align:center;"><?php echo $get_list['PeriodCovered'];?></td>
                    <td style="text-align:right;"><?php echo "P"?></td>
                     <td style="text-align:right;"><?php echo number_format($get_list['Amount'], 2);?></td>
                    <td align="center">
                      <?php if ( $get_list['Laborers']>"7") {
                     ?>  
                          <a class="btn btn-outline-success btn-xs" href="../plugins/TCPDF/User/job_order2.php?JobOrderNo=<?php echo
                            $get_list['JobOrderNo']; ?>" data-toggle="tooltip" title="Print"> <img src="../dist/img/print.png" alt="" class="brand-image img-transparent" width="30" height="30" style="opacity: ">
                          </a>  
                       <?php }elseif($get_list['Laborers']<="7"){
                     ?>  
                      <a class="btn btn-outline-success btn-xs" href="../plugins/TCPDF/User/job_order.php?JobOrderNo=<?php echo
                            $get_list['JobOrderNo']; ?>" data-toggle="tooltip" title="Print"> <img src="../dist/img/print.png" alt="" class="brand-image img-transparent" width="30" height="30" style="opacity: ">
                          </a>   <?php } ?>

                    <?php if ( $get_list['status']=="Done" And $get_list['Filenames']=="") {
                     ?>  
                     <a class="btn btn-outline-warning btn-xs" href="attachement.php?objid=<?php echo
                            $get_list['id_no']; ?>" data-toggle="tooltip" title="Attached File"><img src="../dist/img/attache.png" alt="" class="brand-image img-transparent" width="30" height="30" style="opacity: ">
                          </a>    

                    <a class="btn btn-outline-warning btn-xs" href="payroll.php?objid=<?php echo $get_list['objid_pro']?>"  data-toggle="tooltip" title="Payroll"><img src="../dist/img/list.png" alt="" class="brand-image img-square" width="30" height="30" style="opacity: ">
                          </a>   

                    <?php }elseif( $get_list['status']=="Done" And $get_list['Filenames']!="" Or $get_list['status']=="" And $get_list['Filenames']!="") {
                     ?>  
                     <a class="btn btn-outline-primary btn-xs" href="<?php echo $get_list['Filenames']?> "data-toggle="tooltip" title="Approved File"><img src="../dist/img/approve.png" alt="" class="brand-image img-square" width="30" height="30" style="opacity: ">
                          </a>  

                        <a class="btn btn-outline-warning btn-xs" href="payroll.php?objid=<?php echo $get_list['objid_pro']?>" data-toggle="tooltip" title="Payroll"><img src="../dist/img/list.png" alt="" class="brand-image img-square" width="30" height="30" style="opacity: ">
                          </a>   

                    <?php }elseif($get_list['status']!="Done" AND $get_list['Filenames']=="" AND $get_list['Amount']!="") {?>
                          <a class="btn btn-outline-info btn-xs" href="create_job_order_edit.php?objid=<?php echo
                            $get_list['objid']; ?>" data-toggle="tooltip" title="Edit"><img src="../dist/img/pen.png" alt="" class="brand-image img-transparent" width="30" height="30" style="opacity: ">
                          </a> 

                          <a class="btn btn-outline-warning btn-xs" href="created_payroll.php?objid=<?php echo $get_list['objid']?>" data-toggle="tooltip" title="Created Payroll"><img src="../dist/img/pay.png" alt=""  class="brand-image img-square" width="40" height="30" style="opacity: ">
                          </a> 

                          <a class="btn btn-outline-warning btn-xs" href="attachement.php?objid=<?php echo
                            $get_list['id_no']; ?>" data-toggle="tooltip" title="Attached File"><img src="../dist/img/attache.png" alt="" class="brand-image img-square" width="30" height="30" style="opacity: ">
                          </a> 
                        
                      <?php }elseif($get_list['status']!="Done" AND $get_list['Filenames']=="" AND $get_list['Amount']=="") {?>    
                         <a class="btn btn-outline-info btn-xs" href="create_job_order_edit1.php?objid=<?php echo
                            $get_list['objid']; ?>" data-toggle="tooltip" title="Edit"><img src="../dist/img/pen.png" alt="" class="brand-image img-transparent" width="30" height="30" style="opacity: ">
                          </a> 

                           <a class="btn btn-outline-warning btn-xs" href="created_payroll.php?objid=<?php echo $get_list['objid']?>" data-toggle="tooltip" title="Created Payroll"><img src="../dist/img/pay.png" alt=""  class="brand-image img-square" width="40" height="30" style="opacity: ">
                          </a> 

                          <a class="btn btn-outline-warning btn-xs" href="attachement.php?objid=<?php echo
                            $get_list['id_no']; ?>" data-toggle="tooltip" title="Attached File"><img src="../dist/img/attache.png" alt="" class="brand-image img-square" width="30" height="30" style="opacity: ">
                          </a> 
  <?php } ?>    
                        
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
              </div>
                </div>
                  </div>
                    </div>
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
    
                  <div class="form-group"> 
                     <div class="row">
                      <div class="col-sm-7">
                    <label> Payroll No. </label>
<input type="text" name="pay_no" id="pay_no" value="<?php echo $payroll;?>" class="form-control">         

     </div>
   

                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text"  id="pay_amount" onclick="sync2()" style="text-align: right;" class="form-control"></div>
                      </div>

                     

 </div>
 </div>
 <input type="hidden"  id="pay" name="pay_amount"  class="form-control">
 <hr>
<input type="hidden" name="status" id="status" value="<?php echo "Done"?>" class="form-control">  
                  <div class="form-group"> 
                     <div class="row">
                      <div class="col-sm-7">
                     <label> Job Order No.: </label>
                     <input type="text"  id="jo_amount" style="text-align:right" value="<?php echo  $Job?>" class="form-control" readonly></div>
              </div>
    
                <div class="col-sm-5">
                      <div class="form-group">
                        <label>Estimated Amount</label>
                        <input type="text"  id="jo_amount" style="text-align:right" class="form-control" readonly></div>
                      </div>
          </div>

           <input type="hidden"  id="jo_amount1" style="text-align:right" name="jo_amount" class="form-control" readonly>
                  
              <div class="form-group"> 
                     <div class="row">
                    <div class="col-sm-6">
                    <label style="font-size:28px"> Covered Period </label>
                  </div>
                </div>
              

               <form class="form-horizontal" method="POST" action="insert">

                 <div class="row">
                    <div class="col-md-12">
                  <div class="form-group"> 
                    <label> Starting / End Date </label>
                   <input type="text" readonly id="period" name="
                   " class="form-control">
                  </div>
                </div>
              </div>

                 <div class="row">
                 <div class="col-md-7">
                  <div class="form-group"> 
                    <label>Charges Code</label>
 <input type="text" readonly id="charges" name="proj_charges" class="form-control">
</div>
</div>


<input type="hidden"  id="id_number" name="id_number" class="form-control">

                <div class="col-md-5">
                  <div class="form-group"> 
                    <label> Available Balance</label>
                   <input style="text-align: right;" type="text" readonly id="amount"  class="form-control">
                  </div>
                </div>
              </div>
                 
 <input style="text-align: right;" type="text" readonly id="amount1" name="prev_balance" class="form-control">
  <input style="text-align: right;" type="text" readonly id="amount2" name="" class="form-control"> 
 
                    <div class="modal-footer">
                     <button type="submit" class="btn btn-success btn-l float-right" href="list_jo.php" name="insert" value="save" ><i class="fa fa-check"></i> Proceed</button>

                     </div>
              </form>
                        
    </div>
  </div>
                      </div>
                     </div>
                   </div>
                       
                        
    </div>
  </div>

</div>
</div>

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




 <?php include 'includes/scripts.php'; ?>





 
</body>
</html>