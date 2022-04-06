<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'insert_cedula.php'; ?>


<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-3">
    <div class="col-sm-3">
      <h1 class="m=o text-dark">
        Attached File
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-12">
      <ol class="breadcrumb float-sm-right text-ml">
      <li class="breadcrumb-item"><b><i style="font-size:20px; color:red;" class="fa fa-arrow-right"></b></i><a href="edit_attachedment.php?ID=<?php echo $get_emp_id;?>">Barangay Recommendation </li>
     <li class="breadcrumb-item"><a href="edit_attachedment2.php?ID=<?php echo $get_emp_id;?>">/ Vamos ID</a></li>
      <li class="breadcrumb-item"><a href="edit_employee.php?ID=<?php echo $get_emp_id;?>">Personal Information</a></li>
       <li class="breadcrumb-item active">Community Tax Certificate</a></li>
     
       </ol>
         </div>
       
    </section>
 
<!-- Main content -->
           <div class="col-md-12"> 
          <div class="card">
           

                 <form role="form" enctype="multipart/form-data" method="post" action="<?php htmlspecialchars("PHP_SELF"); ?>">

                  
     

         <div class="card-body">     
           <div class="container">
            <?php echo $alert_msg; ?>
                <i style="font-size:25px"><i style="color:blue" >Community Tax Certificate</i></i>  
         
                  <div class="jumbotron">
                <div class="card-body">
             <div class="form-group">

 <?php if ($get_emp_mname!='' && $get_emp_fname!='' && $get_emp_lname!='' && $get_emp_ename=='') {?>
 <h3><?php echo ucwords(strtolower($get_emp_fname . " " . $get_emp_mname[0] ."." . " " . $get_emp_lname)) ?> </h3>
  <?php }elseif($get_emp_mname!='' && $get_emp_fname!='' && $get_emp_lname!='' && $get_emp_ename!='') {?>
   <h3><?php echo ucwords(strtolower($get_emp_fname . " " . $get_emp_mname[0] ."." . " " . $get_emp_lname.","." ".$get_emp_ename))?></h3><?php } ?>
                   <lable>ID No.: <?php echo $get_emp_control?></lable>
                    <hr>
                      <input type="hidden" class="form-control"  name="ID" value="<?php echo $get_emp_id ;?>">


                 <div class="col-md-6"> 
                  <div class="form-group"> 
                <label> Upload File </label>
                          <input class="text-sm" name="pdfFile" style="font-size: 30px;" type ="file" id="fileToUpload" onchange="one()">

             
                          <p class="help-block" style="color:red;">Upload .pdf file only.</p>
             <br>
                    </div>
                    </div>
                </div>
                <hr class="dashed">
         
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                       <input type="submit" <?php echo $btnStatus; ?> name="insert" class="btn btn-primary" style="padding: 5px 120px; font-size: 20px" value="Upload">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <a href="employeedetails.php?ID=<?php echo $get_emp_id?>" class="btn btn-default btn-block" style="padding: 5px 120px; font-size: 20px">Cancel</a>
                    </div>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
           <!-- /.box-body -->
  
            <!-- /.box -->
       </div>
         <!-- Main Content End --> 

   </div> 
   <!-- Content-Wrapper End -->
        
           </div>
</div> 
   <!-- Content-Wrapper End -->
         <div class="col-md-1"></div>
          </div>
           </div>
 <!-- loadImage -->






<script>
function loadImage(){
    var input = document.getElementById("fileToUpload");
    var pic = document.getElementById("pic");
var fReader = new FileReader();
fReader.readAsDataURL(input.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById("image");
    img.src = event.target.result;
    pic.value=input.value;
}
}
</script> 
<script type="text/javascript" src="../plugins/daterangepicker/jquery.min.js"></script>
<script type="text/javascript" src="../plugins/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="../plugins/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../plugins/daterangepicker/daterangepicker.css" />
>?

</div>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
