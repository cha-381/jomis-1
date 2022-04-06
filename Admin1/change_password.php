<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'pass_updated.php'; ?>


<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
  
      </h1>
      </div>
        <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Update Information</li>
         </ol>
         </div>
    </section>
 
<!-- Main content -->
<div class="widget-user-header bg-info">
                <h3 class="widget-user-username text-m"><i class="h1 mb-0 font-weight-bold">Edit Profile</i></h3>
                <h5 class="widget-user-desc"></h5>
              </div>
          <div class="col-md-12">
          <div class="card">
           

                 <form role="form" enctype="multipart/form-data" method="post" action="<?php htmlspecialchars("PHP_SELF"); ?>">

                  
     

           <div class="card-body"> 
           <div class="container">
            <div align="center">
                  <?php echo $alert_msg; ?>
             </div>
         

             
              <div class="jumbotron">
              <div class="row">


                         <?php if ($db_location=='') {?>
      <div class="col-12 col-sm-3">
               <div class="widget-user-image" align="left">
                <img class="img-circle elevation-5" id="image" src="../dist/img/no-photo-icon.png" width="200" height="200" vspace="10" alt="User Avatar">
              </div>

<?php }elseif($db_location<>'') {?>
      <div class="col-12 col-sm-3">
               <div class="widget-user-image" align="left">
                <img class="img-circle elevation-5" id="image" src="<?php echo (!empty([$db_location])) ? '../dist/img/'.$db_location : '../dist/img/no-photo-icon.png'; ?>" width="200" height="200" vspace="10" alt="User Avatar">
              </div>
<?php } ?>



<input type="hidden" class="form-control"  id="pic" name="location" value="<?php echo $db_location;?>" required>
 <input type="hidden" class="form-control" name="id" value="<?php echo $user_id;?>" required>
  
              <br>
  <div class="col-sm-11">
    <div class="row">
            <a type="button" href="edit_profile_photo.php?user_id=<?php echo $user_id?>" id="myBtn"  <?php echo $btnStatus?> align="center" class="btn btn-success">*********Upload Photo*********</a></h3>    
            </div></div>      
          <br>
  <div class="col-sm-11">
                      <div class="row">
                       
                        <input type="text" style="text-align: center"readonly class="form-control"  value="<?php echo $user_id?>" placeholder="Enter No.">
                        <label style="text-align: center">**********<i class="bg-yellow">Identification No</i>*********</label>
                      </div>
                  </div>

            




   <div class="col-sm-11">
                   <div class="row">  
                   <label>Status</label>      
                    <div class="input-group">            
                     <input type="text" style="text-align: center"readonly disabled class="form-control"   value="<?php echo $db_status?>" placeholder="Enter No.">             
              </div>
        
            </div>
          </div>

      
        </div>


                         <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                         <input <?php echo $btnStatus; ?> disabled type="text" class="form-control" value="<?php echo $db_first_name;?>" name="first_name" required>
                      </div>
                    </div>
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input <?php echo $btnStatus; ?> disabled type="text" class="form-control" value="<?php echo $db_middle_name;?>" name="middle_name" required>
                      </div>
                    </div>
                  </div>
                      <div class="row">
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input <?php echo $btnStatus; ?> disabled type="text" class="form-control" value="<?php echo $db_last_name;?>" name="last_name" required>
                      </div>
                      </div>

                                               <div class="col-sm-6">
                      <div class="form-group">
                         <label>Name Extension</label>
                        <input type="text" class="form-control" disabled <?php echo $btnStatus; ?> value="<?php echo $db_ext_name;?>" name="ext_name" >                       
                      </div>
                    </div>
                    </div>


                  
                     <div class="row">
                         <div class="col-sm-7">
                      <div class="form-group">
               <label for="inputName">Department</label>
              <input type="text" class="form-control" readonly disabled value="<?php echo  $db_department ?>" <?php echo $btnStatus; ?> name="department" required>
                </div>  
             </div>   
           

               

                                             <div class="col-sm-5">
                      <div class="form-group">
                          <b><label>Designation</b></label>
                        <input type="text" class="form-control" disabled value="<?php echo  $db_position?>" <?php echo $btnStatus; ?> name="position" required>
             </div>  
             </div>                      
             </div> 

                    <div class="row">
                       <div class="col-sm-7">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" disabled <?php echo $btnStatus; ?> value="<?php echo  $db_email_ad ?>" name="email" required>
                      </div>
                  </div>
                       <div class="col-sm-5">
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" disabled  value="<?php echo  $db_contact_number ?>"<?php echo $btnStatus; ?> name="contact_no" required>
                      </div>
                  </div>
                  </div>


                                   <hr class="dashed">
                  <div class="row">
                    <div class="col-md-6">
                     <div class="form-group">
                 <label>Username</label>
                 <input type="text" class="form-control" disabled <?php echo $btnStatus; ?> value="<?php echo  $db_user_name?>" name="username" placeholder="Username">
               </div>
             </div>

             <div class="col-md-6">
            <div class="form-group">
                 <label>Password</label>
                <input type="password" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $db_password?>" name="password" placeholder="Password">
            </div>
               </div>
             </div>

              </fieldset>
              </div>
             </div>


  


     
         
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                       <a href="edit_profile.php?user_id=<?php echo $user_id?>" <?php echo $btnNew; ?> <?php echo $btnStatus; ?> class="btn btn-primary" style="padding: 5px 120px; font-size: 20px">Back</a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                       <input type="submit" <?php echo $btnStatus; ?> name="edit" class="btn btn-primary" style="padding: 5px 120px; font-size: 20px" value="Update">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <a href="profile.php" class="btn btn-default" style="padding: 5px 120px; font-size: 20px">Cancel</a>
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
<script>
   $('#joName').on('click', function() {
        var joName = this.value;
        $.ajax({
            type:"POST",
            url:'fetch_dept.php',
            data:{jo_name:joName},
         
            success:function(response){
              var result = jQuery.parseJSON(response);
                console.log('response from server',result);
                $('#abbre').val(result.abbre);
                $('#code').val(result.code);
                 $('#dept').val(result.dept);
            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });


    }); 
</script>

</div>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
