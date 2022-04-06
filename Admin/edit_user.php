<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'users_updated.php'; ?>


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
                <h3 class="widget-user-username text-xl"><i class="h1 mb-0 font-weight-bold">Update User Information</i></h3>
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
                 <i style="color: red; font-size: 18px;"> * Please re -select the Department of said user for confirmation</i>
              <div class="row">


               <?php if ($user_location=='') {?>
      <div class="col-12 col-sm-3">
               <div class="widget-user-image" align="left">
                <img class="img-square elevation-5" id="image" src="../dist/img/no-photo-icon.png" width="200" height="200" vspace="10" alt="User Avatar">
              </div>

<?php }elseif($user_location<>'') {?>
      <div class="col-12 col-sm-3">
               <div class="widget-user-image" align="left">
                <img class="img-square elevation-5" id="image" src="<?php echo (!empty([$user_location])) ? '../dist/img/'.$user_location : '../dist/photo/no-photo-icon.png'; ?>" width="200" height="200" vspace="10" alt="User Avatar">
              </div>
<?php } ?>


<input type="hidden" class="form-control"  id="pic" name="location" value="<?php echo $user_location;?>" >

  <div class="col-sm-11">
                      <div class="row">
                       
                        <input type="text" style="text-align: center"readonly class="form-control" name="control"  value="<?php echo $id_user?>" placeholder="Enter No.">
                        <label style="text-align: center">**********<i class="bg-yellow">Identification No</i>*********</label>
                      </div>
                  </div>

            
                        <input  <?php echo $btnStatus; ?> type="hidden" style="text-align: center" class="form-control" name="id" readonly value="<?php echo $id_user;?>" placeholder="Enter No." >
                    

<div class="col-sm-11">
                   <div class="row">  
                   <label>Account Type</label>      
                    <div class="input-group" >            
                      <select class="form-control custom-select" style="border-color:red;" <?php echo $btnStatus; ?> name="account_type" required>
                   <?php if ($user_account_type=='1') {?> 
                        <option  value="<?php echo "1"?>" selected><?php echo 'ADMIN'?></option>
                  <?php }elseif(($user_account_type=='2')) {?> 
                        <option  value="<?php echo "2"?>" selected><?php echo 'USER'?></option>
                         <?php }?>
                  <option value="<?php echo "1"?>">ADMIN</option>
                  <option value="<?php echo "2"?>">USER</option>
                </select>
              </div>
            </div>
          </div>


   <div class="col-sm-11">
                   <div class="row">  
                   <label>Status</label>      
                    <div class="input-group">            
                      <select class="form-control custom-select" <?php echo $btnStatus; ?> style="border-color:red;" name="status" required>
                        <option selected><?php echo $user_status?></option>
                  <option style="color:orange;">Pending</option>
                  <option style="color:green;">Active</option>
                  <option style="color:red;">Inactive</option>
                </select>
              </div>
            </div>
          </div>
        </div>


             <div class="card-body">
                <form role="form">
                   <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                          <label>Last Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="lastname" value="<?php echo $user_last_name?>" required>
                      </div>
                    </div>

                 
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="firstname" value="<?php echo $user_first_name?>" required>
                      </div>
                    </div>
                  </div>
         

                <div class="row">
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $user_middle_name?>" name="middlename" required>
                      </div>
                    </div>
                
                       <div class="col-sm-6">
                      <div class="form-group">
                      <label>Name Extension</label>
                         <input type="text" value="<?php echo  $user_ext_name ?>" class="form-control" <?php echo $btnStatus; ?> name="ext_name">
                      </div>
                      </div>
                    </div>

                     <div class="row">
                         <div class="col-sm-7">
                      <div class="form-group">
               <label for="inputName">Department</label>
                <select class="form-control custom-select"  id="joName" <?php echo $btnStatus; ?> style="border-color: red;" onchange="sync()">
                  <option selected><?php echo  $user_department ?></option>
                  <?php while ($get_department = $get_department_data->fetch(PDO::FETCH_ASSOC)) { ?>
                     <option value="<?php echo
    $get_department['department']; ?>"><?php echo $get_department['department']; ?></option> <?php } ?>
                </select>
                </div>  
             </div>   
             <input type="hidden"  class="form-control" value="<?php echo  $user_code ?>"  <?php echo $btnStatus; ?> name="code" id="code">
              <input type="hidden"  class="form-control" value="<?php echo  $user_department ?>" <?php echo $btnStatus; ?> name="department" id="dept">
             <input type="hidden"  class="form-control" value="<?php echo  $user_abbre ?>" <?php echo $btnStatus; ?> name="abbre" id="abbre">
               

                       <div class="col-sm-5">
                      <div class="form-group">
                          <b><label>Designation</b></label>
                        <input type="text" class="form-control" value="<?php echo  $user_position ?>" <?php echo $btnStatus; ?> name="position" required>
             </div>  
             </div>                      
             </div> 

                    <div class="row">
                       <div class="col-sm-7">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $user_email_ad ?>" name="email" required>
                      </div>
                  </div>
                       <div class="col-sm-5">
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" value="<?php echo  $user_contact_number ?>"<?php echo $btnStatus; ?> name="contact_number" required>
                      </div>
                  </div>
                  </div>

                  <hr class="dashed">
                  <div class="row">
                    <div class="col-md-6">
                     <div class="form-group">
                 <label>Username</label>
                 <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $user_user_name?>" name="username" placeholder="Username">
               </div>
             </div>

             <div class="col-md-6">
            <div class="form-group">
                 <label>Password</label>
                <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo ""?>" name="password" disabled >
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
                       <a href="password_change.php?user_id=<?php echo $id_user?>" <?php echo $btnNew; ?> <?php echo $btnStatus; ?> class="btn btn-primary" style="padding: 5px 90px; font-size: 18px">Change Password</a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-center">
                    <div class="description-block">
                       <input type="submit" <?php echo $btnStatus; ?> name="edit" class="btn btn-primary" style="padding: 5px 120px; font-size: 20px" value="Update">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <a href="users.php?user_id=<?php echo $id_user?>" class="btn btn-default" style="padding: 5px 120px; font-size: 20px">Cancel</a>
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
