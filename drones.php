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
                    'oder_date'          =>     date('Y-m-d', strtotime($_POST['dateFrom'])) ,
                    'ppl'          =>     $_POST["ppl"]  
               );  
               header('Location:camping.php');
               $_SESSION["shopping_cart"][$count] = $item_array;  
          }  
          else  
          {  
               echo '<script>alert("Item Already Added")</script>';  
               echo '<script>window.location="drones.php"</script>';  
          }  
     }  
     else  
     {  
          $item_array = array(  
               'item_id'               =>     $_GET["id"],  
               'item_name'               =>     $_POST["hidden_name"],  
               'item_price'          =>     $_POST["hidden_price"],  
               'item_quantity'          =>     $_POST["quantity"]  ,
              
          );  
          $_SESSION["shopping_cart"][0] = $item_array;  
     }  
}  

?>

<?php include('./src/Header_footer/header.php') ?>

<link rel="stylesheet" href="./src/css/lenses,cam&drone.css">

<h1>Drones for Rent </h1>
<h2>DJI DRONES</h2>
<hr>



<div class="items-flex-container">
    <?php

$query = "SELECT * FROM drones";  
$result = mysqli_query($conn, $query);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
?>
    <div class="card card-1">
        <!-- <div class="side" style="display: inline !important;"> -->
        <form class=" form-inline" method="post" action=" drones.php?action=add&id=<?php echo $row["id"]; ?>">
            <img class="item-img" src="./src/images/Drones/DJI Mavic pro.png" alt="">
            <div class="item-disc">
                <h3 class="item-name"><?php echo htmlspecialchars($row['name']); ?></h3>
                <p class="item-price"><?php echo htmlspecialchars("Rs.".$row['price'])."/- (Per Day)"; ?></p>
                <input type="hidden" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
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


<!--next/skip button-->
<div class="btn-div">
    <button class="btn-next" onclick="goHotels()">SKIP</button>

</div>

<?php include('./src/Header_footer/footer.php') ?>