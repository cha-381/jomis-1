<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'update_verify.php'; ?>

<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
        Verification
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Information</li>
         </ol>
         </div>

       
    </section>
 
<!-- Main content -->
          <div class="col-md-12">
          <div class="card">
           

                 <form method="post" action="" enctype="multipart/form-data">

                    <input type="hidden" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $db_user?>" name="user" required>
       
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


              <br>
             
             <label align="right"><i style="color:grey">*******</i>Upload Photo<i style="color:grey">*******</i></label>
           
             <br>
             <br>
             <div class="col-sm-11">
                      <div class="row">
                        <input type="hidden" style="text-align: center" <?php echo $btnStatus; ?> class="form-control" name="code" value="<?php echo $count_em?>" required>
                        <input type="text" style="text-align: center" <?php echo $btnStatus; ?> class="form-control" name="control"  readonly value="<?php echo $get_emp_control?>" placeholder="Enter No.">
                        <label style="text-align: center">***********<i class="bg-yellow">Control No</i>************</label>
                      </div>
                  </div>
             

                    <div class="col-sm-11">
                   <div class="row">  
                   <label>Status</label>      
                    <div class="input-group">            
                      <select class="form-control custom-select" <?php echo $btnStatus; ?> name="" readonly>
                  <option><?php echo $get_status?></option>
                </select>
              </div>
            </div>
          </div>
        </div>


             <div class="card-body">
                <form role="form">
                   <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Last Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_lname?>" name="" readonly>
                      </div>
                    </div>
                  </div>

                 
                    <div class="row">
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label>First Name</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_fname?>" name="" readonly>
                      </div>
                    </div>

                     <div class="col-sm-5">
                      <div class="form-group">
                      <label>Name Extension</label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_ename?>" name="" readonly>
                      </div>
                      </div>
                      </div>

                       <div class="row">
                     <div class="col-sm-12">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_mname?>" name="" readonly>
                      </div>
                    </div>
                
                      
                    </div>
  <div class="row">
                       <div class="col-sm-7">
                      <div class="form-group">
                          <b><label>Address</b><i style="color: red; font-size: 12px;"> (House/Block/Lot No.), (Street), (Subdivision/Village)</i></label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_address?>" name="" readonly>
             </div>  
             </div>                      
                       <div class="col-sm-5">
                      <div class="form-group">
                           <label>Barangay</label>
                        <input type="text" class="form-control" <?php echo $btnStatus;?> value="<?php echo $get_emp_brgy?>" name="" readonly>
             </div>  
             </div> 
             </div> 

                    <div class="row">
                       <div class="col-sm-7">
                      <div class="form-group">
                        <label>City/Municipality</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_city?>" name="" readonly>
                      </div>
                  </div>
                       <div class="col-sm-5">
                      <div class="form-group">
                        <label>Province</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_province ?>" name="" readonly>
                      </div>
                  </div>
                  </div>

                    <div class="row">
                       <div class="col-sm-7">
                      <div class="form-group">
                        <label>Birth Date </label><i style="color: red;"> (mm/dd/yyyy)</i>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_birth?>" name="" readonly>
                      </div>
                  </div>
                       <div class="col-sm-5">
                      <div class="form-group">
                        <label>Place of Birth</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_place_birth?>" name="" readonly>
                      </div>
                  </div>
                  </div>

              

                       <div class="row">
                        <div class="col-sm-4">
                      <div class="form-group">
                        <label>Citizenship</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_citizen?>" name="" readonly>
                      </div>
                      </div>
                
                   


                 
                     <div class="col-sm-4">
                      <div class="form-group">
                         <label>Civil Status</label>
               <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_status?>" name="" readonly>
             </div>  
             </div>                      
                       <div class="col-sm-4">
                      <div class="form-group">
                         <label>Gender</label>
                <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_emp_gender?>" name="" readonly>
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
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_emp_contact_number?>" name="" readonly>
                      </div>
                  </div>
                       <div class="col-sm-8">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_emp_email?>" name="" readonly>
                      </div>
                      </div>
                    </div>
                   
                <hr class="dashed">
 <label><i style="color:red; font-size: 14pxs;">Reference Number</i></label>
                      <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                         <label><i>Pag-ibig MID No.</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo $get_id_pagibig?>" name="" readonly>
                      </div>
                      </div>

                        <div class="col-sm-4">
                      <div class="form-group">
                         <label><i>Philhealth</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_id_phil?>" name="" readonly>
                      </div>
                      </div>


                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>SSS</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_id_sss?>" name="" readonly>
                      </div>
                      </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>TIN #</i></label>
                         <input type="text" class="form-control"<?php echo $btnStatus; ?>  value="<?php echo $get_id_tin?>" name="" readonly>
                      </div>
                      </div>

                        <div class="col-sm-4">
                      <div class="form-group">
                        <label><i>ATM SA#</i></label>
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_id_atm?>" name="" readonly>
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
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_ln?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                       <label>First Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_fn?>" name="" readonly>
                      </div>
                    </div>


                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_mn?>" name="" readonly>
                      </div>
                    </div>

                     <div class="col-sm-3">
                      <div class="form-group">
                        <label>Name Extension</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_en?>" name="" readonly>
                      </div>
                    </div>
                    </div>

                      <div class="row">
                       <div class="col-sm-12">
                      <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_spouse_occ?>" name="" readonly>
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
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child1?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child1_yr?>" name="" readonly>
          </div>
        </div>
                  </div>
             
    

          
                   <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child2?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child2_yr?>" name="" readonly>
                    </div>
                  </div>
                  </div>



                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child3?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child3_yr?>" name="" readonly>
                   </div>
                  </div>
                  </div>


                    <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child4?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child4_yr?>" name="" readonly>
                   </div>
                  </div>
                  </div>

                    <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child5?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child5_yr?>" name="" readonly>
                   </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child6?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child6_yr?>" name="" readonly>
                   </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child7?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child7_yr?>" name="" readonly>
                   </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child8?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child8_yr?>" name="" readonly>
                   </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child9?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child9_yr?>" name="" readonly>
                   </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">                 
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child10?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $get_child10_yr?>" name="" readonly>
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
                       <input type="text" class="form-control" placeholder="PRIMARY INFORMATION" value="<?php echo  $get_edu_elem_sch?>" name="" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_elem_yr?>" name="" readonly>
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_elem_award?>" name="" readonly>
                      </div>
                    </div>
                  </div>
         
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                     <input type="text" class="form-control" placeholder="SECONDARY INFORMATION" <?php echo $btnStatus; ?>  value="<?php echo  $get_edu_sec_sch?>" name="" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                   <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_edu_sec_yr?>" name="" readonly>
                      </div>
                    </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_sec_award?>" name="" readonly>
                      </div>
                    </div>
                  </div>


               
             

                  <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="VOCATIONAL/TRADE COURSE" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_voc_sch?>" name="" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                   <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_voc_yr?>" name="" readonly>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_voc_award?>" name="" readonly>
                      </div>
                    </div>
                  </div>

              <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                     <input type="text" placeholder="COLLEGE INFORMATION" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_col_sch?>" name="" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_col_yr?>" name="" readonly>
                    </div>
                  </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_col_award?>" name="" readonly>
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                       <input type="text" class="form-control" placeholder="GRADUATE STUDIES" <?php echo $btnStatus; ?>value="<?php echo  $get_edu_gra_sch?>" name="" readonly>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                     <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_edu_gra_yr?>" name="" readonly>
                      </div>
                    </div>
                      <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>value="<?php echo  $get_edu_gra_award?>" name="" readonly>
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
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>   value="<?php echo  $get_emp_eligibility?>" name="" readonly>
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
                         <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo   $get_exp_emp1_duration?>" name="" readonly>
                      </div>
                    </div>

                     <div class="col-sm-3">
                      <div class="form-group">
                       <input type="text" class="form-control" <?php echo $btnStatus; ?>value="<?php echo   $get_exp_emp1_designation?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                       <input type="text" class="form-control" placeholder="Employeer 1" <?php echo $btnStatus; ?> value="<?php echo  $get_exp_emp1_name?>" name="" readonly>
                      </div>
                    </div>
                   
                     <div class="col-sm-3">
                     <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_exp_emp1_salary?>" name="" readonly>
                      </div>
                    </div>
                     </div>



                    <div class="row">
                       <div class="col-sm-3">
                      <div class="form-group">
                      <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo   $get_exp_emp2_duration?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo   $get_exp_emp2_designation?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Employeer 2"  <?php echo $btnStatus; ?> value="<?php echo  $get_exp_emp2_name?>" name="" readonly>
                      </div>
                    </div>
                   
                    
                    <div class="col-sm-3">
                      <div class="form-group">
                       <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_exp_emp2_salary?>" name="" readonly>
                      </div>
                    </div>                  
                     </div>

                        <div class="row">
                           <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo   $get_exp_emp3_duration?>" name="" readonly>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo   $get_exp_emp3_designation?>" name="" readonly>
                      </div>
                    </div>

                     <div class="col-sm-3">
                      <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Employeer 3" <?php echo $btnStatus; ?> value="<?php echo  $get_exp_emp3_name?>" name="" readonly>
                      </div>
                    </div>
                           
                     <div class="col-sm-3">
                      <div class="form-group">
                        <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_exp_emp3_salary?>" name="" readonly>
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
                       <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_emp_department?>" name="" readonly>
                      </div>
                    </div>

                      <div class="col-sm-4">
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_emp_designation?>" name="" readonly>
                      </div>
                    </div>    

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Department <i style="color: red; font-size: 12px;">(Charge)</i></label>
                       <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_emp_dept_charge?>" name="" readonly>
                      </div>
                    </div>    
  </div>
                         <input type="hidden" class="form-control" <?php echo $btnStatus; ?> name="charges">
           


                        

                     <div class="row">
                      
                          <div class="col-sm-3">
                      <div class="form-group">
                         <label>Work Status</label>
                          <input type="text" class="form-control" <?php echo $btnStatus; ?> value="<?php echo  $get_emp_category?>" name="" readonly>
               
                </select>
             </div>  
             </div> 

             <div class="col-sm-3">
                      <div class="form-group">
                        <label>if Others pls. Specify</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_emp_others?>" name="" readonly>
               
                      </div>
                    </div>    

                    <div class="col-sm-3">
                      <div class="form-group">
                         <label>Date Start</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_emp_joingdate?>" name="" readonly>
              </div>
                    </div>
            

                              
                

                   <div class="col-sm-3">
                      <div class="form-group">               
                        <label>Date End</label>
                 <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_end?>" name="" readonly>
                     </div>
          </div>
           </div>
                 
                   
                <hr class="dashed">

                     

                         <div class="row">
                      <div class="col-sm-4">
                      <div class="form-group">
                        <label>CTC No.</label>
                  <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_id_ctc?>" name="" readonly>                      </div>
                      </div>


                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Date issued</label>
                       <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_id_date?>" name="" readonly>     
              </div>
                      </div>
                   

                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Placed issued</label>
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_id_place?>" name="" readonly>     
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
                        <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_emp_skills?>" name="" readonly>     
                      </div>
                      </div>
                    </div>

                      <div class="row">
                      <div class="col-sm-12">
                      <div class="form-group">
                       <label>Remarks</label>
                       <input type="text" class="form-control" <?php echo $btnStatus; ?>  value="<?php echo  $get_emp_remarks?>" name="" readonly> 
                      </div>
                      </div>
                    </div>
                  </div>
                </div>


                     <div class="container">
            <div class="card-body">
           <i style="font-size:25px"><i style="color:blue" align="center">Other Information</i></i>  <div class="jumbotron">
             <input type="hidden" class="form-control" <?php echo $btnStatus; ?> value="<?php echo $id_emp?>" name="ID" required>

             
                      <div class="row">
                      <div class="col-sm-12">
                      <div class="form-group">    
                    <div class="input-group">            
                      <select class="form-control custom-select" <?php echo $btnStatus; ?> name="Report">
                  <option><?php echo $get_report?></option>
                  <option>Pending</option>
                  <option>Verified</option>
                  <option>Modify</option>
                </select> 
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
