<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/config.php'; ?>
<?php include 'includes/paginator.class.php'; ?>

   <!-- Content Header (Page header) -->
 

    <!-- Main content -->
   <div class="container">
     <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m=o text-dark">
        List of Active Employees
        <!-- <small>Version 2.0</small> -->
      </h1>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right text-xs">
      <li class="breadcrumb-item"><a href="../index">Home</a></li>
      <li class="breadcrumb-item active">List</li>
         </ol>
         </div>
       
    </section>

   <hr>
          
           <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-inline">
    <select name="tb1" onchange="submit()" class="form-control custom-select">
        <option>Department</option>
        <?php
            $Continentqry   =   $db->query('SELECT DISTINCT department FROM department ORDER BY department ASC');
            while($crow = $Continentqry->fetch_assoc()) {
                echo "<option";
                if(isset($_REQUEST['tb1']) and $_REQUEST['tb1']==$crow['department']) echo ' selected="selected"';
                echo ">{$crow['department']}</option>\n";
            }

        ?>
    </select>
       <a type="button" href="department.php" id="myBtn"  <?php echo $btnStatus?> data-toggle="tooltip" title="More Details" class="btn btn-warning"><i class="fa fa-info circle"></i></a>
       <a type="button" data-toggle="tooltip" title="Export Excel" href="datasource.php" id="myBtn"  <?php echo $btnStatus?> class="btn btn-info"><i class="fa fa-file"></i></a>


</form>
<hr>
 
<?php
if(isset($_REQUEST['tb1'])) {
    $condition      =   "";
    if(isset($_GET['tb1']) and $_GET['tb1']!="")
    {
        $condition      .=  " AND EmpDept='".$_GET['tb1']."' AND E_Status='Active'";
    }
     
    $qryStr     =   "SELECT * FROM employeedetail WHERE 1 ".$condition." ORDER BY EmpLname ASC"; 
    $country    =   $db->query($qryStr);
    $count      =   $country->num_rows;
     
    $pages = new Paginator($count,9);
    echo '<div class="col-sm-5">';
    echo '<nav aria-label="Page navigation"><ul class="pagination">';
    echo $pages->display_pages();
    echo '</ul></nav>';
    echo '</div>';
    echo '<div class="col-sm-6 text-right">';
    echo "<span class=\"form-inline\">".$pages->display_jump_menu().$pages->display_items_per_page()."</span>";
    echo '</div>';
    echo '<div class="clearfix"></div>';
    $limit  = $pages->limit_start.','.$pages->limit_end;
    $qry    =   $db->query($qryStr.' LIMIT '.$limit);
}
?>



                <div class="card-body text-l">
               <table class="table table-bordered table-striped table-hover">
    <thead>
        <tr class="bg-primary">
            <th width="5%" style="text-align:center;">No.</th>
            <th width="20%" style="text-align:center;">Name</th>
            <th width="5%" style="text-align:center;">ID #</th>
            <th width="10%" style="text-align:center;">Gender</th>
            <th width="10%" style="text-align:center;">Category</th>
            <th width="20%" style="text-align:center;">Charges</th>
            <th width="25%" style="text-align:center;">Address</th>
            <th width="10%" style="text-align:center;">Barangay</th>
     
       
          
          
        </tr>
    </thead>
    <tbody>
        <?php 
        if($count>0){
            $n  =   1;
            while($val  =   $qry->fetch_assoc()){ 
        ?>
        <tr>
            <td><?php echo $n++; ?></td>
            <td style="font-size:13px; "><?php echo  $val['EmpLname'].","." ".$val['EmpFname']. " " . $val['EmpMname'][0] ."."  ?></td>
            <td style="font-size:13px; align:center;"><?php echo $val['ControlNo']; ?></td>
              <td style="font-size:13px;"><?php echo $val['EmpGender']; ?></td>
               <td style="font-size:13px;  text-align:center;"><?php echo $val['Category']; ?></td>
                <td style="font-size:13px; "><?php echo $val['Charges']; ?></td>
                <td style="font-size:13px;"><?php echo $val['EmpAddress']; ?></td>
                   <td style="font-size:13px;  text-align:center;"><?php echo $val['EmpBrgy']; ?></td>
                     
       
           
           
        </tr>
        <?php 
            }
        }else{?>
        <tr>
            <td colspan="6" align="center"><strong>No Record(s) Found!</strong></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php
    echo '<div class="col-sm-6">';
    echo '<nav aria-label="Page navigation"><ul class="pagination">';
    echo $pages->display_pages();
    echo '</ul></nav>';
    echo '</div>';
    echo '<div class="col-sm-6 text-right">';
    echo "<p class=\"label label-default\">Page: $pages->current_page of $pages->num_pages</p>\n";
    echo '</div>';
    echo '<div class="clearfix"></div><hr>';
    echo "<p class=\"code\">SELECT * FROM table LIMIT $pages->limit_start,$pages->limit_end (retrieve records $pages->limit_start-".($pages->limit_start+$pages->limit_end)." from table - $pages->total_items item total / $pages->items_per_page items per page)";
?>
              </div>

             <!-- /.box-body -->




                          
            </form>
       </section>
    <!-- /.content -->
</div>
</div>
 <?php include 'includes/footer.php'; ?>
 <!-- Content-Wrapper End -->
</div>      
  

</body>
</html>

