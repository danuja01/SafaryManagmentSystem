<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php require_once('../config/db_connect.php'); ?>
<?php session_start();?>
<?php

$errors = array();
$Email ="";
$passwrd ="";
   
   // check for form submission
   if(isset($_POST['submit'])){

    
// check if the username and password has been entered
       if(!isset($_POST['email'])|| strlen(trim($_POST['email']))<1)
       {
           $errors[] = 'Email is Missing/ Invalid';
       }
       if(!isset($_POST['pass'])|| strlen(trim($_POST['pass']))<1)
       {
           $errors[] = 'Password is Missing/ Invalid';
       }

   // check if there are any errors in the form
   if(empty($errors))
   {
       //save username and password into variables
       $Email = $_POST['email'];
       $passwrd = $_POST['pass'];
      // $hashed_paw = sha1($paw);
   }

     // prepare database query


     $query = "SELECT * FROM customer
                WHERE email = '$Email'
                AND pass = '$passwrd'
                limit 1";

    $result_set = mysqli_query($conn,$query);
         if ($result_set)
             {
                  if(mysqli_num_rows($result_set) == 1)
                    {
                      $customer =mysqli_fetch_assoc($result_set);
                      $_SESSION['user_id']=$customer['c_no'];
                      $_SESSION['last_name']=$customer['c_lname'];
                      $_SESSION['first_name']=$customer['c_fname'];
                      $_SESSION['1phone_no']=$customer['phone_no'];
                      $_SESSION['address']=$customer['address'];
                      $_SESSION['pass']=$customer['pass'];
                      $_SESSION['email']=$customer['email'];
                        // check if the user is valid
                        //redirect to home
                         header('Location:../Home.php');
                    }
                   else
                   {
                          //user name or password invalid
                         $errors[] = 'Invalid Email/Password';
                 
                   }

                }
           else
            {
                $errors[] ='Database query failed';
            }
    } 


    
?>


<html>

<head>

    <title>Ceylon Safari</title>

    <link rel="stylesheet" href="../src/css/Logun_cus.css">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../src/css/Logun_cus.css" />
    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;600;900&display=swap"
        rel="stylesheet" />
    <!-- icons -->

    <script src="https://kit.fontawesome.com/5f4515a83f.js" crossorigin="anonymous"></script>


</head>

<body>
    <!--header-->
    <header>

        <div class="header">
            <img class="logo" src="../src/images/MicrosoftTeams-image.png">
        </div>


    </header>

    <!--form-->
    <div class="form">
        <form action="Login_cus.php" method="POST">


            <fieldset style="width:50%">
                <h2>Customer Login</h2>


                <div class="imgcontainer">
                    <img src="../src/images/login/1587721784.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="password"><b>Password</b></label>
                    <input type="checkbox" onclick="pawvisi()" id="chek"> Show Password
                    <input type="password" placeholder="Enter Password" name="pass" id="paw" required>

                    <a href="./forgetpass.php" class="forget">
                        <p id ="fp">Forget Password</p>
                    </a>

                    <?php
         if(isset($errors) && !empty($errors))
         {
          
           echo'<div class="alert" id="er">
           <span class="closebtn" onclick="closeerror()">&times;</span> 
           <strong>Invalid!</strong> Email or Password.
           
         </div>';   

         echo'<script>

         function closeerror(){

          document.getElementById("er").style.display = "none"
          }

         </script>';
         }
    ?>



                    <button type="submit" name="submit">submit</button>

                    <center> <a href="./registercus.php">Register</a></center>



        </form>

        </fieldset>

    </div>


    <!--footer-->

    <footer>

        <div class="footer">
            <p class="foote-title">Cylone safari (pvt)Ltd.</p>
        </div>


    </footer>

    <script>
    // for login page
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    // for forget password page
    function openforgetpasswordForm() {

        document.getElementById("forgetpawForm").style.display = "block"

    }

    function closeforgetpasswordForm() {

        document.getElementById("forgetpawForm").style.display = "none"

    }
    // for reset password page
    function openresetpasswordForm() {

        document.getElementById("resetpawForm").style.display = "block"

    }

    function closeresetpasswordForm() {

        document.getElementById("resetpawForm").style.display = "none"

    }

    // for invalid email and password alert
    function openinvalidForm() {

        document.getElementById("invaliderror").style.display = "block"

    }

    function closeinvalidForm() {

        document.getElementById("invaliderror").style.display = "none"

    }

    function closeerror() {

        document.getElementById("er").style.display = "none"

    }

    function pawvisi() {
        var x = document.getElementById("paw");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>













</body>

</html>