<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'insertjo.php';?>
<?php include 'includes/scripts.php'; ?>
   <!-- Content Header (Page header) -->


  <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
      Create Job Order
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Job Order</li>
         </ol>
         </div>



     <!-- Main content -->
           <div class="card-body"> 
           <div class="container">
            <div align="center">
               <?php echo $alert_msg; ?>
             </div>
           <i style="font-size:17px"><i style="color:red" align="center">*Fill up the form completely.</i></i>  
            <form method="post" action="" enctype="multipart/form-data">     
             
              <div class="jumbotron">
              <div class="row">         
                    <div class="col-sm-6">
                      <div class="form-group">
                         <label align="right">Job Order No.</label>
                          <input type="hidden" id="uniq"  name="uniq" value="" class="form-control" readonly>

    <input type="hidden" id=""  name="jo_objid" value="<?php echo $get_createjo_data->rowCount()+1?>" class="form-control" readonly>

                     <i><b> <input type="text" id="jonumber"  name="jo" value="<?php echo $db_abbre.uniqid()."-".date('Y')."-".$count_0;?>" class="form-control" readonly></b></i>


            <?php   while ($get = $get_create_data->fetch(PDO::FETCH_ASSOC)) { ?>
              <?php if ($get['code']==$db_code) { ?>
                    <input type="hidden" name="jo_no" id="" value="<?php echo $get['abbre'];?>" class="form-control" readonly>
                    <?php } ?>
                     <?php } ?>
              </div></div>

                 <input type="hidden" id="depart" class="form-control" name="abbre"   required>
      
           
              <input type="hidden" id="amount" class="form-control" name="job_date" value="<?php echo date("F d, Y");?>"  required>
               <input type="hidden" id="" class="form-control" name="user" value="<?php echo $user_id;?>"  required>

                   <div class="col-sm-6">
                  <div class="form-group">
                   <label align="left">Period Covered</label>   
                   <div class="input-group">
                  
                   <input type="text" name="datefilter" value="" <?php echo $btnStatus?> class="form-control" required></span>
                  </div>
                  </div>
                    </div>
                </div>
              </div>
            </div>
           
   


                  <hr class="dashed">

                  
                  <div class="row">

            <?php if ($btnStatus=='enabled') {?>
                  <div class="col-sm-7">
                      <div class="form-group">
                        <label>Project Name</label>
                        <select class="form-control custom-select" id="prjName" <?php echo $btnStatus?>  name="jo_name" required>
                  <option selected disabled>Please select....</option>
                 <?php while ($get_proj = $get_project_data->fetch(PDO::FETCH_ASSOC)) { ?>  
                   <?php if ($get_proj['Department']==$db_department && $get_proj['status']=='Open' && $get_proj['code']==$db_code && $get_proj['abbre']==$db_abbre) {?>
                    <option value="<?php echo
    $get_proj['objid']; ?>"><?php echo $get_proj['ProjectName']; ?></option> 
    <?php } ?>  <?php } ?>
                </select>
                      </div>
                    </div>

                    <?php }elseif($btnStatus<>'enabled') {?> 
                       <div class="col-sm-7">
                      <div class="form-group">
                        <label>Project Name</label>
                        <select class="form-control custom-select" id="prjName" <?php echo $btnStatus?>  name="jo_name" required>
                  <option selected>Please select....</option>
                 <?php while ($get_proj = $get_project_data->fetch(PDO::FETCH_ASSOC)) { ?>  
                   <?php if ($get_proj['Department']==$db_department && $get_proj['status']=='Open' && $get_proj['code']==$db_code && $get_proj['abbre']==$db_abbre) {?>
                    <option value="<?php echo
    $get_proj['objid']; ?>"><?php echo $get_proj['ProjectName']; ?></option> 
    <?php } ?>  <?php } ?>
                </select>
                      </div>
                    </div>
                     <?php } ?>

  <input type="hidden" id="dpetcode" class="form-control" name="jo_dept_code" value="<?php echo $db_code?>"  required>

  <input type="hidden"  class="form-control" name="jo_sub" value="<?php echo ""?>"  required>

  <input type="hidden" id="objid_pro" class="form-control" name="jo_objid_pro" value="<?php echo $db_code?>"  required>

  <input type="hidden" id="projNme" class="form-control" name="jo_name" value="<?php echo $db_code?>"  required>


                        <div class="col-sm-5">
                      <div class="form-group">
                        <label>Department</label>
                     <input readonly type="text"  value="<?php echo $db_department?>" name="jo_depart" class="form-control"></span>
                  </div>
                </div>
              </div>


                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Charges</label>
                        <input type="text" id="charges" class="form-control" name="jo_charges" readonly>
                      </div>
                    </div>

                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Project Budget</label>
                        <input type="text" id="budget1" class="form-control"  readonly>
                      </div>
                      </div>

                      <input type="hidden" id="budget" class="form-control" name="jo_budget" readonly>

                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Previous Balance</label>
                        <input type="text" id="balance1" class="form-control" readonly>
                      </div>
                      </div></div>
                      <hr>

                      <input type="hidden" id="balance" class="form-control" name="jo_previous" readonly>

                     <div class="box-footer" align="right">
                     
                       
                        <button class="btn btn-default" href="list_jo.php" <?php echo $btnStatus;?> ><b>Cancel</b></a></button>

                        <button type="submit" class="btn btn-default" <?php echo $btnStatus;?> name="insert" value="save" id="saving"><b>Save</b></a></button>

                    
                      <?php if ($btnStatus=='enabled') {?>
                      <a href="" class="btn btn-success disabled"><b>Proceed</b></a>
                    <?php }elseif($btnStatus<>'enabled') {?>  
                      <a href="create_job_order.php?objid=<?php echo $jo_num;?>" class="btn btn-success"><b>Proceed</b></a>
                      <?php } ?>
                   </div>
                    </div>
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
                $('#budget').val(result.budget);
                 $('#balance').val(result.balance);
                  $('#budget1').val(result.budget1);
                 $('#balance1').val(result.balance1);
                  $('#uniq').val(result.uniq);
                   $('#depart').val(result.depart);
                   $('#objid_pro').val(result.objid);
                   $('#projNme').val(result.proname);
            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });


    }); 

    
   


    </script>


    <script>
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MMMM DD') + ' - ' + picker.endDate.format('DD, YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});

</script>

<script type="text/javascript" src="../plugins/daterangepicker/jquery.min.js"></script>
<script type="text/javascript" src="../plugins/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="../plugins/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../plugins/daterangepicker/daterangepicker.css" />
>?