<?php 

include('./config/db_connect.php');

//query for all drones
$sql = "SELECT * FROM drones ";

//make query and get result
$result = mysqli_query($conn, $sql);


//fetch the resulting rows as an array
$drones = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);



if(isset($_POST['delete'])){

    $key = $_POST['keyToDelete'];

    //check if the records exist to delete or not
    $check = mysqli_query($conn,"SELECT * FROM drones WHERE id = '$key' ") or die("no id");

    if(mysqli_num_rows($check)>0){
        //if records found and deleted

        $delete = mysqli_query($conn,"DELETE FROM drones WHERE id = '$key'") or die("NOT DELETED");
        header('location:adminDrones.php');
        
        

    }else {
        echo "Recode does not exsist!";
    }

}

//close connection
mysqli_close($conn); 

?>

<?php include('./src/Header_footer/adminItemHeader.php') ?>
<link rel="stylesheet" href="./src/css/adminItem.css">

<div class="table">
    <table id="customers">
        <tr>
            <th>ID</th>
            <th>drones</th>
            <th>Price</th>
            <th>Remove Item</th>
        </tr>

        <?php foreach($drones as $bin): ?>

        <tr>
            <form action="adminDrones.php" method="POST" role="form">
                <td><?php echo htmlspecialchars($bin['id']); ?></td>
                <td><?php echo htmlspecialchars($bin['name']); ?></td>
                <td><?php echo htmlspecialchars($bin['price']); ?></td>
                <input type="hidden" name="keyToDelete" value="<?php echo $bin['id'];?>">
                <td><input type="submit" name="delete" value="Delete"></td>

            </form>
        </tr>

        <?php endforeach; ?>
    </table>

</div>

</body>

</html>