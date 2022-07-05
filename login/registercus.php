<?php

include('../config/db_connect.php');

  $fname = '';
  $lname = '';
  $pno = '';
  $adress = '';
  $email = '';
  $pass = '';
  $q1 = '';
  $q2 = '';


if(isset($_POST['submit'])){

    
    $fname = mysqli_real_escape_string($conn, $_POST['fistname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lsatname']);
    $pno = mysqli_real_escape_string($conn, $_POST['phoneNo']);
    $adress = mysqli_real_escape_string($conn, $_POST['adress']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $repass = mysqli_real_escape_string($conn, $_POST['repass']);
    $q1 = mysqli_real_escape_string($conn, $_POST['Q1']);
    $q2 = mysqli_real_escape_string($conn, $_POST['Q2']);

    
    //create sql

    $query = mysqli_query($conn,"SELECT email FROM customer WHERE email='".$email."'");

  if (mysqli_num_rows($query) != 0)
  {
    $alert = "Email already exists";
  }

  else
  {
      if($pass == $repass){
    $alert = "User Added";
    $sql = "INSERT INTO customer(c_fname, c_lname, phone_no, address , email, pass, q1, q2) VALUES('$fname', '$lname', '$pno', '$adress', '$email', '$pass', '$q1', '$q2')";
    mysqli_query($conn, $sql);
      }else{
        $alert = "Password doesn't match!";
      }
  }

}

?>

<html>

<head>
    <!--customer registration-->
    <title>Ceylon Safari</title>

    <link rel="stylesheet" href="./style/Header_footer.css">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../src/css/registration.css" />
    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;600;900&display=swap"
        rel="stylesheet" />

    <!-- css -->
    <script src="https://kit.fontawesome.com/5f4515a83f.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--header-->


    <header>

        <div class="header">
            <img class="logo" src="../src/images/MicrosoftTeams-image.png">
        </div>


    </header>

    <!--registration form-->


    <div class="form">
        <?php if(isset($_POST['submit'])) {?>
        <!-- <span class="closebtn">$times</span> -->
        <h1 class="alerttop"><?php echo $alert ?></h1>
        <?php } ?>

        <fieldset style="width:60%; height:120%">

            <form action="registercus.php" method="POST" class="form-container" name="signup">


                <h1>SIGN UP</h1>



                <!--<label for="email"><b>Name</b></label>-->
                <input type="text" placeholder="Enter First Name" name="fistname" required id="fna">

                <input type="text" placeholder="Enter Last Name" name="lsatname" required id="lna">


                <input type="text" placeholder="Enter Phone No" name="phoneNo" required maxlength="10">

                <!-- <label for="address"><b>Address</b></label> -->
                <input type="text" placeholder="Enter Address" name="address" required>

                <!-- <label for="email"><b>Email</b></label> -->
                <input type="text" placeholder="Enter Email" name="email" required>

                <!-- <label for="password"><b>Password</b></label> -->
                <input type="text" placeholder="Enter Password" name="pass" id="pa" required>

                <!-- <label for="Re-password"><b>Re-Enter password</b></label> -->
                <input type="text" placeholder="Re-Enter password" name="repass" id="pa" required>

                <label for="Q1"><b>Select Question 1</b></label>
                <select name="Question_1" id="Qs" required>
                    <option value=""></option>
                    <option value="">What is your hometown?</option>
                    <option value="">What is your first shool?</option>
                    <option value="">What is your pen name?</option>
                    <option value="">What was your childhood nickname?</option>
                </select>
                <input type="Text" placeholder="Enter Answer" name="Q1" required>

                <label for="q2"><b>Select Question 2</b></label>
                <select name="Question_2" id="Qs" required>
                    <option value=""></option>
                    <option value="">What is your mother's maiden name?</option>
                    <option value="">What was your favorite food as a child</option>
                    <option value="">What’s your favorite movie?</option>
                    <option value="">What is the name of your favorite childhood friend?</option>
                </select>
                <input type="Text" placeholder="Enter Answer" name="Q2" required>


                <input type="submit" name="submit" class="btn" value="submit">


                <a class="btn-cancel" href="./Login_cus.php" id="cancel">Cancel</a>


            </form>
            <?php if(isset($_POST['submit'])) {?>
            <!-- <span class="closebtn">$times</span> -->
            <h1 class="alert"><?php echo $alert ?></h1>
            <?php } ?>

        </fieldset>


    </div>
    <br></br>

    <!--footer-->
    <footer>

        <div class="footer">
            <p class="foote-title">Cylone Safari (pvt)Ltd.</p>
        </div>

    </footer>


</body>

</html>