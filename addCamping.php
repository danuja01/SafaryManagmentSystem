<?php

include('./config/db_connect.php');

  $ccat = $citem = $cprice = '';


if(isset($_POST['submit'])){

    
    $ccat = mysqli_real_escape_string($conn, $_POST['ccat']);
    $citem = mysqli_real_escape_string($conn, $_POST['citem']);
    $cprice = mysqli_real_escape_string($conn, $_POST['cprice']);
    
    //create sql

    $sql = "INSERT INTO camping(category,name,price) VALUES('$ccat', '$citem' , '$cprice')";
    
}

?>

<?php include('./src/Header_footer/adminHeader.php') ?>

<div class="content">
    <form action="addCamping.php" method="POST">
        <label>Category : </label>
        <select id="country" name="ccat" value="<?php echo htmlspecialchars($ccat) ?>" required>
            <option value="Tents">Tents</option>
            <option value="bags">bags</option>
            <option value="cooking">cooking</option>
        </select>

        <label>Item Name : </label>
        <input type="text" name="citem" value="<?php echo htmlspecialchars($citem) ?>" required />

        <label>Item Price:</label>
        <input type="text" name="cprice" value="<?php echo htmlspecialchars($cprice) ?>" required />

        <input type="submit" value="ADD" name="submit" />

        <!-- alert if success -->

        <?php
    if(mysqli_query($conn, $sql)){ 
        $alert = "Item Added"
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