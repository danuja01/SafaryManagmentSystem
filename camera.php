<?php 
 session_start();  
include('./config/db_connect.php');


if(isset($_POST["add_to_cart"]))  
{  
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
               $_SESSION["shopping_cart"][$count] = $item_array;  
          }  
          else  
          {  
               echo '<script>alert("Item Already Added")</script>';  
               echo '<script>window.location="camera.php"</script>';  
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
}  

 ?>

<?php include('./src/Header_footer/header.php'); ?>

<link rel="stylesheet" href="./src/css/lenses,cam&drone.css">


<h1>Camera Bodies for Rent</h1>
<h2>Nikon</h2>
<hr>

<div class="items-flex-container">

    <?php

$query = "SELECT * FROM cameras WHERE brand = 'Nikon' ";  
$result = mysqli_query($conn, $query);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
?>


    <div class="card card-1">
        <!-- <div class="side" style="display: inline !important;"> -->
        <form class=" form-inline" method="post" action=" lenses.php?action=add&id=<?php echo $row["id"]; ?>">
            <img class="item-img" src="./src/images/Cameras/D5300.png" alt="">
            <!-- <img class="item-img" src="<?php echo $row["image"]; ?>" class="img-responsive" /> -->
            <div class="item-disc">
                <h3 class="item-name"><?php echo htmlspecialchars($row['brand']." ".$row['name']); ?></h3>
                <p class="item-price"><?php echo htmlspecialchars("Rs.".$row['price'])."/- (Per Day)"; ?></p>
                <input type="hidden" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["brand"]." ".$row["name"]; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                <!-- <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button> -->

                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn-addcart"
                    value="Add to List" />
                <!-- </div> -->
            </div>
        </form>
    </div>
    <?php   }  
                }  ?>
</div>

<h2>For Canon</h2>
<hr>

<div class="items-flex-container">

    <?php

$query = "SELECT * FROM cameras WHERE brand = 'Canon' ";  
$result = mysqli_query($conn, $query);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
?>
    <div class="card card-1">
        <!-- <div class="side" style="display: inline !important;"> -->
        <form class=" form-inline" method="post" action=" lenses.php?action=add&id=<?php echo $row["id"]; ?>">
            <img class="item-img" src="./src/images/Cameras/canon-6d-removebg-preview.png" alt="">
            <div class="item-disc">
                <h3 class="item-name"><?php echo htmlspecialchars($row['brand']." ".$row['name']); ?></h3>
                <p class="item-price"><?php echo htmlspecialchars("Rs.".$row['price'])."/- (Per Day)"; ?></p>
                <input type="hidden" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["brand"]." ".$row["name"]; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                <!-- <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button> -->

                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn-addcart"
                    value="Add to List" />
                <!-- </div> -->
            </div>
        </form>
    </div>
    <?php   }  
                }  ?>




</div>

<div class="btn-div">
    <button class="btn-next" onclick="goDrones()">SKIP</button>
</div>

<?php include('./src/Header_footer/footer.php'); ?>