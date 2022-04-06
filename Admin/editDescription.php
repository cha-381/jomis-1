<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'update_item.php'; ?>


<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
        Edit Description
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
       <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Job Description</li>
       </ol>
         </div>
       
    </section>
 
<!-- Main content -->
          <div class="col-md-12">
          <div class="card">
           

                 <form role="form" method="post" action="<?php htmlspecialchars("PHP_SELF"); ?>">

                   <input type="hidden" class="form-control"  name="objid" value="<?php echo $get_objid; ?>">
     

           <div class="card-body"> 
           <div class="container">
              
                <?php echo $alert_msg; ?>
                 <div class="card card-outline card-secondary">
                  <div class="jumbotron">
                    <i style="font-size:25px"><?php echo "JOB ORDER No."?><i style="color:blue" ></i></i> <b class="mb-0 font-weight-bold bg-yellow" style="font-size:25px"><?php echo $get_uniq_no."-".$JobOrder;?></b>  
                <div class="card-body">
             <div class="form-group">

               <div class="card-body"style="overflow-x:auto;">
                <table id="user" class="table" cellspacing="1" cellpadding="8"  border="3px white;" border-collapse="collapse;"
  border-spacing="0;" width= "100%;">
                  <thead>
                    <tr bgcolor="lightgreen">
                      <th style="text-align:center;">No.</th>
                     <th style="text-align:center;">Name</th>
                       <th style="text-align:center;">Period</th>
                       <th style="text-align:center;">Time</th>
                       <th style="text-align:center;">Rate</th>
                      
                     
                    </tr>
                  </thead>
                  <tbody>
                          <?php  if($count>0){
            $n  =   1; while ($sched_data= $get_schedule_data-> fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                    
                    <?php if ($sched_data['JobOrderNo']==$JobOrder) {
                     ?> 
                   <td><?php echo $n++; ?></td>
                    <td><?php echo $sched_data['FName']. " " . $sched_data['MName'][0] ."." . " " . $sched_data['LName'];?></td>

      <?php if ($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']!="") {?> 
                  <td style="text-align:left; font-size:13px"><?php echo $sched_data['Period']." ".$sched_data['RegDays'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?>
                  <br>
                      <?php echo $sched_data['Month2']." ".$sched_data['Days2'].","." ".$sched_data['Years'];?></td>
                  <td style="text-align:left; font-size:13px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                  <br>
                       <?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                  <br>
                        <?php echo $sched_data['Time3']." "."(".$sched_data['Schedule2'].")";?>
                  </td>
                   <td style="text-align:right"><?php echo  number_format($sched_data['Rate'],2);?>
                   <br>
                      <?php echo number_format($sched_data['Rate1'],2);?>
                   <br>
                      <?php echo number_format($sched_data['Rate2'],2);?>
                   </td>

      <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']!="" && $sched_data['Month2']=="") {?>
                    <td style="text-align:left; font-size:13px"><?php echo $sched_data['Period']." ".$sched_data['RegDays'].","." ".$sched_data['Years'];?> 
                  <br>
                      <?php echo $sched_data['Month1']." ".$sched_data['Days1'].","." ".$sched_data['Years'];?></td>
                    <td style="text-align:left; font-size:13px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                  <br>
                       <?php echo $sched_data['Time2']." "."(".$sched_data['Schedule1'].")";?>
                    </td>
                    <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?>
                    <br>
                      <?php echo number_format($sched_data['Rate1'],2);?>
                    </td>


       <?php }elseif($sched_data['Period']!="" && $sched_data['Month1']=="" && $sched_data['Month2']=="") {?>
                      <td style="text-align:left; font-size:13px"><?php echo $sched_data['Period']." ".$sched_data['RegDays'].","." ".$sched_data['Years'];?> 
                    </td>
                     <td style="text-align:left; font-size:13px"><?php echo $sched_data['Time1']." "."(".$sched_data['Schedule'].")";?>
                     <td style="text-align:right"><?php echo number_format($sched_data['Rate'],2);?></td>

                      <?php } ?> 


                   

                 

                           
                        <?php }elseif($sched_data['JobOrderNo']!=$JobNo) {?>

                              <?php } ?>   
                       
                
                          </tr>
                      
                   <?php 
                    }
        }else{?>
        <tr>
            <td colspan="6" align="center"><strong>No Record(s) Found!</strong></td>
        </tr>
        <?php } ?>

                  </tbody>
                </table><hr>
        
                <div class="row">
                       <div class="col-sm-4">
                      <div class="form-group">
                        <label>Item</label>
                      </div>
                  </div>

                  <div class="col-sm-8">
                      <div class="form-group">
                        <label>Description</label>
                      </div>
                  </div>
                </div>

                 

                      <div class="row">
                       <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" id="item1" value="<?php echo $create_item1;?>" <?php echo $btnStatus?> class="form-control" name="Item1" >
                      </div>
                  </div>

                  <div class="col-sm-8">
                      <div class="form-group">
                        <input type="text" id="des1" onchange="mysync3()" value="<?php echo $create_description1;?>" <?php echo $btnStatus?> class="form-control" name="Description1">
                      </div>
                  </div>
                </div>
        

                  <div class="row">
                       <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" id="item2" value="<?php echo $create_item2;?>" <?php echo $btnStatus?> class="form-control" name="Item2">
                      </div>
                  </div>

                  <div class="col-sm-8">
                      <div class="form-group">
                        <input type="text" id="des2" onchange="mysync4()" value="<?php echo $create_description2;?>" <?php echo $btnStatus?> class="form-control" name="Description2"  >
                      </div>
                  </div>
                </div>


                 <div class="row">
                       <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" id="item3" value="<?php echo $create_item3;?>" <?php echo $btnStatus?> class="form-control" name="Item3">
                      </div>
                  </div>

                  <div class="col-sm-8">
                      <div class="form-group">
                        <input type="text" id="des3" onchange="mysync5()" value="<?php echo $create_description3;?>" <?php echo $btnStatus?> class="form-control" name="Description3">
                      </div>
                  </div>
                </div>

                 <div class="row">
                       <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" id="item4"  value="<?php echo $create_item4;?>" <?php echo $btnStatus?> class="form-control" name="Item4">
                      </div>
                  </div>

                  <div class="col-sm-8">
                      <div class="form-group">
                        <input type="text" id="des4" onchange="mysync6()" value="<?php echo $create_description4;?>" <?php echo $btnStatus?> class="form-control" name="Description4" >
                      </div>
                  </div>
                </div>

                 <div class="row">
                       <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" id="item5" value="<?php echo $create_item5;?>" <?php echo $btnStatus?> class="form-control" name="Item5" >
                      </div>
                  </div>

                  <div class="col-sm-8">
                      <div class="form-group">
                        <input type="text" id="des5" value="<?php echo $create_description5;?>" <?php echo $btnStatus?> class="form-control" name="Description5">
                      </div>
                  </div>
                </div><hr class="dashed">
               
                <a href="create_job_order_edit.php?objid=<?php echo $get_objid?> " class="btn btn-default"><b>Back</b></a>
                 <input type="submit" name="insert" <?php echo $btnStatus?> class="btn btn-success" value="Update">

              </div>
                 </div>
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
 function mysync3()
{
  var item2 = document.getElementById('item2');
  var des2 = document.getElementById('des2');

  des2.disabled=false;
  item2.disabled=false;
  }
   function mysync4()
{
  var item3 = document.getElementById('item3');
  var des3 = document.getElementById('des3');

  des3.disabled=false;
  item3.disabled=false;
  }
  function mysync5()
{
  var item4 = document.getElementById('item4');
  var des4 = document.getElementById('des4');

  des4.disabled=false;
  item4.disabled=false;
  }
  function mysync6()
{
  var item5 = document.getElementById('item5');
  var des5 = document.getElementById('des5');

  des5.disabled=false;
  item5.disabled=false;
  }
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

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
