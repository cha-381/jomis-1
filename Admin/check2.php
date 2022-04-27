





























 
   
            
                   
                          
                          
                            <td><?php echo $n++; ?></td>
                           <?php } ?> 
                          </tr>
                        <?php echo ucwords(strtoupper($sched_data['Time3']." "."(".$sched_data['Schedule2'].")"));?>
                        <?php echo ucwords(strtoupper($sched_data['Time3']." "."(".$sched_data['Schedule2'].")"));?>
                        <th style="text-align:center;" width="10%">REMARKS</th>
                       <?php echo ucwords(strtoupper($sched_data['Time2']." "."(".$sched_data['Schedule1'].")"));?>
                       <?php echo ucwords(strtoupper($sched_data['Time2']." "."(".$sched_data['Schedule1'].")"));?>
                       <th style="text-align:center;" width="18%">PERIOD COVERED</th>
                       <th style="text-align:center;" width="35%">TIME</th>
                       <th style="text-align:center;" width="5%">ID</th>
                       <th style="text-align:center;" width="5%">No.</th>
                       <th style="text-align:center;" width="5%">RATE</th>
                       alt="User profile picture"></a></td>
                       alt="User profile picture"></a></td>
                       src="<?php echo (!empty([$sched_data['EmpPhoto']])) ? '../dist/photo/'.$emp_data['EmpPhoto'] : '../dist/photo/no-photo-icon.png'; ?>"
                       src="<?php echo (!empty([$sched_data['EmpPhoto']])) ? '../dist/photo/no-photo-icon.png' : '../dist/photo/no-photo-icon.png'; ?>"
                      </div>
                      </div>
                      </div> 
                      <?php echo number_format($sched_data['Rate1'],2);?>
                      <?php echo number_format($sched_data['Rate1'],2);?>
                      <?php echo number_format($sched_data['Rate2'],2);?>
                      <?php echo number_format($sched_data['Rate2'],2);?>
                      <?php echo ucwords(strtoupper($sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years']));?>
                      <?php echo ucwords(strtoupper($sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years']));?></td>
                      <?php echo ucwords(strtoupper($sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years']));?></td>
                      <?php echo ucwords(strtoupper($sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years']));?></td>
                      <?php } ?> 
                      <div class="input-group">                     
                      <select class="form-control custom-select" name="" id="select">
                      <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years']));?> 
                      <td><?php echo ucwords(strtoupper($sched_data['FName']. " " .$sched_data['LName'].","." ".$sched_data['EName']));?></td>
                      <tr style="font-size: 20px; background-color: hsla(195, 43%, 45%, 0.3)">
                     <?php if($count>0){
                     <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Time1']." "."(".$sched_data['Schedule'].")"));?>
                     <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?></td>
                     <td><?php echo ucwords(strtoupper($sched_data['FName']. " " . $sched_data['LName']));?></td>
                     <th style="text-align:center;" width="23%">NAME</th>
                    </div>
                    </div>
                    </td>
                    </td>
                    </td>
                    </td>
                    </tr>
                    </tr>
                    <br>
                    <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years']));?> 
                    <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Time1']." "."(".$sched_data['Schedule'].")"));?>
                    <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?>
                    <td><?php echo ucwords(strtoupper($sched_data['FName']. " " . $sched_data['MName'][0] ."." . " " . $sched_data['LName'].","." ". $sched_data['EName']));?></td>
                    <tr>
                   </td>
                   </td>
                   </td>
                   <br>
                   <br>
                   <br>
                   <td  style="text-align:center; color:orange"><a href="check_jo.php?id=<?php echo $sched_data['id']?>"><?php echo $sched_data['Remarks'];?></a></td>
                   <td style="text-align:right"><?php echo  number_format($sched_data['Rate'],2);?>
                   <td style="text-align:right"><?php echo number_format($sched_data['Rate1'],2);?>
                   <td style="text-align:right"><?php echo number_format($sched_data['Rate1'],2);?>
                   <td><a href="check2.php?ID_sched=<?php echo $sched_data['ID_sched']; ?>"><img class="profile-user-img img-square" style="width:50px; height:50px"
                  </div>
                  </tbody>
                  </td>
                  </td>
                  </td>
                  </thead>
                  <?php } ?> 
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <div class="box-footer" align="right">
                  <option selected disabled><?php echo $get_remarks?></option>
                  <option>Approved</option> 
                  <option>Disapproved</option>
                  <option>Modify</option>
                  <tbody>
                  <td style="text-align:center; color:green"><a href="check_jo.php?id=<?php echo $sched_data['id']?>"><?php echo $sched_data['Remarks'];?></td>
                  <td style="text-align:center; color:red"><a href="check_jo.php?id=<?php echo $sched_data['id']?>"><?php echo $sched_data['Remarks'];?></td>
                  <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years']));?>
                  <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years']));?>
                  <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Period']." ".$sched_data['RegDays']."-".$sched_data['RegDays2'].","." ".$sched_data['Years']));?> 
                  <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Time1']." "."(".$sched_data['Schedule'].")"));?>
                  <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Time2']." "."(".$sched_data['Schedule1'].")"));?>
                  <td style="text-align:left; font-size:13px"><?php echo ucwords(strtoupper($sched_data['Time2']." "."(".$sched_data['Schedule1'].")"));?>
                  <thead>
                 </td>
                 <?php if($sched_data['Remarks']=="Processed"){?>
                </div>
                </select>
                </table>
                <?php }elseif($sched_data['EmpPhoto']=="") {?>         
                <?php }elseif($sched_data['Remarks']=="Disapproved") {?> 
                <table id="users" class="table table-bordered table-striped" style="background-color: #f1f1f1;">
               <?php }elseif($sched_data['Remarks']=="Checked") {?>  
              </div>
              </div>
              <div class="card-body text-l">
              <div class="col-sm-6">
              <td><a href="check2.php?ID_sched=<?php echo $sched_data['ID_sched']; ?>"><img class="profile-user-img img-square" style="width:50px; height:50px"
             <!-- /.box-body -->
            $n  =   1; while ($sched_data = $get_schedule_data-> fetch(PDO::FETCH_ASSOC)) { ?>
            </form>
            <?php if ($sched_data['EmpPhoto']<>"")  {?>         
            <div class="card card-outline card-info">
            <div class="col-md-12">      
            <td colspan="6" align="center"><strong>No Record(s) Found!</strong></td>
            <td><?php echo ucwords(strtoupper($sched_data['FName']. " " . $sched_data['MName'][0] ."." . " " . $sched_data['LName']));?></td>
            }
          <?php 
          <?php if ($sched_data['JobOrderNo']==$JobOrder) {?>  
          <br>
         </div>
         </ol>
        <!-- <small>Version 2.0</small> -->
        </div>
        </tr>
        <?php } ?> 
        <div class="col-md-3">
        <tr>
        }else{?>
       </section>
       <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']=="" && $sched_data['Month2']=="") {?>
       <?php }elseif($sched_data['Period']=="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?>
       <div class="row">
      </div>
      </div>
      </h1>
      <?php }elseif($sched_data['EName']!="" && $sched_data['FName']!="" && $sched_data['MName']!="" && $sched_data['LName']!="") {?> 
      <?php }elseif($sched_data['EName']!="" && $sched_data['FName']!="" && $sched_data['MName']=="" && $sched_data['LName']!="") {?> 
      <?php }elseif($sched_data['EName']=="" && $sched_data['FName']!="" && $sched_data['MName']=="" && $sched_data['LName']!="") {?> 
      <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
      <?php }elseif($sched_data['Period']=="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
      <div class="col-sm-6">
      <div class="row">
      <h1 class="m=o text-dark">
      <li class="breadcrumb-item active">List</li>
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <ol class="breadcrumb float-sm-right text-xs">
     <?php if ($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?> 
     <div class="row">
    <!-- /.content -->
    <!-- Main content -->
    </section>
    <?php } ?>                       
    <b class="mb-0 font-weight-bold bg-yellow"><?php echo $JobOrder;?></b>
    <br>
    <br>
    <button type="button" class="btn btn-default" style="width:200px" <?php echo $btnStatus;?> name="insert" value="save">Back</button> 
    <div class="col-sm-6">
    <div class="container-fluid">
    <div class="row mb-2">
    <form role="form" method="get" action="<?php htmlspecialchars("PHP_SELF"); ?>">           
    <section class="content">
   <!-- Content Header (Page header) -->
   <button type="submit" class="btn btn-success" id="myBtn" style="width:200px" <?php echo $btnStatus;?> name="insert" value="save"><b>Update</b></button>
  <section class="content-header">
 <!-- Content-Wrapper End -->
 <?php include 'includes/footer.php'; ?>
 <?php include 'includes/scripts.php'; ?>
</body>
</div>
</div>      
</html>
<?php if ($sched_data['EName']=="" && $sched_data['FName']!="" && $sched_data['MName']!="" && $sched_data['LName']!="") {?> 
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/session2.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php } ?>