<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/scripts.php'; ?>
<?php include 'insert_payroll.php'; ?>
   <!-- Content Header (Page header) -->


  <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
      Created Payroll
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Payroll</li>
         </ol>
         </div>



     <!-- Main content -->
           <div class="card-body"> 
           <div class="container">
            <div align="center">
               <form method="post" action="" enctype="multipart/form-data">
               <?php echo $alert_msg; ?>
             </div>
          </i>  
            <form method="post" action="" enctype="multipart/form-data">     
             
              <div class="jumbotron">
                  <div class="row">
                      <div class="col-sm-7">
                        <div class="form-group"> 
                     <label> Job Order No.: </label>
                     <input type="text"  id="jo_amount" style="text-align:left; color:red; font-style: oblique; font-size:18px" value="<?php echo  $get_uniq_no."-".$JobOrder?>" class="form-control" readonly></div>
                     <input type="hidden"  name="jo_no" style="text-align:left; color:red; font-style: oblique; font-size:18px" value="<?php echo $JobOrder?>" class="form-control" readonly>

              </div>
    
                <div class="col-sm-5">
                      <div class="form-group">
                        <label>Estimated Amount</label>
                        <input type="text"  id="jo_amount" value="<?php echo  number_format($amount1,2)?>" style="text-align:right" class="form-control" readonly></div>
                      </div>
          </div>
 <input type="hidden"  id="pay"   class="form-control">
 <input type="hidden" name="pay_date" id="pay_no" value="<?php echo $now=date('F d,Y')?>" class="form-control"> 
  <input type="hidden"  id="jo_amount" name="jo_amount" value="<?php echo $amount1?>" >          

<input type="hidden" name="status" id="status" value="<?php echo "Done"?>" class="form-control"> 
          
   <input type="hidden" name="dept"  value="<?php echo $db_department?>" class="form-control"> 
   <input type="hidden" name="period"  value="<?php echo $get_starting_date?>" class="form-control"> 
  

                     <div class="row">
                    <div class="col-sm-6">

                       <div class="form-group"> 
                    <label style="font-size:28px"> Covered Period </label>
                  </div>
                </div>
              </div>
              

               <form class="form-horizontal" method="POST" action="insert">

                 <div class="row">
                    <div class="col-md-12">
                  <div class="form-group"> 
                    <label> Starting / End Date </label>
                   <input type="text" readonly id="period" value="<?php echo $get_starting_date ?>" name="
                   " class="form-control">
                  </div>
                </div>
              </div>

                 <div class="row">
                 <div class="col-md-7">
                  <div class="form-group"> 
                    <label>Charges Code</label>
 <input type="text" readonly id="charges" name="proj_charges"  value="<?php echo $get_charges ?>" class="form-control">
</div>
</div>


<input type="Hidden"  id="id_number" value="<?php echo $get_objid?>" name="id_number" class="form-control">

<input type="Hidden"  id="id_num" value="<?php echo $get_objid_pro?>" name="id_num" class="form-control">

  <?php while ($get_p = $get_p_data->fetch(PDO::FETCH_ASSOC)) { ?>
    <?php if ($get_p['Department']==$db_department && $get_p['JobOrderNo']==$JobOrder) {?>
                 <div class="col-md-5">
                  <div class="form-group"> 
                    <label> Available Balance</label>
                   <input style="text-align: right;" type="text" readonly id="amount"  value="<?php echo number_format($get_p['Actual'],2)?>" class="form-control">

        <input style="text-align: right;" type="hidden" readonly id="amount1"value="<?php echo  $get_p['Actual']?>" name="prev_balance" class="form-control">
                   <?php } ?>
                   <?php } ?>
                  </div>
                </div>
              </div>
<hr class="dashed">
                <div class="form-group"> 
                     <div class="row">
                    <div class="col-sm-6">
                    <label style="font-size:28px"> Payroll Amount </label>
                  </div>
                </div>
              </div>

                     <div class="row">
                      <div class="col-sm-7">
                        <div class="form-group"> 
                    <label> Payroll No. </label>
<input type="text" name="pay_no" id="pay_no" readonly value="<?php echo $payroll;?>" class="form-control">         </div>
</div>
   
   <input style="text-align: right;" type="hidden"  id="amount2" name="amount" class="form-control"> 
<input type="hidden"  id="payamount" name="pay_amount" style="text-align: right;" class="form-control">

                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text"  id="pay_amount" <?php echo $btnStatus;?> onchange="sync2()" style="text-align: right;" class="form-control"></div>
                      </div>
                       </div>
                        </div>

 
 
                    <div class="box-footer" align="right">
                     
                        <a href="list_jo.php"  class="btn btn-default"><b>Close</b></a>

                     <button type="submit" class="btn btn-success btn-l float-right" <?php echo $btnStatus;?> href="list_jo.php" name="insert" value="save" ><i class="fa fa-check"></i> Proceed</button>

                     </div>
              </form>
                        
    </div>
  </div>
                      </div>
                     </div>
                   </div>
                       

</div> <?php include 'includes/footer.php'; ?>
 <!-- Content-Wrapper End -->
</div> 

<script>

   function sync()
{
  var jonumber = document.getElementById('jonumber');
  var jonumbers = document.getElementById('jonumbers');
  var depart = document.getElementById('depart');
  jonumbers.value = depart.value;

}

 function sync2()
{
  var amount1 = document.getElementById('amount1');
  var amount2 = document.getElementById('amount2');
  var pay_amount = document.getElementById('pay_amount');
  var payamount = document.getElementById('payamount');
   amount2.value = (amount1.value-pay_amount.value);
   payamount.value = pay_amount.value;
}
   $('#jo_no').on('click', function() {
        var jo_no = this.value;
        $.ajax({
            type:"POST",
            url:'fetch_amount.php',
            data:{jo_amount:jo_no},
         
            success:function(response){
              var result = jQuery.parseJSON(response);
                console.log('response from server',result);
                $('#jo_amount').val(result.data);
               $('#jo_amount1').val(result.code1);
               
          },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });


    }); 

 $('#jo_no').on('click', function() {
        var period = this.value;
        $.ajax({
            type:"POST",
            url:'fetch_period.php',
            data:{jo_period:period},
         
            success:function(response){
              var result = jQuery.parseJSON(response);
                console.log('response from server',result);
                $('#period').val(result.data);
                $('#charges').val(result.charges);
                $('#id_number').val(result.objid);
                $('#amount1').val(result.amount);
               
          },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });


    }); 

 $(function () {
    $('#pay_amount').on('change', function () {
      var y = $('#pay_amount').val();
        var x = $('#pay_amount').val();
        $('#pay_amount').val(addCommas(x));
         $('#pay').val(y);
    });
});
 
function addCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}

    
</script>


    
