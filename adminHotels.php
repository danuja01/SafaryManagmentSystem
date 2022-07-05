<?php 

include('./config/db_connect.php');

//query for all Hotels
$sql = "SELECT * FROM hotels ";

//make query and get result
$result = mysqli_query($conn, $sql);


//fetch the resulting rows as an array
$Hotels = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);


//close connection
mysqli_close($conn); 

?>

<?php include('./src/Header_footer/adminItemHeader.php') ?>
<link rel="stylesheet" href="./src/css/adminItem.css">

<div class="table">
    <table id="customers">
        <tr>
            <th>ID</th>
            <th>Hotels</th>
            <th>Price</th>
        </tr>

        <?php foreach($Hotels as $htl): ?>

        <tr>
            <form action="adminHotels.php" method="POST" role="form">
                <td><?php echo htmlspecialchars($htl['id']); ?></td>
                <td><?php echo htmlspecialchars($htl['name']); ?></td>
                <td><?php echo htmlspecialchars($htl['price']); ?></td>
            </form>
        </tr>

        <?php endforeach; ?>
    </table>

</div>

</body>

</html>