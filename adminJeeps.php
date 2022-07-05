<?php 

include('./config/db_connect.php');

//query for all Jeeps
$sql = "SELECT * FROM jeeps ";

//make query and get result
$result = mysqli_query($conn, $sql);


//fetch the resulting rows as an array
$Jeeps = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
            <th>Jeeps</th>
            <th>Price</th>
        </tr>

        <?php foreach($Jeeps as $jip): ?>

        <tr>
            <form action="adminJeeps.php" method="POST" role="form">
                <td><?php echo htmlspecialchars($jip['id']); ?></td>
                <td><?php echo htmlspecialchars($jip['name']); ?></td>
                <td><?php echo htmlspecialchars($jip['price']); ?></td>
            </form>
        </tr>

        <?php endforeach; ?>
    </table>

</div>

</body>

</html>