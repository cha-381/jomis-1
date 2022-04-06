 <?php include 'includes/session.php'; ?>
 <?php include 'includes/header.php'; ?>

<body class="hold-transition sidebar-mini">
 <div class="wrapper">

 <?php include 'includes/navbar.php'; ?>
 <?php include 'includes/sidebar.php'; ?>



   <!-- Content Wrapper. Contains page content -->


     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-3">
      <h3> Dashboard </h3>


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
          <div class="col-lg-8">

     
           
            <div class="card card-primary">
              <div class="card-body" style="background-color: #fefbd8;" >

    <div class="w3-content w3-section" style="max-width:700px;">
  <img class="mySlides w3-animate-fading" src="../dist/img/lo.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="../dist/img/cityhall.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="../dist/img/vamos.jpg" style="width:100%">
</div>

<h3>Who we are</h3>
                 <p style="text-align: justify;  text-indent: 50px;">
The City of San Carlos together with the Information Technology and Computer Services Office under the office of City Administrator shall serve as the planning and implementing unit for information and technology-related programs and projects of the Local Government Unit of the City of San Carlos.                </p>


</div>
</div>
                 
                      <!-- /.card-header -->

          

            <div class="card card-primary card-outline">
              <div class="card-body" style="background-color: #fefbd8;" >
               <div id="London" class="tabcontent">
 <h3>Vision</h3>
                  <p style="text-align: justify;">
Achieve full automation in all Local Government Offices of the CIty of San Carlos to capacitate linkage, thus realizing tenets of accountability, transparency, efficiency and effective local governance.
                </p>
</div>

<div id="Paris" class="tabcontent">
   <h3>Mission</h3>
                 <p style="text-align: justify;  text-indent: 50px;">
      To establish an effective and functional Information Technology and Computer Services Office (ITCSO) to support the San Carlos City Local Government's objectives in improving the life of its contituents.
                </p>

</div>




<button class="tablink" onclick="openCity('London', this, 'blue')" id="defaultOpen">Vision</button>
<button class="tablink" onclick="openCity('Paris', this, 'blue')">Mission</button>

               
              </div>
            </div><!-- /.card -->
          </div>


              <div class="col-md-4">
                 <div class="card card-outline card-warning" style="padding: 16px;">
                  <h5 style="text-align:center"><i>Outline</i></h5>
                  <div class="col-md-12">

            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-info ">
              <span class="info-box-icon"><i class="fa fa-male"></i><i class="fa fa-male"></i><i class="fa fa-male"></i></span>

              <div class="info-box-content ">
                <span class="info-box-text">No. of Employees</span>
                <span class="info-box-number"><?php echo $get_all_emp1_data->rowCount()?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

                        <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fa fa-file"></i></span>

  
              <div class="info-box-content">
                <span class="info-box-text"> Created Job Order</span>
                <span class="info-box-number"><?php echo $get_createjo_data->rowCount()?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fa fa-folder-open"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Accomplished Payrolls</span>
                <span class="info-box-number"><?php echo $get_payroll_data->rowCount()?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number"><?php echo $get_all_user3_data->rowCount()?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->


</div>
        </div>

        <div class="col-md-12">
    <div class="card card-warning card-outline"  style="padding: 5px; align: center">
      <div class="card-body" style="background-color: #b5e1e8;" >
     <h1 style="text-align:center"><b>Today</b></h1>
      <hr>
    <h1 style="text-align:center"> <b><?php date_default_timezone_set('Asia/Manila'); echo strtoupper(date("l")[0]),strtoupper(date("l")[1]),strtoupper(date("l")[2])." ". "|". " ". date('d');?></b></h1> <br>
    
              </div>
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
