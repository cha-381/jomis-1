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
        Add Employee
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
                        <input type="hidden" style="text-align: center" <?php echo $btnStatus; ?> class="form-control" name="code" value="<?php echo $count_em?>" required>
                        <input type="text" style="text-align: center" <?php echo $btnStatus; ?> class="form-control" name="control"  placeholder="Enter No.">
                        <label style="text-align: center">***********<i class="bg-yellow">Control No</i>************</label>
                      </div>
                  </div>
             

                    <div class="col-sm-11">
                   <div class="row">  
                   <label>Status</label>      
                    <div class="input-group">            
                      <select class="form-control custom-select" <?php echo $btnStatus; ?> name="e_status" required>
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
                    <div class="col-sm-6">
                      <div class="form-group">
                          <label>Last Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="lastname" required>
                      </div>
                    </div>

                 
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="firstname" required>
                      </div>
                    </div>
                      </div>

                       <div class="row">
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="middlename" required>
                      </div>
                    </div>
                
                       <div class="col-sm-6">
                      <div class="form-group">
                      <label>Name Extension</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="extname">
                      </div>
                      </div>
                    </div>
  <div class="row">
                       <div class="col-sm-8">
                      <div class="form-group">
                          <b><label>Address</b><i style="color: red; font-size: 12px;"> (House/Block/Lot No.), (Street), (Subdivision/Village)</i></label>
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
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="dateBirth" placeholder="Date" value="" required>
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
                <select class="form-control custom-select" <?php echo $btnStatus; ?> name="status" required>
                  <option selected disabled>Please select....</option>
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
              </div>
             </div>
              </div>
            </div>

            <div class="container">
            <div class="card-body">
          <div class="jumbotron">
           
             
                  <div class="row">
                       <div class="col-sm-4">
                      <div class="form-group">
                         <label>Contact No.</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="contact_number">
                      </div>
                  </div>
                       <div class="col-sm-8">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="email">
                      </div>
                      </div>
                    </div>
                   
                <hr class="dashed">
 <label><i style="color:red; font-size: 14pxs;">Reference Number</i></label>
                      <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                         <label><i>Pag-ibig MID No.</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?>  name="pag_ibig">
                      </div>
                      </div>

                        <div class="col-sm-4">
                      <div class="form-group">
                         <label><i>Philhealth</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="philhealth" >                       
                      </div>
                      </div>


                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>SSS</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="sss">
                      </div>
                      </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>TIN #</i></label>
                         <input type="text" class="form-control"<?php echo $btnStatus; ?>  name="tin">
                      </div>
                      </div>

                        <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>ATM SA#</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="atm">
                      </div>
                      </div>
                    </div>
              </div>
            </div>


         <div class="container">
            <div class="card-body">
           <i style="font-size:25px"><i style="color:blue" align="center">Family Background</i></i>  <div class="jumbotron">

              <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                       <label>Spouse's Surname</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="spouseLn" >
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                       <label>First Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="spouseFn" >
                      </div>
                    </div>


                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="spouseMn" >
                      </div>
                    </div>

                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Name Extension</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="spouseEn" >
                      </div>
                    </div>
                    </div>

                      <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="spouseOcc" >
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
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB1"  value="">
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
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB2"   value="">
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
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB3"  value="">
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
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB4"   value="">
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
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="childB5"  value="">
              </div>
          </div>
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
                          <label><b>NAME OF SCHOOL</b></label>
                        </div>
                        </div>
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label><b>PERIOD OF ATTENDANCE</b></label>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><b>HONORS RECEIVED</b></label>
                      </div>
                    </div>
   </div>


                   <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                       <input type="text" class="form-control" placeholder="PRIMARY INFORMATION" <?php echo $btnStatus; ?> name="elemschool" >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> name="elemyear" >
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="elemaward" >
                      </div>
                    </div>
                  </div>
         
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                     <input type="text" class="form-control" placeholder="SECONDARY INFORMATION" <?php echo $btnStatus; ?> name="secschool" >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                   <input type="text" class="form-control" <?php echo $btnStatus; ?>  name="secyear" >
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="secaward" >
                      </div>
                    </div>
                  </div>


               
             

                  <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="VOCATIONAL/TRADE COURSE" <?php echo $btnStatus; ?> name="vocationalschool" >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                   <input type="text" class="form-control" <?php echo $btnStatus; ?> name="vocationalyear" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="vocationalaward" >
                      </div>
                    </div>
                  </div>

              <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                     <input type="text" placeholder="COLLEGE INFORMATION" class="form-control" <?php echo $btnStatus; ?> name="colschool" >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="colyear" >
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="colaward" >
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                       <input type="text" class="form-control" placeholder="GRADUATE STUDIES" <?php echo $btnStatus; ?> name="graduateschool" >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                     <input type="text" class="form-control" <?php echo $btnStatus; ?> name="graduateyear" >
                      </div>
                    </div>
                      <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="graduateaward" >
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                </div>

                 <div class="container">
            <div class="card-body">
           <i style="font-size:25px"><i style="color:blue" align="center">Civil Service Eligibility</i></i>  <div class="jumbotron">
           
             
                  <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                        <label>Eligibility</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="eligibility">
                      </div>
                      </div>
                    </div>
              </div>
            </div>


             <div class="container">
            <div class="card-body">
                <i style="font-size:25px"><i style="color:blue" >Work Experience</i></i> <div class="jumbotron"> 
              
                     <div class="row"> 
                       <div class="col-sm-3">
                      <div class="form-group">
                        <label><b>Work Duration</b><i style="color: red; font-size: 10px;"> (Incusive Dates)</i></label>
                    </div>
                  </div>


                 <div class="col-sm-3">
                      <div class="form-group">
                       <label><b>DESIGNATION</b></label>
                      </div>
                    </div>

                       <div class="col-sm-3">
                  <div class="form-group">
                   <label><b>EMPLOYEER</b></label>
                  </div>
                </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label><b>SALARY</b></label>
                    </div>
                  </div>        
                </div>

                <div class="row">
                   <div class="col-sm-3">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="workone" >
                      </div>
                    </div>

                     <div class="col-sm-3">
                      <div class="form-group">
                       <input type="text" class="form-control" <?php echo $btnStatus; ?> name="designationone" >
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                       <input type="text" class="form-control" placeholder="Employeer 1" <?php echo $btnStatus; ?> name="nameone">
                      </div>
                    </div>
                   
                     <div class="col-sm-3">
                     <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> name="salaryone" >
                      </div>
                    </div>
                     </div>



                    <div class="row">
                       <div class="col-sm-3">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> name="worktwo" >
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="designationtwo" >
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Employeer 2"  <?php echo $btnStatus; ?> name="nametwo" >
                      </div>
                    </div>
                   
                    
                    <div class="col-sm-3">
                      <div class="form-group">
                       <input type="text" class="form-control" <?php echo $btnStatus; ?> name="salarytwo" >
                      </div>
                    </div>                  
                     </div>

                        <div class="row">
                           <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="workthree">
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="designationthree" >
                      </div>
                    </div>

                     <div class="col-sm-3">
                      <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Employeer 3" <?php echo $btnStatus; ?> name="namethree">
                      </div>
                    </div>
                           
                     <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="salarythree" >
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
                        <label>Assigned Office</label>
                        <select class="form-control select2" <?php echo $btnStatus; ?>  name="dept" required>
                  <option selected>Please select....</option>
                  <?php while ($get_dept = $get_department4_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_dept['department']; ?>"><?php echo $get_dept['department']; ?></option> <?php } ?>
                </select>
                      </div>
                    </div>

                      <div class="col-sm-4">
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="designation">
                      </div>
                    </div>    

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Department <i style="color: red; font-size: 12px;">(Charge)</i></label>
                        <select class="form-control select2" <?php echo $btnStatus; ?> name="deptcharge" required>
                  <option selected>Please select....</option>
                  <?php while ($get_dept = $get_department3_data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo
    $get_dept['department']; ?>"><?php echo $get_dept['department']; ?></option> <?php } ?>
                </select>
                      </div>
                    </div>    
  </div>
                         <input type="hidden" class="form-control" <?php echo $btnStatus; ?> name="charges">
           


                        

                     <div class="row">
                      
                          <div class="col-sm-3">
                      <div class="form-group">
                         <label>Work Status</label>
                <select class="form-control custom-select" <?php echo $btnStatus; ?> name="category">
                  <option selected>Please select....</option>
                     <option>Rotating</option> 
                     <option>Non-rotating</option>
                      <option>Contract of Service</option> 
                     <option>MOA</option>
                     <option>Others</option>
                </select>
             </div>  
             </div> 

             <div class="col-sm-3">
                      <div class="form-group">
                        <label>if Others pls. Specify</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="others">
                      </div>
                    </div>    

                    <div class="col-sm-3">
                      <div class="form-group">
                         <label>Date Start</label>
                        <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                <input type="text" id="datepicker" <?php echo $btnStatus; ?> class="form-control" name="dateStart" placeholder="Date" value="">
              </div>
                    </div>
                  </div>

                              
                

                   <div class="col-sm-3">
                      <div class="form-group">               
                        <label>Date End</label>
                        <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text "><i class="fa fa-calendar"></i></span>  </div>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="designation">
                     </div>
          </div>
           </div>
             </div>
                   
                   
                <hr class="dashed">

                     

                         <div class="row">
                      <div class="col-sm-4">
                      <div class="form-group">
                        <label>CTC No.</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="ctc" >
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
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> name="ctc_place" >
                      </div>
                      </div>
                     </div>
              </div>
            </div>

              <div class="container">
            <div class="card-body">
           <i style="font-size:25px"><i style="color:blue" align="center">Other Information</i></i>  <div class="jumbotron">
           
             
                  <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                       <label>Skills</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="skills">
                      </div>
                      </div>
                    </div>

                      <div class="row">
                      <div class="col-sm-12">
                      <div class="form-group">
                       <label>Remarks</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> name="remarks">
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
