<?php 

include('./config/db_connect.php');

//query for all Oder
$sql = "SELECT pid, d_name, d_email, total FROM payment ";

//make query and get result
$result = mysqli_query($conn, $sql);


//fetch the resulting rows as an array
$Oder = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);


//close connection
mysqli_close($conn); 

?>

<?php include('./src/Header_footer/adminItemHeader.php') ?>
<link rel="stylesheet" href="./src/css/adminItem.css">

<div class="table">
    <table id="customers">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Total</th>
        </tr>

        <?php foreach($Oder as $od): ?>

        <tr>
            <form action="adminOder.php" method="POST" role="form">
                <td><?php echo htmlspecialchars($od['pid']); ?></td>
                <td><?php echo htmlspecialchars($od['d_name']); ?></td>
                <td><?php echo htmlspecialchars($od['d_email']); ?></td>
                <td><?php echo "Rs.".htmlspecialchars($od['total'])."/-"; ?></td>
            </form>
        </tr>

        <?php endforeach; ?>
    </table>

</div>

</body>

</html>