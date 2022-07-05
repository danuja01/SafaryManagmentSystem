<?php

include('./config/db_connect.php');

$a = $b = $c = $d = $e = $f = $g = '';

$date = date('Y/m/d');

if(isset($_POST['submit'])){

//used to escape all special characters for use in an SQL query
$a=mysqli_real_escape_string($conn,$_POST['name']) ;
$b=mysqli_real_escape_string($conn,$_POST['address']); 
$c=mysqli_real_escape_string($conn,$_POST['email']); 
$d=mysqli_real_escape_string($conn,$_POST['cardnumber']); 
$e=mysqli_real_escape_string($conn,$_POST['exp']); 
$f=mysqli_real_escape_string($conn,$_POST['ccv']); 
$g=mysqli_real_escape_string($conn,$_POST['tot']); 




if($e < $date)
{
   echo'<script>alert("Invalid expire date");</script>'  ;
   $alert = "Invalid expire date";
}else{
    $alert = "Payment Success!";
  $sql = "INSERT INTO payment(d_name,d_address,d_email,card_no,exp,ccv,total)  VALUES ('$a' , '$b' , '$c' , '$d' , '$e' , '$f', '$g')";
}


}

?>



<?php include('./src/Header_footer/header.php'); ?>

<link rel="stylesheet" href="./src/css/payment.css" />
<div class="container">
    <div class="Payment-form  frm-div">
        <form action="checkout.php" method="post">

            <fieldset class="frame" style="border: none;">
                <!--Div tag for inside of the form-->
                <div class="all-form"><br>
                    <h3 id="toping"> Details</h3>


                    <div class="shipping">
                        <label id="Name"> Name</label> <br>
                        <input class="txtin" type="text" placeholder="Nimal Siripala" name="name"
                            value="<?php echo htmlspecialchars($a) ?>" required> <br>
                        <label id="Address">Address</label> <br>
                        <input class="txtin" type="text" placeholder="12/b Kandy" name="address"
                            value="<?php echo htmlspecialchars($b) ?>" required> <br>
                        <label id="Email">Email</label> <br>
                        <input class="txtin" type="text" placeholder="nimal@abc.com" name="email"
                            value="<?php echo htmlspecialchars($c) ?>" required> <br><br>
                    </div>

                    <h3 id="toping">Online Payment Information</h3>
                    <div class="OnlinePay">
                        <label name="cardnumber">Card No</label><br>
                        <input class="txtin" type="text" placeholder="1111-2222-3333-4444"
                            value="<?php echo htmlspecialchars($d) ?>" required name="cardnumber"><br>
                        <label name="exp">Expire Date</label><br>
                        <input class="txtin" type=text placeholder="YYY/MM/DD" required name="exp"
                            value="<?php echo htmlspecialchars($e) ?>" required><br>
                        <label name="CCV"> CCV </label> <br>
                        <input class="txtin" type="text" placeholder="217" required name="ccv"
                            value="<?php echo htmlspecialchars($f) ?>"><br>
                        <input type="hidden" value="<?php echo $_SESSION['total'] ?>" name="tot">
                    </div>

                    <h2>Total = Rs.<?php echo $_SESSION['total'] ?>/-</h2>

                    <div class="sum-btn">
                        <br>
                        <input type="submit" name="submit" value="Order now"> <br>
                    </div>






                    <?php
    if(mysqli_query($conn, $sql)){ 
       
        ?>
                    <div class="alert">

                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <?php echo $alert ?>
                    </div>

                    <?php  } else{
        //error
        echo 'query rror: '. mysqli_error($conn);
    }?>


        </form>
    </div>
</div>
</div>
</fieldset>
<br>

<script>
function disable() {
    document.getElementsByClassName('OnlinePay').disabled = true;
}
</script>


<?php include('./src/Header_footer/footer.php'); ?>