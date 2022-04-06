 <?php include 'includes/session.php'; ?>
 <?php include 'includes/header.php'; ?>

<body class="hold-transition sidebar-mini">
 <div class="wrapper">

 <?php include 'includes/navbar.php'; ?>
 <?php include 'includes/sidebar.php'; ?>
  <?php include 'update_print_dept.php'; ?>



   <!-- Content Wrapper. Contains page content -->


     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-3">
      <h3> Print</h3>


           </div>
           <div class="col-sm-6">
           
           </div>
         </div>
       </div>
     </div>
     <!-- Content Header End -->

   <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

     
 <div class="card card-outline card-warning" style="padding: 16px;">
<div class="card-header">
<h5 style="text-align:left"><i>Office/Department</i></h5>
</div>


<form method="post" action="" enctype="multipart/form-data">  
    <div class="col-sm-5">
    <div class="input-group">   
      <br>
    <a type="button" href="department.php" id="print" data-toggle="tooltip" title="Back" class="btn btn-default"><i class="fa fa-arrow-left"></i></a> 
   <input type="text"  name="PrintDept" id="dept" value="<?php echo $db_print_dept?>"class="form-control">
<?php if ($db_print_dept=="All") { ?>
    <a type="button" href="../plugins/TCPDF/User/list_dept.php" id="print" tooltip="Print" class="btn btn-success">Print</a>
<?php }elseif($db_print_dept!="All") {?>
   <a type="button" href="../plugins/TCPDF/User/filter_dept.php?DeptCharge=<?php echo $db_print_dept?>" id="print" tooltip="Print" class="btn btn-success">Print</a>
<?php } ?>
    </div>
    </div>
 
 <hr>
<input type="hidden" name="user_id" id="dept2" value="<?php echo $db_user?>"class="form-control">
   
 







</div>
        </div>

       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   </div> 
   <!-- Content-Wrapper End -->
   <div class="col-md-1"></div>
 </div>
     </div>    
 
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


  function sync() { var dept = document.getElementById('dept'); dept.value = "Office of the City Mayor"; }
   function sync1() { var dept = document.getElementById('dept'); dept.value = "Office of the City Administrator"; }
</script>



 <?php include 'includes/scripts.php'; ?>
 <?php include 'includes/footer.php'; ?>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>

<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
