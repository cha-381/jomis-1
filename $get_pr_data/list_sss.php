<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'insert_project.php'; ?>

   <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
      <img class="brand-image img-square "  
                       src="../dist/img/SSS_logo.png"
                       alt="User profile picture" width="30" height="30"> Social Security System
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">SSS</li>
         </ol>
         </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
        <div class="form-group">
        
         
           
            
        </div>
         </div>
        </div>
     

  

    


           
            <div class="card card-outline card-info">
           
            <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">
            	<div class="card-body text-m">
                <table id="users" class="table table-bordered " >
                  <thead>
                   
                      <tr style="font-size: 16px; background-color: hsla(89, 43%, 51%, 0.3)">
                      <th width="5%" style="text-align:center;">No</th>
                      <th  style="text-align:center" width="11%">Payroll #</th>
                      
                      <th  width="20%" style="text-align:center;background-color: hsla(99, 43%, 51%, 0.3)">Employee</th>
                      <th  width="15%" style="text-align:center; background-color: hsla(99, 43%, 51%, 0.3)">SSS No.</th>
                       <th  width="15%" style="text-align:center; background-color: hsla(99, 43%, 51%, 0.3)">Covered Month</th>
                      <th width="1%" style="text-align:center;"></th>
                      <th width="10%" style="text-align:center;">Amount</th>
                    </tr>

                    </tr>
                  </thead>
                  <tbody>
                  	 <?php while ($get_project = $get_sss_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $get_project['id'];?></td>

                   <td> <strong><?php echo $get_project['PayrollNo'];?></strong></td>
                    
                    <td style="text-align:left;"><?php echo $get_project['EmpFname']. " " . $get_project['EmpMname'][0] ."." . " " . $get_project['EmpLname'];?></td>
                    <td style="text-align:left;"><?php echo $get_project['SssNo'];?></td>
                    <td style="text-align:left;"><?php echo $get_project['CoveredMonth'].","." ".$get_project['year'];?></td>
                     <td style="text-align:right;"><b><?php echo "P"?></b>
                    <td style="text-align:right;"><b><?php echo number_format($get_project['sss_amount'],2);?></b></td></td>
                  

                          </tr>
                      <div class="form-group">
                   <?php } ?>
                  </tbody>
                </table>
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
              <h3><b> <i class="fa fa-plus">Monthly Contribution</i></b></h3>
               <span class="close">&times;</span>
           
        </div>
     <form class="form-horizontal" method="POST" action="insert_sss.php">

               
              <div class="modal-body">
                  <div class="row">
                  <div class="col-md-7"> 
                  <div class="form-group"> 
                    <label> Employee </label>
                    <select class="form-control custom-select" id="joName" name="name">
                  <option selected>Please select....</option>
                  <?php while ($get_name = $get_all_emp1_data->fetch(PDO::FETCH_ASSOC)) { ?>

                    <option value="<?php echo
   $get_name['EmpFname']?>"><?php echo  $get_name['EmpLname'].","." ".$get_name['EmpFname']. " " . $get_name['EmpMname'][0] ."."?></option> <?php } ?>
                </select>
              </div>
            </div>

                 <div class="col-md-5"> 
                   <div class="form-group"> 
                    <label> ID No </label>  
                    <input type="text"  id="code" name="empcode" readonly class="form-control">
            </div>
             </div>
              </div>

                 
                    <div class="row">
                  <div class="col-md-7"> 
                   <div class="form-group"> 
                    <label> Payroll Control No. </label>
                   <select class="form-control custom-select" id="payrollno" name="payrollno">
                  <option selected disabled>Please select....</option>
                  <?php while ($get_name = $get_payroll_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
   $get_name['PayrollNo']; ?>"><?php echo  $get_name['PayrollNo']?></option> <?php } ?>
                </select>
              </div>
              </div>

                  <div class="col-md-5"> 
                   <div class="form-group"> 
                    <label> Payroll Covered Period </label>  
                    <input type="text"  id="payroll" name="" readonly class="form-control">
            </div>
             </div>
              </div>
                  
                 <div class="row">
                    <div class="col-sm-7">
                      <div class="form-group"> 
                           <label> SSS Covered Month: </label>
                   <select class="form-control custom-select" value="<?php echo "Month"?>" name="coveredmonth">
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

                    

            <div class="col-md-5"> 
                   <div class="form-group"> 
                    <label> Amount: </label>
                    <input type="text" id="sssamount" name="sssamount" class="form-control">
                  </div>
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
                                                                
            
          },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />




 
</body>
</html>