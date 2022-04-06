<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/update_photo_user.php'; ?>


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
                <h3 class="widget-user-username text-m"><i class="h1 mb-0 font-weight-bold">Uplaod Photo</i></h3>
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
                   <div class="card-body">

                         <?php if ($db_location=='') {?>
      <div class="col-12 col-sm-12">
               <div class="widget-user-image" align="center">
                <img class="img-circle elevation-5" id="image" src="../dist/img/no-photo-icon.png" width="300" height="300" vspace="10" alt="User Avatar">
              </div>

<?php }elseif($db_location<>'') {?>
      <div class="col-12 col-sm-12">
               <div class="widget-user-image" align="center">
                <img class="img-circle elevation-5" id="image" src="<?php echo (!empty([$db_location])) ? '../dist/img/'.$db_location : '../dist/img/no-photo-icon.png'; ?>" width="300" height="300" vspace="10" alt="User Avatar">
              </div>
<?php } ?>



<input type="hidden" class="form-control"  id="pic" name="location" value="<?php echo $db_location;?>" required>
 <input type="hidden" class="form-control" name="user_id" value="<?php echo $user_id;?>" required>
  
              <br>
             <div class="col-sm-4 border-right">
             <input class="text-sm" type ="file" name="myFiles" id="fileToUpload"  value="<?php echo $db_location;?>" style="align-items:center" onchange = "loadImage()">
           </div>
             <br>

  <div class="col-sm-11">
                      <div class="row">
                       
                     
                  </div>
                  </div>
                  </div>

         
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                       <a href="edit_profile.php" <?php echo $btnNew; ?> class="btn btn-primary" style="padding: 5px 120px; font-size: 20px">Back</a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                       <input type="submit" <?php echo $btnStatus; ?> name="update_profile" class="btn btn-primary" style="padding: 5px 120px; font-size: 20px" value="Update">
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
