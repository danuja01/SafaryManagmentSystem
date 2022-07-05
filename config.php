<?php

//connect to db
$conn = mysqli_connect('localhost' , 'danuja', 'test1234', 'Ceylon_Safari');

//check the connection
if (!$conn) {
    die ('connection error: '.mysqli_connect_error());
  }
  
?>