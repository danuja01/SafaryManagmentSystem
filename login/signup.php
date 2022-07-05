<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php require_once('inc/connection.php'); ?>
<?php
// create variable
$errors = array();
//$first_name = '';
//$last_name ='';
//$email = '';
//$addres ='';
//$phoneNo = '';
//$password ='';


    // set value for variables
    $first_name = $_POST['fistname'];
    $last_name =$_POST['lsatname'];
    $email = $_POST['email'];
    $addres =$_POST['address'];
    $phoneNo =$_POST['phoneNo'];
    $password =$_POST['paw'];
    $repassword =$_POST['repaw'];

     //checking email address 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email is a valid email address");
        $errors[]='Email address is invalid';
      }

     // check password and re_password are same
    if($password != $repassword)
     {
        $errors[]='Re-Entered password is incorrect';
     }

  
     // check if email address already exists
      $email = mysqli_real_escape_string($connection, $_POST['email']);
      $query = "SELECT * FROM customer WHERE email = '{$email}' LIMIT 1";
     
       $result_set = mysqli_query($connection, $query);

       if($result_set)
       {
          if(mysqli_num_rows($result_set)==1)
          {
               $errors[] = 'Email address already exists';
          }
       }

     
     
         $first_name = mysqli_real_escape_string($connection,$_POST['fistname']);
         $last_name  = mysqli_real_escape_string($connection,$_POST['lsatname']);
         $email = mysqli_real_escape_string($connection,$_POST['email']); 
         $address = mysqli_real_escape_string($connection,$_POST['address']);
         $phoneNo = mysqli_real_escape_string($connection,$_POST['phoneNo']);
         $password = mysqli_real_escape_string($connection,$_POST['paw']);
         $hashpasswrd = sha1($passwrd);

         $query = "INSERT INTO customer (c_no,c_fname,c_lname,phone_no,address,email,pass) VALUES ('','$first_name','$last_name','$phoneNo','$address','$email','$hashpasswrd')";
         

         if($connection -> query($query))
         {
             echo"<script> alert('Successfully')</script>";
         }
         else
         {
            echo $errors;
         }
        //  $result = mysqli_query($connection,$query);
        //  if ($result)
        //  {
        //      header('Location:home1.php');
        //  }
        //  else
        //  {
        //      echo $errors;
        //  }
     



?>


