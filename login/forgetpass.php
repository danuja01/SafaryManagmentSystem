<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php require_once('../config/db_connect.php'); ?>
<?php session_start();?>
<?php


$errors = array();

   
   // check for form submission
  

   // check if there are any errors in the form
   
       //save username and password into variables
       $Q1 = $_POST['Q1'];
       $Q2 = $_POST['Q2'];
      // $hashed_paw = sha1($paw);
   

     // prepare database query


     $query = "SELECT * FROM customer
                WHERE q1 = '$Q1'
                AND q2 = '$Q2'
                limit 1";

   
$result_set = mysqli_query($conn,$query);
if(isset($_POST['forok'])){
if ($result_set)
{
  if(mysqli_num_rows($result_set) == 1)
    {
      
      // ceck if the user is valid
        //redirect to home
         header('Location:resetpass.php');
        
    }  else
    {
     
      $errors[] = 'Answers are incorrect';
    
      
    }


} }

     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../src/css/customer_login.css" />
</head>

<body>
    <!--header-->
    <header>

        <div class="header">
            <img class="logo" src="../src/images/MicrosoftTeams-image.png">
        </div>


    </header>


    <div class="form-popup" id="forgetpawForm">
        <fieldset style="width:50%">
            <form action="forgetpass.php" class="form-container" method="POST">
                <h1>Forget Password</h1>
                <label for="Q1"><b>Select Question 1</b></label>
                <select name="Question_1" id="Qs" required>
                    <option value=""></option>
                    <option value="">What is your favorite color?</option>
                    <option value="">What is your first shool?</option>
                    <option value="">What is your pet name?</option>
                    <option value="">What was your nickname?</option>
                </select>

                <label for="Q1"><b></b></label>
                <input type="text" placeholder="Enter Answer for Q1" name="Q1" required />

                <label for="q2"><b>Select Question 2</b></label>
                <select name="Question_2" id="Qs" required>
                    <option value=""></option>
                    <option value="">What is your uncles name?</option>
                    <option value="">What was your favorite food</option>
                    <option value="">What’s your favorite movie?</option>
                    <option value="">
                        What is ypur favorite drink?
                    </option>
                </select>

                <label for="Q2"><b></b></label>
                <input type="text" placeholder="Enter Answer for Q2" name="Q2" required />

                <!-- error div  -->
                <div class="alert" id="mmm">
                    <span class="closebtn" onclick="closeerror()">&times;</span>
                    <strong>Invalid!</strong> password not same.
                </div>
                <?php   if(isset($errors) && !empty($errors))
            {

            echo'<div class="alert" id="er">
                <span class="closebtn" onclick="closeerror()">&times;</span>
                <strong>Answers are incorrect!</strong>

            </div>';

            echo'<script>
            function closeerror() {

                document.getElementById("er").style.display = "none"
            }
            </script>';
            }
            ?>
                <button type="submit" name="forok" class="btn" onclick="">Ok</button>
                <center> <a href="./Login_cus.php" class="forget">Back to Login</a> </center>

            </form>
        </fieldset>
    </div>

    <footer>

        <div class="footer">
            <p class="foote-title">Cylone safari (pvt)Ltd.</p>
        </div>

    </footer>
</body>

</html>