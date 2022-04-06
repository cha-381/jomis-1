<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/insert.php'; ?>

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
      <li class="breadcrumb-item"><a href="../index">Home</a></li>
      <li class="breadcrumb-item active">Register</li>
         </ol>
         </div>

       
    </section>
 
<!-- Main content -->
         
           

                 <form method="post" action="" enctype="multipart/form-data">

                   

       
               <?php echo $alert_msg; ?>
          
                <div class="widget-user-header bg-info">
                <h3 class="widget-user-username text-xl"><i class="h1 mb-0 font-weight-bold">User Registration Form</i></h3>
                <h5 class="widget-user-desc"></h5>
              </div>
             
              <div class="jumbotron">
                <fieldset>             
              <div class="row">
                <div class="col-12 col-sm-3">
               <div class="widget-user-image" align="left">
                <img class="img-circle elevation-5" id="image" src="../dist/img/no-photo-icon.png" width="200" height="200" vspace="10" alt="User Avatar">
              </div>
              <br>
             
             <label align="right"><i style="color:grey">*******</i>Upload Photo<i style="color:grey">*******</i></label>
             <input class="text-sm" type ="file" name="myFiles" id="fileToUpload"  onchange = "loadImage()">
             <br>
             <br>
                         

                    <div class="col-sm-11">
                   <div class="row">  
                   <label>Status</label>      
                    <div class="input-group">            
                      <select class="form-control custom-select" <?php echo $btnStatus; ?> name="userStatus" required>
                  <option style="color:red;">Pending</option>
                </select>
              </div>
            </div>
          </div>
        </div>


             <div class="card-body">
                <form role="form">
                   <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                          <label>Last Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="lastname" required>
                      </div>
                    </div>

                 
                    
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>First Name</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="firstname" required>
                      </div>
                    </div>
         

                
                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="middlename" required>
                      </div>
                    </div>
                
                       <div class="col-sm-3">
                      <div class="form-group">
                      <label>Name Extension</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="extname">
                      </div>
                      </div>
                    </div>

                     <div class="row">
                         <div class="col-sm-8">
                      <div class="form-group">
                <label for="inputName">Department</label>
             
                <select class="form-control custom-select" name="department" id="joName" onchange="sync()">
                  <option selected disabled>Please select....</option>
                  <?php while ($get_department = $get_department_data->fetch(PDO::FETCH_ASSOC)) { ?>
                     <option value="<?php echo
    $get_department['department']; ?>"><?php echo $get_department['department']; ?></option> <?php } ?>
                </select>
                </div>  
             </div>   
             
               

                       <div class="col-sm-4">
                      <div class="form-group">
                          <b><label>Designation</b></label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="position" required>
             </div>  
             </div>                      
             </div> 

                    <div class="row">
                       <div class="col-sm-7">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="email" required>
                      </div>
                  </div>
                       <div class="col-sm-5">
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="contact_number" required>
                      </div>
                  </div>
                  </div>

                  <hr class="dashed">
                  <div class="row">
                    <div class="col-md-6">
                     <div class="form-group">
                 <label>Username</label>
               <input type="text" class="form-control" name="username" <?php echo $btnStatus; ?>placeholder="Username" required>
               </div>
             </div>

             <div class="col-md-6">
            <div class="form-group">
                 <label>Password</label>
                <input type="password" class="form-control" <?php echo $btnStatus; ?> name="password" placeholder="Password" required>
            </div>
               </div>
             </div> 
              </fieldset>
              </div>
             </div>
           
<div class="card-footer" align="center">
              <a href="add.php">
              <input type="button"  <?php echo $btnNew; ?>  class="btn btn-primary" value="New">
              <input type="submit"  <?php echo $btnStatus; ?> name="insert" class="btn btn-primary" value="Save">
              <a href="../index.php">
              <input type="button" name="cancel" class="btn btn-default" value="Cancel">       
              </a>
           </div>
             <br>
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
              
            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });


    }); 
</script>





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


<?php include 'includes/scripts.php'; ?>
</body>
</html>