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
                <button class="btn-wish"><i class="fa fa-heart"></i> wish&nbsplist</button>
            </div>
            <script src="./src/java script/script.js"></script>

            <div class="nav-user">
                <button class="btn-log" id="index-login" onclick="login()">sign in/log in <i
                        class=" fas fa-user fa-2x"></i></button>
            </div>


            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="./index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="./login/login_cus.php" class="nav-link">Destination</a>
                </li>
                <li class="nav-item">
                    <a href="./login/login_cus.php" class=" nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="./login/login_cus.php" class="nav-link">About&nbspUs</a>
                </li>
                <li class="nav-item">
                    <a href="./login/login_cus.php" class="nav-link">Contact&nbspUs</a>
                </li>
                <li class="nav-item">
                    <a href="./login/login_cus.php" class="nav-link">Feedback</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- css -->

    <link rel="stylesheet" href="./src/css/home.css">


    <!--main body-->
    <!--slide image-->
    <center>
        <div class="slide show">
            <img class="mySlides" src="./src/images/home/img1.jpg">
            <img class="mySlides" src="./src/images/home/img2.jpg">
            <img class="mySlides" src="./src/images/home/img3.jpg">
            <img class="mySlides" src="./src/images/home/img4.jpg">
            <img class="mySlides" src="./src/images/home/img5.jpg">
            <img class="mySlides" src="./src/images/home/img6.jpg">
        </div>
    </center>

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 4000); // Change image every 2 seconds
    }
    </script>


    <br></br>
    <center>
        <!--box 1-->
        <div class="row">
            <div class="column">
                <div class="flip-box1">
                    <div class="flip-box1-inner">
                        <div class="flip-box1-front">

                        </div>
                        <div class="flip-box1-back">

                        </div>
                    </div>
                </div>
            </div>
            <!--box 2-->
            <div class="column">
                <div class="flip-box2">
                    <div class="flip-box2-inner">
                        <div class="flip-box2-front">
                        </div>
                        <div class="flip-box2-back">

                        </div>
                    </div>
                </div>
            </div>
            <!--box 3-->
            <div class="column">
                <div class="flip-box3">
                    <div class="flip-box3-inner">
                        <div class="flip-box3-front">

                        </div>
                        <div class="flip-box3-back">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </center>


    <!-- reviews table -->
    </br>
    </br>
    <div class="cont">
        <div class="box red">
            <h2>Our Vision</h2>
            <p>To be the best and most preferred tour operator in Sri Lanka and within the Sri Lankan Development
                Community
                region.</p>

        </div>

        <div class="box box-down blue">
            <h2>Our Mission</h2>
            <p>To offer the best and excellent services that will always give a memorable and unforgettable Experience
                to
                our clients.</p>

        </div>
    </div>


    <br></br>

    <footer class="footer">
        <div class="flex-container">
            <div class="flex-item">
                <img class="logo-footer" src="./././././src/images/MicrosoftTeams-image.png " alt=" " />
            </div>
            <div class="flex-item footer-btn">
                <button class="btn-social btn-fb" onclick="goFb()">
                    <i class="fab fa-facebook-f" aria-hidden="true "></i>
                    facebook</button><br />
                <button class="btn-social btn-insta" onclick="goInsta()">
                    <i class="fab fa-instagram" aria-hidden="true "></i>
                    instagram</button><br />
                <button class="btn-social btn-twitter" onclick="goTweet()">
                    <i class="fab fa-twitter" aria-hidden="true "></i> twitter
                </button>
            </div>
            <div class="flex-item">
                <h2 class="footer-content-title">Navigation</h2>
                <ul class="footer-nevigation">
                    <li><a class="footer-links" href="./index.php">Home</a></li>
                    <li><a class="footer-links" href="./login/login_cus.php">Destination</a></li>
                    <li><a class="footer-links" href="./login/login_cus.php">Services</a></li>
                    <li><a class="footer-links" href="./AboutUs.php">About Us</a></li>
                    <li><a class="footer-links" href="./Contact Us.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="flex-item">
                <h2 class="footer-content-title">General</h2>
                <ul class="footer-nevigation">
                    <li><a class="footer-links" href="./privacy&policy.php">Privacy &amp; policy</a></li>
                    <li><a class="footer-links" href="./terms&conditions.php">Terms &amp; conditions</a></li>
                    <li><a class="footer-links" href="#">Sitemap</a></li>
                </ul>
            </div>
            <div class="flex-item">
                <h2 class="footer-content-title">Contact Us</h2>
                <ul class="footer-nevigation">
                    <li>Email: ceylonsafari@gmail.com</li>
                    <li>Contact No: +94 715 2693</li>
                    <li>
                        Adress: Jayanthipura,<br />
                        Baththaramulle
                    </li>
                </ul>
            </div>
        </div>
        <p class="copyright">©️2020 Ceylon Safari All Rights Reserved</p>
    </footer>
</body>

</html>