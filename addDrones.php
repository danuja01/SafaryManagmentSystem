<?php

include('./config/db_connect.php');

  $dname = $dprice = '';


if(isset($_POST['submit'])){

    
    $dname = mysqli_real_escape_string($conn, $_POST['dname']);
    $dprice = mysqli_real_escape_string($conn, $_POST['dprice']);
    
    //create sql

    $sql = "INSERT INTO drones(name,price) VALUES('$dname', '$dprice')";
    

}

?>

<?php include('./src/Header_footer/adminHeader.php') ?>

<div class="content">
    <form action="addDrones.php" method="POST">

        <label>Drone Name : </label>
        <input type="text" name="dname" value="<?php echo htmlspecialchars($dname) ?>" required />

        <label>Drone Price:</label>
        <input type="text" name="dprice" value="<?php echo htmlspecialchars($dprice) ?>" required />

        <input type="submit" value="ADD" name="submit" />

        <!-- alert if success -->

        <?php
    if(mysqli_query($conn, $sql)){ 
        $alert = "Drone Added"
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