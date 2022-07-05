<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php require_once('../config/db_connect.php'); ?>
<?php

$np = $_POST['new_password'];
$rnp = $_POST['renew_password'];
$email = $_POST['email'];
$error = array();
// $hashed_paw = sha1($paw);


// prepare database query

if($np==$rnp)
{
    $query = "UPDATE customer SET pass='$np' WHERE email='$email'";
    if(isset($_POST['submit'])){
    if($conn -> query($query))
         {
             echo"<script> alert('Successfully Update!')</script>";
         }
         else
         {
           $error[] = "passwords are not same";
         }

}
}
   


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../src/css/resetpass.css" />

    <!-- js -->
    <script src="../src/java script/script.js"></script>

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
            <form method="POST" action="resetpass.php" class="form-container">
                <h1>Reset Password</h1>

                <label for="email"><b></b></label>
                <input type="text" placeholder="Enter Email" name="email" required />

                <label for="new_password"><b></b></label>
                <input type="password" placeholder="Enter New Password" name="new_password" required />

                <label for="renew_password"><b></b></label>
                <input type="password" placeholder="Re_Enter New Password" name="renew_password" required />

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
                <button type="submit" class="btn" name="submit">Set new password</button>
                <button type="button" class="btn cancel" onclick="goLogin()">Cancel</button>
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