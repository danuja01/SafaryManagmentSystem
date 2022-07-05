<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="wiadth=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./src/css/header-footer.css" />


    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;600;900&display=swap"
        rel="stylesheet" />

    <!-- icons -->

    <script src="https://kit.fontawesome.com/5f4515a83f.js" crossorigin="anonymous"></script>


    <!-- js -->

    <script src="./src/java script/script.js"></script>


</head>

<body>
    <header class="header">
        <nav class="navbar">

            <img class="logo" src="./src/images/MicrosoftTeams-image.png">

            <div class="wish-list">
                <button class="btn-wish" onclick="goCart()"><i class="fa fa-heart"></i> Oder&nbsplist</button>
            </div>


            <div class="nav-user">
                <button id="logout" class="btn-log">Welcome, <?php echo $_SESSION["first_name"]; ?>!</button>
            </div>

            <!-- <div class="nav-profile">
                <p class="name">Welcome <?php echo $_SESSION['first_name']; ?>!</p>

            </div> -->

            <script>
            var btn = document.querySelector(".btn-log");

            btn.addEventListener("mouseover", function() {

                this.textContent = "LOG OUT!";

            })
            btn.addEventListener("mouseout", function() {
                this.textContent =
                    'Welcome, <?php echo $_SESSION["first_name"]; ?>! ';


                document.getElementById("logout").onclick = function adminAddItems() {
                    window.location.href = "./logout.php";
                };

            })
            </script>


            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="./Home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="./destination.php" class="nav-link">Destination</a>
                </li>
                <li class="nav-item">
                    <a href="./services.php"" class=" nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="./AboutUs.php" class="nav-link">About&nbspUs</a>
                </li>
                <li class="nav-item">
                    <a href="./Contact Us.php" class="nav-link">Contact&nbspUs</a>
                </li>
                <li class="nav-item">
                    <a href="./feedback.php" class="nav-link">Feedback</a>
                </li>
            </ul>
        </nav>
    </header>