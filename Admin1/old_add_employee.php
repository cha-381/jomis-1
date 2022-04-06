<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'add_jo.php'; ?>

<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
        Add Job Order
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Register</li>
         </ol>
         </div>

       
    </section>
 
<!-- Main content -->
          <div class="col-md-12">
          <div class="card">
           

                 <form method="post" action="" enctype="multipart/form-data">

                   

           <div class="card-body"> 
           <div class="container">
            <div align="center">
               <?php echo $alert_msg; ?>
             </div>
           <i style="font-size:25px"><i style="color:blue" align="center">Personal Information</i></i>       
             
              <div class="jumbotron">
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
                        <input type="text" style="text-align: center" <?php echo $btnStatus; ?> class="form-control" name="code"  placeholder="Enter ID" required>
                        <label style="text-align: center">********<i class="bg-yellow">Identification Card No</i>********</label>
                      </div>
                  </div>
             

                    <div class="col-sm-11">
                   <div class="row">  
                   <label>Status</label>      
                    <div class="input-group">            
                      <select class="form-control custom-select" <?php echo $btnStatus; ?> name="e_status">
                  <option selected>Please select...</option>
                  <option>Active</option>
                  <option>Inactive</option>
                </select>
              </div>
            </div>
          </div>
        </div>


             <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>First Name</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="firstname" required>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="middlename" required>
                      </div>
                    </div>
                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="lastname" required>
                      </div>
                      </div>
                    </div>

                        <div class="row">
                       <div class="col-sm-8">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="address" required>
                      </div>
                  </div>
                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Barangay</label>
                       <select class="form-control custom-select" <?php echo $btnStatus; ?> name="brgy">
                  <option selected disabled>Please select....</option>
                     <?php while ($get_brgy = $get_barangay_data->fetch(PDO::FETCH_ASSOC)) { ?>
                     <option value="<?php echo
    $get_brgy['barangay']; ?>"><?php echo $get_brgy['barangay']; ?></option> <?php } ?>
                </select>
                  </div>
                  </div>
                </div>

                    <div class="row">
                       <div class="col-sm-7">
                      <div class="form-group">
                        <label>City/Municipality</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="city" required>
                      </div>
                  </div>
                       <div class="col-sm-5">
                      <div class="form-group">
                        <label>Province</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="province" required>
                      </div>
                  </div>
                  </div>

                  <div class="row">
                     <div class="col-sm-5">
                      <div class="form-group">
                <b><label>Birth Date </b><i style="color: red;"> (mm/dd/yyyy)</i></label>
                 <div class="input-group date mb-3" data-provide="datepicker" id="dateBirth">
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="dateBirth" placeholder="Date" value="">
              </div>
          </div>
        </div>
                  
                       <div class="col-sm-7">
                      <div class="form-group">
                        <label>Place of Birth</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="placebirth" required>
                      </div>
                      </div>
                    </div>

                       <div class="row">
                        <div class="col-sm-4">
                      <div class="form-group">
                        <label>Citizenship</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="citizen" required>
                      </div>
                      </div>
                
                   


                 
                     <div class="col-sm-4">
                      <div class="form-group">
                         <label>Civil Status</label>
                <select class="form-control custom-select" <?php echo $btnStatus; ?> name="status">
                  <option selected>Please select....</option>
                     <option>Single</option> 
                     <option>Married</option>
                     <option>Widowed</option>
                     <option>Seperated</option> 
                </select>
             </div>  
             </div>                      
                       <div class="col-sm-4">
                      <div class="form-group">
                         <label>Gender</label>
                <select class="form-control custom-select" <?php echo $btnStatus; ?> name="gender" >
                  <option selected>Please select....</option>
                     <option>Male</option> 
                     <option>Female</option>
                </select>
             </div>  
             </div> 
             </div> 
                    
                    <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                        <label>Skills</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="skills" required>
                      </div>
                  </div>
                </div>

                  <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                        <label>Remarks</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="remarks" required>
                      </div>
                  </div>
                    </div>         
              </div>
             </div>
              </div>
            </div>

         <div class="container">
            <div class="card-body">
           <i style="font-size:25px"><i style="color:blue" align="center">Family Background</i></i>  <div class="jumbotron">

              <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                       <label>Spouse's Surname</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="spouseLn" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                       <label>First Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="spouseFn" >
                      </div>
                    </div>


                     <div class="col-sm-4">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="spouseMn" >
                      </div>
                    </div>
                    </div>

                      <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="blood" required>
                      </div>
                      </div>
                    </div>

         <hr class="dashed">

                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
        <b> <label>Name of Children</b><i style="color: red;"> (Write full name)</i></label>
       </div>
     </div>

                      <div class="col-sm-4">
                      <div class="form-group">
        <b> <label>Date of Birth</b><i style="color: red;"> (mm/dd/yyyy)</i></label>
       </div>
     </div>
   </div>



                <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="child1" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <div class="input-group date mb-3" data-provide="datepicker" id="dateBirth">
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB1" placeholder="Date" value="">
              </div>
          </div>
        </div>
                  </div>
             
    

          
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">   
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="child2" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                         <div class="input-group date mb-3" data-provide="datepicker" id="dateBirth">
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB2" placeholder="Date" value="">
              </div>
          </div>
        </div>
                  </div>



                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="child3" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                       <div class="input-group date mb-3" data-provide="datepicker" id="dateBirth">
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB3" placeholder="Date" value="">
              </div>
          </div>
        </div>
                  </div>


                      <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="child4" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <div class="input-group date mb-3" data-provide="datepicker" id="dateBirth">
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB4" placeholder="Date" value="">
              </div>
          </div>
        </div>
                  </div>

                      <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="child5" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                       <div class="input-group date mb-3" data-provide="datepicker" id="dateBirth">
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB5" placeholder="Date" value="">
              </div>
          </div>
        </div>
                  </div>
                </div>
                </div>
                </div>





           <div class="container">
            <div class="card-body">
           <i style="font-size:25px"><i style="color:blue" align="center">Current Work Details</i></i>  <div class="jumbotron">
           
             
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Department</label>
                        <select class="form-control custom-select" <?php echo $btnStatus; ?> name="dept">">
                  <option selected>Please select....</option>
                  <?php while ($get_dept = $get_department3_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_dept['department']; ?>"><?php echo $get_dept['department']; ?></option> <?php } ?>
                </select>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="designation" required>
                      </div>
                    </div>


                     <div class="col-sm-5">
                      <div class="form-group">
                        <label>Charges</label>
                        <select class="form-control custom-select" <?php echo $btnStatus; ?> name="charges">">
                  <option selected>Please select....</option>
                  <?php while ($get_proj = $get_jo_data->fetch(PDO::FETCH_ASSOC)) { ?>  
                   <?php if ($get_proj['Department']==$db_department) {?>
                    <option value="<?php echo
    $get_proj['ProjectName']; ?>"><?php echo $get_proj['ProjectName']; ?></option> 
    <?php } ?>  <?php } ?>
                </select>
                      </div>
                    </div>
                    </div>

                      <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Starting Date</label>
                        <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="dateStart" placeholder="Date" value="">
              </div>
          </div>
        </div>

               
                       <div class="col-sm-8">
                      <div class="form-group">
                        <label>Eligibility</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="eligibility" required>
                      </div>
                      </div>
                    </div>

                        <div class="row">
                          <div class="col-sm-3">
                      <div class="form-group">
                         <label>Category</label>
                <select class="form-control custom-select" <?php echo $btnStatus; ?> name="category">
                  <option selected>Please select....</option>
                     <option>Rotating</option> 
                     <option>Non-rotating</option>
                </select>
             </div>  
             </div>                      


                       <div class="col-sm-5">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="email" required>
                      </div>
                  </div>
                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Contact No.</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="contact_number" required>
                      </div>
                      </div>
                    </div>
                   
                <hr class="dashed">

                      <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>SSS</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="sss" required>
                      </div>
                      </div>

                        <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>TIN #</i></label>
                         <input type="text" class="form-control"<?php echo $btnStatus; ?>  name="tin" required>
                      </div>
                      </div>


                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>Philhealth</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="philhealth" required>
                      </div>
                      </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>Pag-ibig MID No.</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?>  name="pag_ibig" required>
                      </div>
                      </div>

                        <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>ATM SA#</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="atm" required>
                      </div>
                      </div>
                    </div>

                 <hr class="dashed">
 

                        <div class="col-sm-4">
                      <div class="form-group">
                        <label></label>
                      </div>
                      </div>

                     
                         <div class="row">
                      <div class="col-sm-4">
                      <div class="form-group">
                        <label>CTC No.</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="ctc" required>
                      </div>
                      </div>


                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Date issued</label>
                         <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="datectc" placeholder="Date" value="">
              </div>
                      </div>
                      </div>


                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Placed issued</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="ctc_place" required>
                      </div>
                      </div>
                     </div>
              </div>
            </div>



          <div class="container">
            <div class="card-body">
           <i style="font-size:25px"><i style="color:blue" align="center">Education Details</i></i>  <div class="jumbotron">

              <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                      <label>Educational Attainment</label>
                        <select class="form-control custom-select" <?php echo $btnStatus; ?> name="attainment">">
                  <option selected>Please select....</option>
                  <?php while ($get_attainment = $get_att_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_attainment['level']; ?>"><?php echo $get_attainment['level']; ?></option> <?php } ?>
                </select>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                       <label>Course</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="course" >
                      </div>
                    </div>


                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Award/s</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="awards" >
                      </div>
                    </div>
                    </div>



         <hr class="dashed">

                  <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
         <label><i class="h8 font-weight-bold bg-yellow">COLLEGE INFORMATION</i></label>
       </div>
     </div>
   </div>



                <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Name of School</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="colschool" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="colyear" >
                      </div>
                    </div>
                  </div>
             
    

           <label><i class="h8 font-weight-bold bg-yellow">SECONDARY INFORMATION</i></label>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Name of School</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="secschool" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>  name="secyear" >
                      </div>
                    </div>
                  </div>



           <label><i class="h8 font-weight-bold bg-yellow">PRIMARY INFORMATION</i></label>

                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Name of School</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="elemschool" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="elemyear" >
                      </div>
                    </div>
                  </div>

                   <label><i class="h8 font-weight-bold bg-yellow">VOCATIONAL/TRADE COURSE</i></label>

                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Name of School</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="vocationalschool" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="vocationalyear" >
                      </div>
                    </div>
                  </div>

                    <label><i class="h8 font-weight-bold bg-yellow">GRADUATE STUDIES</i></label>

                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Name of School</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="graduateschool" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="graduateyear" >
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                </div>


            <div class="container">
            <div class="card-body">
                <i style="font-size:25px"><i style="color:blue" >Work History</i></i> <div class="jumbotron"> 
                <div class="card card-outline card-secondary">
                <div class="card-body">
                   <div class="row">
                  <div class="col-sm-4">
                  <div class="form-group">
                   <label><i class="h8 mb-0 font-weight-bold bg-green">EMPLOYEER 1</i></label>
                  </div>
                </div>

                 <div class="col-sm-4">
                      <div class="form-group">
                       <label><i class="h8 font-weight-bold bg-green">EMPLOYEER 2</i></label>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><i class="h7 font-weight-bold bg-green">EMPLOYEER 3</i></label>
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Employeer</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="nameone">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Employeer</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="nametwo" >
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <label>Employeer</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="namethree">
                      </div>
                    </div>
                  </div>

                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Designation</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="designationone" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="designationtwo" >
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="designationthree" >
                      </div>
                    </div>
                  </div>

                                     <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Salary</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="salaryone" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Salary</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="salarytwo" >
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <label>Salary</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="salarythree" >
                      </div>
                    </div>
                  </div>

               <div class="vl"></div>
               <div class="vl1"></div>


                   <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Work Duration</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="workone" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Work Duration</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="worktwo" >
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <label>Work Duration</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="workthree">
                      </div>
                    </div>
                  </div>


                   
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
                       <input type="submit" <?php echo $btnStatus; ?> name="insert" class="btn btn-primary" style="padding: 5px 120px; font-size: 20px" value="Save">
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
