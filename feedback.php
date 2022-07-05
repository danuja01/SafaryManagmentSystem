<?php 
  $name=$_POST['fullname'];
  $feedback=$_POST['feedback'];



  $conn = new mysqli('localhost','danuja','test1234','Ceylon_Safari');
  if($conn->connect_error){
    die("connection Failed : " .$conn->connect_error);
  }else{
    $stmt = $conn-> prepare('insert into feedback(Full_name,Feedback)
       values(?,?)');
    $stmt-> bind_param ("ss",$name,$feedback);
    $stmt-> execute();
    // echo "registration successfully..";

    $stmt->close();
    $conn->close();
  }


?>

<?php include('./src/Header_footer/header.php') ?>
<link rel="stylesheet" href="./src/css/feedback.css">

<h1>Feedback</h1>

<div class="container">

    <form action="feedback.php" method="POST">

        <input type="text" name="fullname" required placeholder="Enter Full Name"><br><br>

        <textarea placeholder="Type your Feedback here...." type="text" name="feedback" required></textarea>
        <input type="submit" value="Submit">

    </form>
</div>



<?php include('./src/Header_footer/footer.php') ?>