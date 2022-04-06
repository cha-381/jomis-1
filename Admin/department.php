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
          <div class="col-lg-12">

     
 <div class="card card-outline card-warning" style="padding: 16px;">
<div class="card-header">
<h5 style="text-align:left"><i>Select Department</i></h5>
</div>


<form method="post" action="" enctype="multipart/form-data">  
    <div class="col-sm-6">
    <div class="input-group"> 
     <a type="button" href="page.php" id="print" data-toggle="tooltip" title="Back" class="btn btn-default"><i class="fa fa-arrow-left"></i></a> 
   <input type="text"  name="PrintDept" id="dept" value="<?php echo $db_print_dept?>"class="form-control">
    <a type="button" href="view_print.php" id="print" data-toggle="tooltip" title="Print" class="btn btn-success">View Data</a>
    </div>
    </div>
 
<input type="hidden" name="user_id" id="dept2" value="<?php echo $db_user?>"class="form-control">
   
<div class="card-body">
<div class="row">
<div class="col-3">
<div class="info-box mb- bg-info">
<button type="submit" onclick="sync4()" name="insert" style="width:500px" class="btn btn-info">All</button>
</div>


<div class="info-box mb- bg-info">
<button type="submit" onclick="sync()" name="insert" style="width:500px" class="btn btn-info">Accounting and Internal Audit Services Office</button>
</div>


<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync1()" name="insert" style="width:500px"  class="btn btn-info">Bids and Awards Committee-Secretariat</button>
</div>

<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync2()" name="insert" style="width:500px"  class="btn btn-info">Bureau of Fire Protection</button>
</div>

<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync3()" name="insert" style="width:500px"  class="btn btn-info">Business Permit and Licensing Office</button>
</div>

<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync5()" name="insert" style="width:500px"  class="btn btn-info">Casuals Office</button>
</div>

<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync6()" name="insert" style="width:500px"  class="btn btn-info">City Agricultures Office</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync7()" name="insert" style="width:500px"  class="btn btn-info">City Budget and Management Office</button>
</div>


<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync8()" name="insert" style="width:500px"  class="btn btn-info">City Disaster And Risk Reduction Management Office</button></div>


<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync9()" name="insert" style="width:500px"  class="btn btn-info">City Engineering Office</button>
</div>
</div>


<div class="col-3">
<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync10()" name="insert" style="width:500px"  class="btn btn-info">City Enviroment and Management Office</button>
</div>


<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync12()" name="insert" style="width:500px"  class="btn btn-info">City Health Office</button>
</div>

<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync13()" name="insert" style="width:500px"  class="btn btn-info">City Legal Office</button>
</div>


<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync14()" name="insert" style="width:500px"  class="btn btn-info">City Planning and Development Office</button></div>


<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync15()" name="insert" style="width:500px"  class="btn btn-info">City Prosecution Office</button>
</div>


<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync16()" name="insert" style="width:500px"  class="btn btn-info">City Public Library</button>
</div>

<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync17()" name="insert" style="width:500px"  class="btn btn-info">City Social Welfare and Development Office</button>
</div>


<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync18()" name="insert" style="width:500px"  class="btn btn-info">City Tourism Office</button>
</div>


<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync19()" name="insert" style="width:500px"  class="btn btn-info">City Waterworks Department</button>
</div>

<div class="info-box mb-3 bg-info ">
<button type="submit" onclick="sync20()" name="insert" style="width:500px"  class="btn btn-info">Cooperatives and Livelihood Development Office</button>
</div>
</div>


<div class="col-3">
<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync21()" name="insert" style="width:500px"  class="btn btn-info">Department of Interior and Local Government</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync22()" name="insert" style="width:500px"  class="btn btn-info">Department of Education</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync23()" name="insert" style="width:500px"  class="btn btn-info">General Services Department</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync11()" name="insert" style="width:500px"  class="btn btn-info">Information Technology and Computer Services </button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync24()" name="insert" style="width:500px"  class="btn btn-info">Municipal Trial Court in Cities</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync25()" name="insert" style="width:500px"  class="btn btn-info">Office of Human Resource and Management</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync26()" name="insert" style="width:500px"  class="btn btn-info">Office of the City Administrator</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync27()" name="insert" style="width:500px"  class="btn btn-info">Office of the City Agriculturist</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync28()" name="insert" style="width:500px"  class="btn btn-info">Office of the City Assessor</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync29()" name="insert" style="width:500px"  class="btn btn-info">Office of the City Auditor</button>
</div>
</div>

<div class="col-3">
<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync30()" name="insert" style="width:500px"  class="btn btn-info">Office of the City Mayor</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync31()" name="insert" style="width:500px"  class="btn btn-info">Office of the City Treasurer</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync32()" name="insert" style="width:500px"  class="btn btn-info">Philippine National Police</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync33()" name="insert" style="width:500px"  class="btn btn-info">Public Employment Service Office</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync40()" name="insert" style="width:500px"  class="btn btn-info">Peoples Park Management Office</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync34()" name="insert" style="width:500px"  class="btn btn-info">Regional Trial Court and Other Courts</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync35()" name="insert" style="width:500px"  class="btn btn-info">Register of Deeds</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync36()" name="insert" style="width:500px"  class="btn btn-info">San Carlos City Hospital</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync37()" name="insert" style="width:500px"  class="btn btn-info">Sangguniang Panlungsod</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync38()" name="insert" style="width:500px"  class="btn btn-info">Solid Waste Management Office</button>
</div>

<div class="info-box mb-3 bg-info ">
 <button type="submit" onclick="sync39()" name="insert" style="width:500px"  class="btn btn-info">Traffic Management Authority</button>
</div>
</div>

 </form>   



   




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

 function sync4() { var dept = document.getElementById('dept'); dept.value = "All"; }
  function sync() { var dept = document.getElementById('dept'); dept.value = "Accounting and Internal Audit Services Office"; }
  function sync1() { var dept = document.getElementById('dept'); dept.value = "Bids and Awards Committee-Secretariat"; }
  function sync2() { var dept = document.getElementById('dept'); dept.value = "Bureau of Fire Protection"; }
 function sync3() { var dept = document.getElementById('dept'); dept.value = "Business Permit and Licensing Office"; }
 function sync5() { var dept = document.getElementById('dept'); dept.value = "Casuals Office"; }
 function sync6() { var dept = document.getElementById('dept'); dept.value = "City Agricultures Office"; }
 function sync7() { var dept = document.getElementById('dept'); dept.value = "City Budget and Management Office"; }
 function sync8() { var dept = document.getElementById('dept'); dept.value = "City Disaster And Risk Reduction Management Office"; }
 function sync9() { var dept = document.getElementById('dept'); dept.value = "City Engineering Office"; }
 function sync10() { var dept = document.getElementById('dept'); dept.value = "City Environment Management Office"; }
 function sync11() { var dept = document.getElementById('dept'); dept.value = "Information Technology and Computer Services Office"; }
 function sync12() { var dept = document.getElementById('dept'); dept.value = "City Health Office"; }
  function sync13() { var dept = document.getElementById('dept'); dept.value = "City Legal Office"; }
 function sync14() { var dept = document.getElementById('dept'); dept.value = "City Planning and Development Office"; }
  function sync15() { var dept = document.getElementById('dept'); dept.value = "City Prosecution Office"; }
 function sync17() { var dept = document.getElementById('dept'); dept.value = "City Social Welfare and Development Office"; }
 function sync18() { var dept = document.getElementById('dept'); dept.value = "City Tourism Office"; }
  function sync19() { var dept = document.getElementById('dept'); dept.value = "City Waterworks Department"; }
   function sync20() { var dept = document.getElementById('dept'); dept.value = "Cooperatives and Livelihood Development Office"; }
function sync21() { var dept = document.getElementById('dept'); dept.value = "Department of Interior and Local Government"; }
function sync22() { var dept = document.getElementById('dept'); dept.value = "Department of Education"; }
function sync23() { var dept = document.getElementById('dept'); dept.value = "General Services Department"; }
function sync24() { var dept = document.getElementById('dept'); dept.value = "Municipal Trial Court in Cities"; }
function sync25() { var dept = document.getElementById('dept'); dept.value = "Office of Human Resource and Management"; }
function sync26() { var dept = document.getElementById('dept'); dept.value = "Office of the City Administrator"; }
function sync27() { var dept = document.getElementById('dept'); dept.value = "Office of the City Agriculturist"; }
function sync28() { var dept = document.getElementById('dept'); dept.value = "Office of the City Assessor"; }
function sync29() { var dept = document.getElementById('dept'); dept.value = "Office of the City Auditor"; }
function sync30() { var dept = document.getElementById('dept'); dept.value = "Office of the City Mayor"; }
function sync31() { var dept = document.getElementById('dept'); dept.value = "Office of the City Treasurer"; }
function sync32() { var dept = document.getElementById('dept'); dept.value = "Philippine National Police"; }
function sync33() { var dept = document.getElementById('dept'); dept.value = "Public Employment Service Office"; }
function sync34() { var dept = document.getElementById('dept'); dept.value = "Regional Trial Court and Other Courts"; }
function sync35() { var dept = document.getElementById('dept'); dept.value = "Register of Deeds"; }
function sync36() { var dept = document.getElementById('dept'); dept.value = "San Carlos City Hospital"; }
function sync37() { var dept = document.getElementById('dept'); dept.value = "Sangguniang Panlungsod"; }
function sync38() { var dept = document.getElementById('dept'); dept.value = "Solid Waste Management Office"; }
function sync39() { var dept = document.getElementById('dept'); dept.value = "Traffic Management Authority"; }
function sync40() { var dept = document.getElementById('dept'); dept.value = "Peoples Park Management Office"; }

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
