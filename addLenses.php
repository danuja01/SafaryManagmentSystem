<?php

include('./config/db_connect.php');

  $lbrand = $lmodel = $lprice = '';


if(isset($_POST['submit'])){

    
    $lbrand = mysqli_real_escape_string($conn, $_POST['lbrand']);
    $lmodel = mysqli_real_escape_string($conn, $_POST['lmodel']);
    $lprice = mysqli_real_escape_string($conn, $_POST['lprice']);
    
    //create sql

    $sql = "INSERT INTO lenses(brand,name,price) VALUES('$lbrand', '$lmodel' , '$lprice')";
    

}

?>

<?php include('./src/Header_footer/adminHeader.php') ?>

<div class="content">
    <form action="addLenses.php" method="POST">
        <label>Lense Brand : </label>
        <select id="country" name="lbrand" value="<?php echo htmlspecialchars($lbrand) ?>" required>
            <option value="Nikon">Nikon</option>
            <option value="Canon">Canon</option>
        </select>

        <label>Lense Model : </label>
        <input type="text" name="lmodel" value="<?php echo htmlspecialchars($lmodel) ?>" required />

        <label>Lense Price:</label>
        <input type="text" name="lprice" value="<?php echo htmlspecialchars($lprice) ?>" required />

        <input type="submit" value="ADD" name="submit" />

        <!-- alert if success -->

        <?php
    if(mysqli_query($conn, $sql)){ 
        $alert = "Lense Added"
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