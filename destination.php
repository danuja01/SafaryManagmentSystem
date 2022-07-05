<?php 
 session_start();  
 include('./config/db_connect.php');
 


 
 if(isset($_POST["add_to_cart"]))  
 {  
    $new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
    $_SESSION['date'] = $new_date;
    $_SESSION['ppl'] = $_POST['ppl'];


      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  ,
                );  
                header('Location:safariVehicles.php');
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"] , 
         
           ); 

           $_SESSION["shopping_cart"][0] = $item_array;  
      } 
      header('Location:safariVehicles.php');
 }  
 
 ?>

<?php include('./src/Header_footer/header.php') ?>
<link rel="stylesheet" href="./src/css/destination.css">
<!-- add a header (c)-->
<h1 class="title">where you want to go ?</h1>


<!--select place-->

<div class="card-set">

    <?php

$query = "SELECT * FROM Destinations  ";  
$result = mysqli_query($conn, $query);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
?>


    <div class="card">
        <form class=" form-inline" method="post" action="destination.php?action=add&id=<?php echo $row["id"]; ?>">
            <img src="./src/images/wildlife/1.jpg" style="width:100%">
            <h1 class="card-head"><?php echo htmlspecialchars($row['name']); ?></h1>
            <p class="title"><?php echo htmlspecialchars("Rs.".$row['price']."/-"); ?></p>
            <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
            <input type=" number" placeholder="No of People" name="ppl">
            <div style="margin: 24px 0;">
            </div>
            <input type="hidden" name="quantity" class="form-control" value="1" />
            <input type="hidden" name="hidden_name" value="<?php echo $row["brand"]." ".$row["name"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn-card" value="Add to List" />
            <!-- <p><button class="btn-card"><i class="fas fa-shopping-cart"></i></i> Add to List</button></p> -->
        </form>
    </div>
    <?php   }  
                }  ?>

</div>


</div>
</div>


<!--add header-->
<br />
<hr class="hr" />
<h1>Populer Destination</h1>
<div class="card-set">
    <div class="card">
        <img src="./src/images/wildlife/1.jpg" style="width: 100%" />
        <h1 class="card-head">Yala National Park</h1>

        <div style="margin: 24px 0">
            <a class="btn-popup" href="#popup1">MORE INFO</a>
        </div>

        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <br />
                <div class="content">
                    With 378 square miles of area, Yala National Park is Sri Lanka’s
                    second largest national park and also the most popular place to
                    safari in Sri Lanka. <br /><br />
                    Yala’s location in the very southern part of Sri Lanka (162 miles
                    southeast of Colombo) puts it within easy proximity of many
                    popular beaches, and three wildlife sanctuaries clustered nearby
                    allow the animals to wander freely between the refuges. <br />
                    An estimated 350 elephants roam Yala National Park, and the
                    leopard population is thriving. Along with the land animals, 215
                    species of birds live in or pass through the park. The best time
                    to visit Yala National Park is from June to September, as the
                    Northeast Monsoon replenishes important water sources that become
                    competitive during the dry season. <br />
                    Yala National Park stays busy. Unfortunately, the popularity is
                    taking a toll on animals and infrastructure. Along with an
                    increasing number of international visitors, Yala attracts waves
                    of pilgrims who come to pay homage at the religious ruins there.
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="./src/images/wildlife/2.jpg" style="width: 100%" />
        <h1 class="card-head">Wasgamuwa National Park</h1>

        <div style="margin: 24px 0">
            <a class="btn-popup" href="#popup1">MORE INFO</a>
        </div>

        <div id="popup2" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <br />
                <div class="content">
                    Wasgamuwa National Park is 152 square miles of refuge set roughly
                    in the center of Sri Lanka’s interior. The cultural capital of
                    Kandy is approximately one hour away from the park’s entrance,
                    making Wasgamuwa an excellent choice for enjoying a safari in Sri
                    Lanka. A few leopards and sloth bears live in the park but are
                    rarely seen. Instead, visitors get to enjoy the herd of at least
                    150 elephants and scores of birds. The ancient history of the area
                    is an exciting bonus for visitors. Remnants of an 1,800-year-old
                    temple complex, Buduruwayaya Archaeological Site, can be found
                    here. A historic battle between two kings also took place more
                    than 2,000 years ago within the confines of the modern-day park.
                    Meanwhile, animals can be seen drinking from irrigation canals and
                    stone tanks constructed in the 12th century AD. The driest months
                    at Wasgamuwa National Park are from July to September, while the
                    best months for spotting elephants are between November and May.
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="./src/images/wildlife/3.jpg" style="width: 100%" />
        <h1 class="card-head">Willpattu National Park</h1>
        <!-- <p>&nbsp</p> -->
        <div style="margin: 35px 0">
            <a class="btn-popup" href="#popup1">MORE INFO</a>
        </div>

        <div id="popup3" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <br />
                <div class="content">
                    Wilpattu is Sri Lanka’s largest national park; however, only
                    around 25 percent of the 508 square miles is accessible to
                    visitors. The other 75 percent provides sanctuary for many
                    exciting species of wildlife, including leopards, elephants, and
                    sloth bears. The animals had more than 15 years to prosper and
                    propagate while the national park was closed due to Sri Lanka’s
                    civil war and unrest. Unlike most of the national parks in Sri
                    Lanka, Wilpattu is located north of Colombo and is furthest from
                    busy beaches such as Unawatuna. March and April are rainy, but
                    they're good months for spotting abundant wildlife. The national
                    park is driest from May to September, prompting animals to migrate
                    in search of less competitive water sources. Before you book a
                    trip, be aware that many roads in the park are severely rutted.
                    Due to the number of potholes, some eco-agencies that lead safaris
                    in Wilpattu don’t recommend their adventures for pregnant women or
                    people suffering from back problems.
                </div>
            </div>
        </div>
    </div>
</div>

<!--add logo-->
<?php include('./src/Header_footer/footer.php') ?>