<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'update_photo.php'; ?>


<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
        Edit Profile
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-12">
      <ol class="breadcrumb float-sm-right text-ml">
      <li class="breadcrumb-item"><b><i style="font-size:20px; color:red;" class="fa fa-arrow-right"></b></i><a href="edit_employee.php?ID=<?php echo $get_emp_id;?>">Personal Information</li>
      <li class="breadcrumb-item active">/ Upload Photo</a></li>
      <li class="breadcrumb-item"><a href="edit_reference.php?ID=<?php echo $get_emp_id;?>">Reference Number</a></li>
      <li class="breadcrumb-item"><a href="edit_edu.php?ID=<?php echo $get_emp_id;?>">Educational Details</a></li>
      <li class="breadcrumb-item"><a href="edit_work.php?ID=<?php echo $get_emp_id;?>">Work Experience</a></li>
       </ol>
         </div>
       
    </section>
 
<!-- Main content -->
          <div class="col-md-12">
          <div class="card">
           

                 <form role="form" enctype="multipart/form-data" method="post" action="<?php htmlspecialchars("PHP_SELF"); ?>">

                  
     

           <div class="card-body"> 
           <div class="container">
            <div align="center">
                  <?php echo $alert_msg; ?>
             </div>
           <i style="font-size:25px"><i style="color:blue" align="center">Upload Photo</i></i>  

             
              <div class="jumbotron">
              <div class="row">

               <?php if ($get_emp_photo=='') {?>
      <div class="col-12 col-sm-12">
               <div class="widget-user-image" align="center">
                <img class="img-circle elevation-5" id="image" src="../dist/img/no-photo-icon.png" width="300" height="300" vspace="10" alt="User Avatar">
              </div>

<?php }elseif($get_emp_photo<>'') {?>
      <div class="col-12 col-sm-12">
               <div class="widget-user-image" align="center">
                <img class="img-circle elevation-5" id="image" src="<?php echo (!empty([$get_emp_photo])) ? '../dist/photo/'.$get_emp_photo : '../dist/photo/no-photo-icon.png'; ?>" width="300" height="300" vspace="10" alt="User Avatar">
              </div>
<?php } ?>


<input type="hidden" class="form-control"  id="pic" name="EmpPhoto" value="<?php echo $get_emp_photo;?>" required>
 <input type="hidden" class="form-control" name="ID" value="<?php echo $id_emp;?>" required>
 
             <input class="text-sm" type ="file" name="myFiles" id="fileToUpload"  onchange = "loadImage()">
             <br>
             <br>
             <br>


          
              
              </div>
             </div>
              </div>
            </div>




         
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                       <a href="add_employee.php" <?php echo $btnNew; ?> class="btn btn-primary" style="padding: 5px 120px; font-size: 20px">New</a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                       <input type="submit" <?php echo $btnStatus; ?> name="update" class="btn btn-primary" style="padding: 5px 120px; font-size: 20px" value="Update">
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
