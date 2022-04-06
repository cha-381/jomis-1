<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'update_employee_profile.php'; ?>


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
      <li class="breadcrumb-item active"><b><i style="font-size:20px; color:red;" class="fa fa-arrow-right"></b></i> Personal Information</li>
       <li class="breadcrumb-item"><a href="edit_photo.php?ID=<?php echo $get_emp_id;?>">Upload Photo</a></li>
      <li class="breadcrumb-item"><a href="edit_reference.php?ID=<?php echo $get_emp_id;?>">Reference Number</a></li>
      <li class="breadcrumb-item"><a href="edit_edu.php?ID=<?php echo $get_emp_id;?>">Educational Details</a></li>
      <li class="breadcrumb-item"><a href="edit_work.php?ID=<?php echo $get_emp_id;?>">Work Experience</a></li>
         <li class="breadcrumb-item"><a href="edit_attachedment.php?ID=<?php echo $get_emp_id;?>">Attachment</a></li>
       </ol>
         </div>
       
    </section>
 
<!-- Main content -->
          <div class="col-md-12">
          <div class="card">
           

                 <form role="form" enctype="multipart/form-data" method="post" action="<?php htmlspecialchars("PHP_SELF"); ?>">

                  
     

           <div class="card-body"> 
           <div class="container">
            <div align="center">
                  <?php echo $alert_msg; ?>
             </div>
           <i style="font-size:25px"><i style="color:blue" align="center">Personal Information</i></i>  

             
              <div class="jumbotron">
              <div class="row">

               <?php if ($get_emp_photo=='') {?>
      <div class="col-12 col-sm-3">
               <div class="widget-user-image" align="left">
                <img class="img-circle elevation-5" id="image" src="../dist/img/no-photo-icon.png" width="200" height="200" vspace="10" alt="User Avatar">
              </div>

<?php }elseif($get_emp_photo<>'') {?>
      <div class="col-12 col-sm-3">
               <div class="widget-user-image" align="left">
                <img class="img-circle elevation-5" id="image" src="<?php echo (!empty([$get_emp_photo])) ? '../dist/photo/'.$get_emp_photo : '../dist/photo/no-photo-icon.png'; ?>" width="200" height="200" vspace="10" alt="User Avatar">
              </div>
<?php } ?>



 <input type="hidden" class="form-control" name="ID" value="<?php echo $id_emp;?>" required>
  <input type="hidden" class="form-control" readOnly=true id = "emp_id" name="EmpCode" value="<?php echo $get_emp_id; ?>">

              <br>
             
       


             <div class="col-sm-11">
                      <div class="row">
                        <input  <?php echo $btnStatus; ?> type="hidden" style="text-align: center" class="form-control" name="EmpCode"  value="<?php echo $get_emp_code;?>" placeholder="Enter No." required>
                        <input  <?php echo $btnStatus; ?> type="text" style="text-align: center" class="form-control" name="ControlNo"  value="<?php echo $get_emp_control;?>" placeholder="Enter No." >
                        <label style="text-align: center">***************<i class="bg-yellow">Control No</i>**************</label>
                      </div>
                  </div>


 <?php if ($get_status=='Active') {?>
                  <div class="col-sm-11">
                   <div class="row">         
                   <label>Status</label>      
                    <div class="input-group">            
                      <select  <?php echo $btnStatus; ?> style="border-color: green;"class="form-control custom-select" name="E_Status">
                  <option selected><?php echo $get_status?></option>
                  <option>Active</option>
                  <option>Inactive</option>
                </select>
              </div>
            </div>
          </div>
<?php }elseif($get_status=='Inactive') {?>
              <div class="col-sm-11">
                   <div class="row">         
                   <label>Status</label>      
                    <div class="input-group">            
                      <select  <?php echo $btnStatus; ?> style="border-color: red;"class="form-control custom-select" name="E_Status">
                  <option selected><?php echo $get_status?></option>
                  <option>Active</option>
                  <option>Inactive</option>
                </select>
              </div>
            </div>
          </div>
<?php } ?>
                </div>      
               
             <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name</label>
                         <input <?php echo $btnStatus; ?> type="text" class="form-control" value="<?php echo $get_emp_fname;?>" name="EmpFname" required>
                      </div>
                    </div>
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input <?php echo $btnStatus; ?> type="text" class="form-control" name="EmpMname" value="<?php echo $get_emp_mname;?>" required>
                      </div>
                    </div>
                  </div>
                      <div class="row">
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input <?php echo $btnStatus; ?> type="text" class="form-control" name="EmpLname" value="<?php echo $get_emp_lname;?>" required>
                      </div>
                      </div>

                        <div class="col-sm-6">
                      <div class="form-group">
                         <label>Name Extension</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_ename;?>" name="EmpExt" >                       
                      </div>
                    </div>
                    </div>


                    <div class="row">
                       <div class="col-sm-8">
                      <div class="form-group">
                         <b><label>Address</b><i style="color: red; font-size: 10px;"> (House/Block/Lot No.), (Street), (Subdivision/Village)</i></label>
                        <input  <?php echo $btnStatus; ?> type="text" class="form-control" name="EmpAddress" value="<?php echo $get_emp_address;?>" required>
                      </div>
                  </div>
                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Barangay</label>
                       <select  <?php echo $btnStatus; ?> class="form-control custom-select" name="EmpBrgy">
                  <option selected disabled>Please select....</option>
                     <?php while ($get_brgy = $get_barangay_data->fetch(PDO::FETCH_ASSOC)) { ?>  <?php
                    $selected = ($get_emp_brgy  ==  $get_brgy['barangay'])? 'selected':'';?>
                     <option <?=$selected;?> value="<?php echo
    $get_brgy['barangay']; ?>"><?php echo $get_brgy['barangay']; ?></option> <?php } ?>
                </select>
                  </div>
                  </div>

                 
                </div>  

                <div class="row">
                       <div class="col-sm-7">
                      <div class="form-group">
                        <label>City/Municipality</label>
                        <input  <?php echo $btnStatus; ?> type="text" class="form-control" value="<?php echo $get_emp_city;?>"name="EmpCity" required>
                      </div>
                  </div>
                       <div class="col-sm-5">
                      <div class="form-group">
                        <label>Province</label>
                        <input  <?php echo $btnStatus; ?> type="text" class="form-control" value="<?php echo $get_emp_province;?>"name="EmpProvince" required>
                      </div>
                  </div>
                  </div>   

                  <div class="row">
                     <div class="col-sm-5">
                      <div class="form-group">
                <b><label>Birth Date</b><i style="color:red"> (yyyy-mm-dd)</i></label>
                 <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar"></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_emp_birth;?>" class="form-control" name="EmpBirth" placeholder="Date">
              </div>
          </div>
        </div>
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label>Age</label>
                        <input  <?php echo $btnStatus; ?> type="text" readonly class="form-control" value="<?php echo $get_age;?>" name="EmpBlood" required>
                      </div>
                      </div>

                      <div class="col-sm-4">
                      <div class="form-group">
                        <label>Place of Birth</label>
                        <input  <?php echo $btnStatus; ?> type="text" class="form-control" value="<?php echo $get_place_birth;?>" name="PlaceBirth" required>
                      </div>
                      </div>
                    </div>    

                    <div class="row">
                        <div class="col-sm-3">
                      <div class="form-group">
                        <label>Citizenship</label>
                        <input  <?php echo $btnStatus; ?> type="text" class="form-control" value="<?php echo $get_emp_citizen;?>" name="EmpCitizen" required>
                      </div>
                      </div>

                       <div class="col-sm-4">
                      <div class="form-group">
                         <label>Civil Status</label>
                <select  <?php echo $btnStatus; ?> class="form-control custom-select" name="EmpStatus">
                  <option selected><?php echo $get_emp_status;?></option>
                     <option>Single</option> 
                     <option>Married</option>
                     <option>Widowed</option>
                     <option>Seperated</option> 
                </select>
             </div>  
             </div>                      
                       <div class="col-sm-5">
                      <div class="form-group">
                         <label>Gender</label>
                <select  <?php echo $btnStatus; ?> class="form-control custom-select" name="EmpGender" >
                 <option selected><?php echo $get_emp_gender;?></option>
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
                        <input  <?php echo $btnStatus; ?> type="text" class="form-control" value="<?php echo $get_emp_skills;?>" name="EmpSkills" required>
                      </div>
                  </div>
                    </div>  

            <?php if ($get_status=='Active') {?>          
              <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                        <label>Remarks</label>
                       <input  <?php echo $btnStatus; ?> type="text" class="form-control" value="<?php echo $get_emp_remarks;?>" name="Remarks" required>
                      </div>
                  </div>
                    </div>         
              </div>
             </div>
              </div>
            </div>

<?php }elseif($get_status=='Inactive') {?>
            <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                        <label>Remarks</label>
                       <input  <?php echo $btnStatus; ?> type="text" style="border-color:red;" class="form-control" value="<?php echo $get_emp_remarks;?>" name="Remarks">
                      </div>
                  </div>
                    </div>         
              </div>
             </div>
              </div>
            </div>
<?php }?>



  <div class="container">
            <div class="card-body">
           <i style="font-size:25px"><i style="color:blue" align="center">Family Background</i></i>  <div class="jumbotron">

              <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                       <label>Spouse's Surname</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_ln;?>" name="SpouseLn" >
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                       <label>First Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_fn;?>" name="SpouseFn" >
                      </div>
                    </div>


                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_mn;?>" name="SpouseMn" >
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Name Extension</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_en;?>" name="SpouseEn" >
                      </div>
                    </div>
                    </div>

                     <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                       <label>Occupation</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_occ;?>" name="SpouseOcc" >
                      </div>
                    </div></div>



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
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child1;?>" name="EmpChild1" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar"></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_child1_yr;?>" class="form-control" name="EmpChildB1" placeholder="Date">
              </div>
          </div>
        </div>
                  </div>
             
    

          
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">   
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child2;?>" name="EmpChild2" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                 <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar"></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_child2_yr;?>" class="form-control" name="EmpChildB2" placeholder="Date">
              </div>
          </div>
        </div>
                  </div>



                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child3;?>" name="EmpChild3" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                  <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar"></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_child3_yr;?>" class="form-control" name="EmpChildB3" placeholder="Date">
              </div>
          </div>
        </div>
                  </div>


                      <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child4;?>" name="EmpChild4">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                  <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar"></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text"  id="datepicker" value="<?php echo $get_child4_yr;?>" class="form-control" name="EmpChildB4" placeholder="Date">
              </div>
          </div>
        </div>
                  </div>

                      <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child5;?>" name="EmpChild5" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                  <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend" >
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar" ></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_child5_yr;?>" class="form-control" name="EmpChildB5" placeholder="Date">
              </div>
          </div>
           </div>
        </div>

           <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child6;?>" name="EmpChild6" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                  <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend" >
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar" ></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_child6_yr;?>" class="form-control" name="EmpChildB6" placeholder="Date">
              </div>
          </div>
        </div>
        </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child7;?>" name="EmpChild7" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                  <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend" >
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar" ></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_child7_yr;?>" class="form-control" name="EmpChildB7" placeholder="Date">
              </div>
          </div>
        </div>
        </div>
                <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child8;?>" name="EmpChild8" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                  <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend" >
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar" ></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_child8_yr;?>" class="form-control" name="EmpChildB8" placeholder="Date">
              </div>
          </div>
        </div>
        </div>
                <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child9;?>" name="EmpChild9" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                  <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend" >
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar" ></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_child9_yr;?>" class="form-control" name="EmpChildB9" placeholder="Date">
              </div>
          </div>
        </div>
        </div>
                <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child10;?>" name="EmpChild10" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                  <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend" >
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar" ></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_child10_yr;?>" class="form-control" name="EmpChildB10" placeholder="Date">
              </div>
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
                        <label>Assigned Office</label>
                        <select  <?php echo $btnStatus; ?> class="form-control custom-select" name="DeptCharge">
                  <option selected disabled>Select one</option>
                  <?php while ($get_dept = $get_department4_data->fetch(PDO::FETCH_ASSOC)) { ?>
                     <?php
                    $selected = ($get_emp_dept_charge  ==  $get_dept['department'])? 'selected':'';?>
                     <option <?=$selected;?> value="<?php echo
    $get_dept['department']; ?>"><?php echo $get_dept['department']; ?></option> <?php } ?>
                </select>
                      </div>
                    </div>


                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Department <i style="color: red; font-size: 12px;">(Charge)</i></label>
                        <select  <?php echo $btnStatus; ?> class="form-control custom-select" name="EmpDept">
                  <option selected disabled>Select one</option>
                  <?php while ($get_dept = $get_department3_data->fetch(PDO::FETCH_ASSOC)) { ?>
                     <?php
                    $selected = ($get_emp_department  ==  $get_dept['department'])? 'selected':'';?>
                     <option <?=$selected;?> value="<?php echo
    $get_dept['department']; ?>"><?php echo $get_dept['department']; ?></option> <?php } ?>
                </select>
                      </div>
                    </div>

                   
                   
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Charges</label>
                        <select  <?php echo $btnStatus; ?> class="form-control custom-select" name="Charges">">
                  <option selected><?php echo $get_emp_charges; ?></option>
                  <?php while ($get_proj = $get_jo1_data->fetch(PDO::FETCH_ASSOC)) { ?>  
                   <?php if ($get_proj['Department']==$db_department) {?>
                    <option value="<?php echo
    $get_proj['ProjectName'];?>"><?php echo $get_proj['ProjectName']; ?></option> 
    <?php } ?>  <?php } ?>
                </select>
                      </div>
                    </div>
                    </div>
                

                     <div class="row">
                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text"  <?php echo $btnStatus; ?> class="form-control" value="<?php echo $get_emp_designation;?>" name="EmpDesignation" required>
                      </div>
                  </div>

                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text"  <?php echo $btnStatus; ?> class="form-control" value="<?php echo $get_emp_email;?>" name="EmpEmail" required>
                      </div>
                  </div>
                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Contact No.</label>
                        <input type="text"  <?php echo $btnStatus; ?> class="form-control" value="<?php echo $get_emp_contact_number;?>"name="EmpContactNo" required>
                      </div>
                      </div>
                    </div>



                     <div class="row">
                       <div class="col-sm-10">
                      <div class="form-group">
                        <label>Eligibility</label>
                        <input  <?php echo $btnStatus; ?> type="text" class="form-control" value="<?php echo $get_emp_eligibility;?>" name="EmpEligible" required>
                      </div>
                      </div>



                <div class="col-sm-2">
                      <div class="form-group">
                        <label>No. of Years in Service </label>
                        <input  <?php echo $btnStatus; ?> type="text" readonly class="form-control" value="<?php echo $get_start;?>" name="EmpNoService" required>
                      </div>
                  </div>

                    </div>


                  
                       <div class="row">
                          <div class="col-sm-3">
                      <div class="form-group">
                         <label>Work Status</label>
                <select  <?php echo $btnStatus; ?> class="form-control custom-select" name="Category">
                  <option selected><?php echo $get_emp_category;?></option>
                     <optgroup label="Job Order">
                     <option>Rotating</option> 
                     <option>Non-rotating</option>
                     <optgroup label="MOA">
                      <option>Contract of Service</option> 
                     <option>MOA</option>
                     <optgroup label="Others">
                     <option>Others</option>
                </select>
             </div>  
             </div> 

              <div class="col-sm-3">
                      <div class="form-group">
                        <label>if Others pls. Specify</label>
                        <input type="text"  <?php echo $btnStatus; ?> class="form-control" value="<?php echo $get_emp_others;?>"name="Others">
                      </div>
                      </div>

             <div class="col-sm-3">
                      <div class="form-group">
                        <b><label>Starting Date</b><i style="color:red"> (yyyy-mm-dd)</i></label>
                        <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar"></i></span>  </div>
                <input  <?php echo $btnStatus; ?> type="text" id="datepicker" value="<?php echo $get_emp_joingdate;?>" class="form-control" name="EmpJoingdate" placeholder="Date">
              </div>
          </div>
        </div>                
                    

                       <div class="col-sm-3">
                      <div class="form-group">
                        <b><label>Date End</b><i style="color:red"> (yyyy-mm-dd)</i></label>
                        <div class="input-group date mb-3" data-provide="datepicker" >
                 <div class="input-group-addon input-group-prepend">
                <span class="input-group-text " style="color:red"><i class="fa fa-calendar"></i></span>  </div>
                        <input  <?php echo $btnStatus; ?> type="text" class="form-control" value="<?php echo $get_end;?>" name="EndDate">
                      </div>
                    </div>
                    </div>

                      </div>
                      </div>
                    </div></div>


     
         
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
                       <input type="submit" <?php echo $btnStatus; ?> name="update" class="btn btn-primary" style="padding: 5px 120px; font-size: 20px" value="Update">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <a href="employeedetails.php?ID=<?php echo $get_emp_id?>" class="btn btn-default btn-block" style="padding: 5px 120px; font-size: 20px">Cancel</a>
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
<script type="text/javascript" src="../plugins/daterangepicker/jquery.min.js"></script>
<script type="text/javascript" src="../plugins/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="../plugins/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../plugins/daterangepicker/daterangepicker.css" />
>?

</div>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
