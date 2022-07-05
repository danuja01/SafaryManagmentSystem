<?php

include('./config/db_connect.php');

  $bname = $bprice = '';


if(isset($_POST['submit'])){

    
    $bname = mysqli_real_escape_string($conn, $_POST['bname']);
    $bprice = mysqli_real_escape_string($conn, $_POST['bprice']);
    
    //create sql

    $sql = "INSERT INTO Binoculars(name,price) VALUES('$bname', '$bprice')";
    
    //save to db and check
   
}

?>

<?php include('./src/Header_footer/adminHeader.php') ?>

<div class="content">
    <form action="addBinoculars.php" method="POST">

        <label>Binocular Name : </label>
        <input type="text" name="bname" value="<?php echo htmlspecialchars($bname) ?>" required />

        <label>Binocular Price:</label>
        <input type="text" name="bprice" value="<?php echo htmlspecialchars($bprice) ?>" required />

        <input type="submit" value="ADD" name="submit" />

        <?php
    if(mysqli_query($conn, $sql)){ 
        $alert = "Binocular Added"
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
</body>

</html>