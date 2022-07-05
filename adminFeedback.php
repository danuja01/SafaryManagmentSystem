<?php 

include('./config/db_connect.php');

//query for all feedback
$sql = "SELECT * FROM feedback ";

//make query and get result
$result = mysqli_query($conn, $sql);


//fetch the resulting rows as an array
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);


//close connection
mysqli_close($conn); 

?>

<?php include('./src/Header_footer/adminItemHeader.php') ?>
<link rel="stylesheet" href="./src/css/adminItem.css">

<div class="table">
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Feedback</th>
        </tr>

        <?php foreach($feedback as $fed): ?>

        <tr>
            <form action="adminfeedback.php" method="POST" role="form">
                <td><?php echo htmlspecialchars($fed['Full_Name']); ?></td>
                <td><?php echo htmlspecialchars($fed['Feedback']); ?></td>
            </form>
        </tr>

        <?php endforeach; ?>
    </table>

</div>

</body>

</html>