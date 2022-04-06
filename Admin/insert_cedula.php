<?php
  include('../config/db_config.php');

  $alert_msg = '';     
  $alert_msg1 = '';    

  //if button insert clicked

  if (isset($_POST['insert'])) {
    

    $joID = $_POST['ID'];
   

   if ( isset( $_FILES['pdfFile'] ) ) {
  if ($_FILES['pdfFile']['type'] == "application/pdf" or $_FILES['pdfFile']['type'] == "application/jpg") {
    $source_file = $_FILES['pdfFile']['tmp_name'];
    $dest_files = "../dist/cedula/".$_FILES['pdfFile']['name'];
  

    if (file_exists($dest_files)) {
      print "The file name already exists!!";
    }
    else {
      move_uploaded_file( $source_file, $dest_files )
      or die ("Error!!");
      if($_FILES['pdfFile']['error'] == 0) {
       $alert_msg =  "Pdf file uploaded successfully!";
       $alert_msg = "<b><u>Details : </u></b><br/>";
       $alert_msg =  "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
       $alert_msg =  "File Size : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
      $alert_msg = "File location : ../dist/vamos".$_FILES['pdfFile']['name']."<br/>";
      }
    }
  }
  else {
    if ( $_FILES['pdfFile']['type'] != "application/pdf" or  $_FILES['pdfFile']['type'] != "application/jpg") {
      print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
      print "Invalid  file extension, should be pdf !!"."<br/>";
      print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
    }
  }
}
 
$register_user_sql = "INSERT INTO cedula SET 
        ID            = :ID,
        Filenames     = :pdfFile
        ";

$sql ="UPDATE `employeedetail` SET Cedula   = '$dest_files'
        WHERE   ID               = '$joID' ";

      $register_data = $con->prepare($register_user_sql);
      $register_data->execute([
        ':ID'          => $joID,
        ':pdfFile'          => $dest_files
      ]);

 $alert_msg .= ' 
          <div class="alert alert-success alert-dismissible">
              <i class="icon fa fa-success"></i>
             Uploaded successfully!
          </div>     
      ';

    if($con->query($sql)){
     
     $btnStatus = 'disabled';
     $btnNew = 'enabled';
   }
        else{
            $_SESSION['error'] = $con->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }



 
?>
