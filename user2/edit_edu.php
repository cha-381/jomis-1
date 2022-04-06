<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'update_edu.php'; ?>


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
      <li class="breadcrumb-item"><b><i style="font-size:20px; color:red;" class="fa fa-arrow-right"></b></i><a href="edit_employee.php?ID=<?php echo $get_emp_id;?>"> Personal Information</a></li>
      <li class="breadcrumb-item"><a href="edit_reference.php?ID=<?php echo $get_emp_id;?>">Reference Number</a></li>
      <li class="breadcrumb-item active">Educational Details</li>
      <li class="breadcrumb-item"><a href="edit_work.php?ID=<?php echo $get_emp_id;?>">Work Experience</a></li>
       </ol>
         </div>
       
    </section>
 
<!-- Main content -->
          <div class="col-md-12">
          <div class="card">
           

                 <form role="form" enctype="multipart/form-data" method="post" action="<?php htmlspecialchars("PHP_SELF"); ?>">

                   <input type="hidden" class="form-control" readOnly=true id = "emp_id" name="EmpCode" value="<?php echo $get_emp_id; ?>">
     

           <div class="card-body"> 
           <div class="container">
            <?php echo $alert_msg; ?>
                <i style="font-size:25px"><i style="color:blue" >Educational Details</i></i>  
                 <div class="card card-outline card-secondary">
                  <div class="jumbotron">
                <div class="card-body">
             <div class="form-group">


 <h3><?php echo $get_emp_fname . " " . $get_emp_mname[0] ."." . " " . $get_emp_lname?> </h3>
                   <lable>ID No.: <?php echo $get_emp_code?></lable>
                    <hr>
                      <input type="hidden" class="form-control"  name="ID" value="<?php echo $get_id_no;?>">


         <hr class="dashed">

         <label><i class="h8 font-weight-bold bg-yellow">COLLEGE INFORMATION</i></label>
                <form role="form">     
                 <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                          <label>Name of School</label>
                         <input type="text" class="form-control" value="<?php echo $get_edu_col_sch;?>" name="SchoolCollegeGra" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_col_yr;?>"name="YearPassingGra" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Award</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_col_award;?>"name="CollegeAward" >
                      </div>
                    </div>
                  </div>
             
    

           <label><i class="h8 font-weight-bold bg-yellow">SECONDARY INFORMATION</i></label>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                          <label>Name of School</label>
                         <input type="text" class="form-control" value="<?php echo $get_edu_sec_sch;?>" name="SecondarySchool" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_sec_yr;?>" name="SecondaryYear" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Award</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_sec_award;?>" name="SecondaryAward" >
                      </div>
                    </div>
                  </div>



           <label><i class="h8 font-weight-bold bg-yellow">PRIMARY INFORMATION</i></label>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                          <label>Name of School</label>
                         <input type="text" class="form-control" value="<?php echo $get_edu_elem_sch;?>"name="ElementarySchool" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_elem_yr;?>"name="ElementaryYear" >
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <label>Award</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_elem_award;?>"name="ElementaryAward" >
                      </div>
                    </div>
                  </div>


                   <label><i class="h8 font-weight-bold bg-yellow">VOCATIONAL/TRADE COURSE</i></label>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Name of School</label>
                         <input type="text" class="form-control" value="<?php echo $get_edu_voc_sch;?>"name="Vocational" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_voc_yr;?>"name="VocationalYear" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Award</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_voc_award;?>"name="VocationalAward" >
                      </div>
                    </div>
                  </div>

                   <label><i class="h8 font-weight-bold bg-yellow">GRDUATE STUDIES</i></label>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Name of School</label>
                         <input type="text" class="form-control" value="<?php echo $get_edu_gra_sch;?>"name="Graduate" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_gra_yr;?>"name="GraduateYear" >
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <label>Award</label>
                        <input type="text" class="form-control" value="<?php echo $get_edu_gra_award;?>"name="GraduateAward" >
                      </div>
                    </div>
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
                       <input type="submit"  name="update" class="btn btn-primary" style="padding: 5px 120px; font-size: 20px" value="Update">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <a href="employeedetails.php?ID=<?php echo "1"?>" class="btn btn-default btn-block" style="padding: 5px 120px; font-size: 20px">Cancel</a>
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
var fReader = new FileReader();
fReader.readAsDataURL(input.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById("image");
    img.src = event.target.result;
}
}
</script> 


</div>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
