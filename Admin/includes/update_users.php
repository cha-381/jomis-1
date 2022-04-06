<?php
    include('../config/db_config.php');


  $alert_msg = '';
    if (isset($_POST['users_update'])){
         //to check if data are passed
       
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $ename = $_POST['ext_name'];
    $email = $_POST['email'];
    $code = $_POST['code'];
    $abbre = $_POST['abbre'];
    $contact_number = $_POST['contact_number'];
    $uname = $_POST['username'];
    $account_type = $_POST['account_type'];
    $upass = $_POST['password'];
    $position = $_POST['position'];
    $office = $_POST['department'];
    $fileName = $_POST['location'];

  
   // $account_type = $_POST['account_type'];

    //length of $contact_number
    $con_number = strlen($contact_number);
    if ($con_number != 11) {
      echo "Invalid contact number";
    }
    else {

        if (empty($upass)){
            //update tbl users do not include password
            $users_update_sql = "UPDATE tbl_users SET 
                first_name     = :fname,
                middle_name    = :mname,
                last_name      = :lname,
                ext_name       = :ename,
                code            = :code,
                abbre          = :abbre,
                account_type   = :account_type,
                contact_no     = :contact_number,
                position       = :position,
                email          = :email,
                username       = :uname,
                location       = :filename,
                Department     = :department
                -- userpass       = :upass,
                -- account_type   => :account_type 
                WHERE user_id  = :id";
    
          $update_data = $con->prepare($users_update_sql);
          $update_data->execute([
                ':fname'          => $fname,
                ':mname'          => $mname,
                ':lname'          => $lname,
                ':ename'          => $ename,
                ':code'          => $code,
                ':abbre'          => $abbre,
                ':account_type'   => $account_type,
                ':contact_number' => $contact_number,
                ':position'       => $position,
                ':email'          => $email,
                ':uname'          => $uname,
                ':filename'       => $fileName,
                ':department'     => $office,
               // ':upass'          => $hashed_password,
                // ': account_type'   => $account_type, 
                ':id'             => $user_id
          ]);
        }else{
            //update tbl users include password
        }
      //echo "valid number";
      // $register_user_sql = "INSERT INTO tbl_users(first_name, middle_name, last_name, email, contact_number,username, userpass, account_type) VALUES(:fname, :mname, :lname, :email, :contact_number, :uname, :upass, :account_type)";

      //hash the password
      $hashed_password  = password_hash($upass, PASSWORD_DEFAULT);
      //insert user to database
      $register_user_sql = "UPDATE tbl_users SET 
                first_name     = :fname,
                middle_name    = :mname,
                last_name      = :lname,
                ext_name       = :ename,
                code            = :code,
                abbre          = :abbre,
                account_type   = :account_type,
                contact_no     = :contact_number,
                position       = :position,
                email          = :email,
                username       = :uname,
                Department     = :department,
                location       = :filename,
                userpass       = :upass
        -- account_type   => :account_type 
          WHERE user_id = :id";
        

      $register_data = $con->prepare($register_user_sql);
      $register_data->execute([
        ':fname'          => $fname,
        ':mname'          => $mname,
        ':lname'          => $lname,
        ':ename'          => $ename,
        ':code'          => $code,
        ':abbre'          => $abbre,
        ':account_type'   => $account_type,
        ':contact_number' => $contact_number,
        ':position'       => $position,
        ':email'          => $email,
        ':uname'          => $uname,
        ':department'     => $office,
        ':filename'       => $fileName,
        ':upass'          => $hashed_password,
        // ': account_type'   => $account_type,
        // ':account_type'   => 2,
        ':id'             => $user_id
      ]);

      echo "Data Inserted";

    }
    }
        else if (isset($_POST['users_update'])){
          $new_user_password = $_POST['new_user_password'];
          $user_id_update = $_POST['user_id_update'];
          $new_firstname = $_POST['new_firstname'];
          $new_middlename = $_POST['new_middlename'];
          $new_lastname = $_POST['new_lastname'];
          $new_ext_name = $_POST['new_ext_name'];
          $new_abbre = $_POST['new_abbre'];
          $new_account_type = $_POST['new_account_type'];
          $new_code = $_POST['new_code'];
          $new_contact_number = $_POST['new_contact_number'];
          $new_email = $_POST['new_email'];
          $new_username = $_POST['new_username'];
          $new_position = $_POST['new_position'];
          $new_department = $_POST['new_department'];
          $new_filename = $_POST['new_filename'];
          $new_account_type = $_POST['new_account_type'];
    
          //get the length of the contact_number
          $contact_value = strlen($new_contact_number);
    
          if ($contact_value != 11) {
    
            $alert_msg .= ' 
                <div class="new-alert new-alert-warning alert-dismissible">
                    <i class="icon fa fa-warning"></i>
                    Contact Number must be 11 digit.
                </div>     
            ';
          
          }    
          else {
            //empty $upass
            if (empty($new_user_password)) {
                //update tbl_users
                //do not include password
                $users_update_sql = "UPDATE tbl_users SET 
                    first_name     = :fname,
                    middle_name    = :mname,
                    last_name      = :lname,
                    ext_name      = :ename,
                    code            = :code,
                    abbre          = :abbre,
                    account_type   = :account_type,
                    email          = :email,
                    contact_no     = :contact_number,
                    username       = :uname,
                    position       = :position,
                    Department     = :department,
                    location       = :filename,
                    account_type   => :account_type 
                    WHERE user_id   = :id";
    
                $update_data = $con->prepare($users_update_sql);
                $update_data->execute([
                    ':fname'          => $new_firstname,
                    ':mname'          => $new_middlename,
                    ':lname'          => $new_lastname,
                    ':ename'          => $new_ext_name,
                     ':code'          => $new_code,
                     ':abbre'          => $new_abbre,
                     ':account_type'   => $new_account_type,
                    ':email'          => $new_email,
                    ':contact_number' => $new_contact_number,
                    ':uname'          => $new_username,
                    ': position'       => $position,
                    ': account_type'   => $account_type,
                    ':department'     => $new_department,
                    ':filename'       => $new_filename,
                    ':id'              => $user_id_update
                ]);                
            }
            else{
                //update tbl_users
                //include password
                
                //hash the password
                $hashed_password  = password_hash($upass, PASSWORD_DEFAULT);
    
                $users_update_sql = "UPDATE tbl_users SET 
                    first_name     = :fname,
                    middle_name    = :mname,
                    last_name      = :lname,
                    ext_name      = :ename,
                    code            = :code,
                    abbre          = :abbre,
                    account_type   = :account_type,
                    email          = :email,
                    contact_no     = :contact_number,
                    username       = :uname,
                    userpass       = :upass,
                    position       = :position,
                    Department     = :department,
                    location      = :filename,
                    account_type   => :account_type 
                    WHERE user_id   = :id";
    
                $update_data = $con->prepare($users_update_sql);
                $update_data->execute([
                    ':fname'          => $new_firstname,
                    ':mname'          => $new_middlename,
                    ':lname'          => $new_lastname,
                    ':ename'          => $new_ext_name,
                     ':code'          => $new_code,
                     ':abbre'          => $new_abbre,
                     ':account_type'          => $new_account_type,
                    ':email'          => $new_email,
                    ':contact_number' => $new_contact_number,
                    ':uname'          => $new_username,
                    ':uname'          => $new_user_password,
                    ': position'       => $position,
                    ': account_type'   => $account_type,
                    ':department'     => $new_department,
                      ':filename'       => $new_filename,
                    ':id'              => $user_id_update
                ]);        
            }
          }
    
            $alert_msg .= ' 
              <div class="new-alert new-alert-success alert-dismissible">
                  <i class="icon fa fa-success"></i>
                  Data Updated.
              </div>     
            ';
header('location: edit_users.php');

    }   
?>