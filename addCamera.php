<?php

include('./config/db_connect.php');

  $cbrand = $cmodel = $cprice = '';


if(isset($_POST['submit'])){

    
    $cbrand = mysqli_real_escape_string($conn, $_POST['cbrand']);
    $cmodel = mysqli_real_escape_string($conn, $_POST['cmodel']);
    $cprice = mysqli_real_escape_string($conn, $_POST['cprice']);
    
    //create sql

    $sql = "INSERT INTO cameras(brand,name,price) VALUES('$cbrand', '$cmodel' , '$cprice')";
    
}

?>

<?php include('./src/Header_footer/adminHeader.php') ?>

<div class="content">
    <form action="addCamera.php" method="POST">
        <label>Camera Brand : </label>
        <select id="country" name="cbrand" value="<?php echo htmlspecialchars($cbrand) ?>" required>
            <option value="Nikon">Nikon</option>
            <option value="Canon">Canon</option>
        </select>

        <label>Camera Model : </label>
        <input type="text" name="cmodel" value="<?php echo htmlspecialchars($cmodel) ?>" required />

        <label>Camera Price:</label>
        <input type="text" name="cprice" value="<?php echo htmlspecialchars($cprice) ?>" required />

        <input type="submit" value="ADD" name="submit" />

        <!-- alert if success -->

        <?php
    if(mysqli_query($conn, $sql)){ 
        $alert = "Camera Added"
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