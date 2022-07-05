<?php include('./src/Header_footer/header.php') ?>

<!-- css -->

<link rel="stylesheet" href="./src/css/home.css">


<!--main body-->
<!--slide image-->
<center>
    <div class="slide-cont">
        <div class="slideshow">
            <img class="mySlides" src="./src/images/home/img1.jpg">
            <img class="mySlides" src="./src/images/home/img2.jpg">
            <img class="mySlides" src="./src/images/home/img3.jpg">
            <img class="mySlides" src="./src/images/home/img4.jpg">
            <img class="mySlides" src="./src/images/home/img5.jpg">
            <img class="mySlides" src="./src/images/home/img6.jpg">
        </div>
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
        <p>To be the best and most preferred tour operator in Sri Lanka and within the Sri Lankan Development Community
            region.</p>

    </div>

    <div class="box box-down blue">
        <h2>Our Mission</h2>
        <p>To offer the best and excellent services that will always give a memorable and unforgettable Experience to
            our clients.</p>

    </div>
</div>

</div>
<br></br>

<!--footer-->

<?php include('./src/Header_footer/footer.php'); ?>