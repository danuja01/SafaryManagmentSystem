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
                     'item_quantity'          =>     $_POST["quantity"] ,
                     'oder_date'          =>     date('Y-m-d', strtotime($_POST['dateFrom'])) ,
                     'ppl'          =>     $_POST["ppl"]  
                );  
                header('Location:cart.php');
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="camping.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  ,
                'oder_date'          =>     date('Y-m-d', strtotime($_POST['dateFrom'])) ,
                'ppl'          =>     $_POST["ppl"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 
 ?>




<?php include('./src/Header_footer/header.php') ?>
<link rel="stylesheet" href="./src/css/safariVehicles.css">
<link rel="stylesheet" href="./src/css/camping.css">

<h1 class="titler">Camping Items</h1>
<h2>Tents</h2>
<hr>
</hr>
<div class="container">




    <?php
//query
$query = "SELECT * FROM camping WHERE category = 'Tents'  ";  
//use to execute SQL queries
$result = mysqli_query($conn, $query);  

if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
?>


    <div class="card">
        <form class=" form-inline" method="post" action=" camping.php?action=add&id=<?php echo $row["id"]; ?>">
            <img src="<?php echo htmlspecialchars($row['image']); ?>" style="width:100%">
            <h1 class="card-head"><?php echo htmlspecialchars($row['name']); ?></h1>
            <p class="title"><?php echo htmlspecialchars("Rs.".$row['price']."/-"); ?></p>
            <h3 class="card-opt">Options</h3>
            <div style="margin: 24px 0;">
            </div>
            <input type="hidden" name="quantity" class="form-control" value="1" />
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn-card" value="Add to List" />
            <!-- <p><button class="btn-card"><i class="fas fa-shopping-cart"></i></i> Add to List</button></p> -->
        </form>
    </div>
    <?php   }  
                }  ?>
</div>

<h2>Backpacks</h2>
<hr>
</hr>
<div class="container">

    <?php

$query = "SELECT * FROM camping WHERE category = 'bags'  ";  
$result = mysqli_query($conn, $query);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
?>


    <div class="card">
        <form class=" form-inline" method="post" action=" hotels.php?action=add&id=<?php echo $row["id"]; ?>">
            <img src="<?php echo htmlspecialchars($row['image']); ?>" style="width:100%">
            <h1 class="card-head"><?php echo htmlspecialchars($row['name']); ?></h1>
            <p class="title"><?php echo htmlspecialchars("Rs.".$row['price']."/-"); ?></p>
            <h3 class="card-opt">Options</h3>
            <div style="margin: 24px 0;">
            </div>
            <input type="hidden" name="quantity" class="form-control" value="1" />
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn-card" value="Add to List" />
            <!-- <p><button class="btn-card"><i class="fas fa-shopping-cart"></i></i> Add to List</button></p> -->
        </form>
    </div>
    <?php   }  
                }  ?>
</div>


<h2>Camping Cooking Supplies</h2>
<hr>
</hr>
<div class="container">
    <?php

$query = "SELECT * FROM camping WHERE category = 'cooking'  ";  
$result = mysqli_query($conn, $query);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
?>


    <div class="card">
        <form class=" form-inline" method="post" action=" hotels.php?action=add&id=<?php echo $row["id"]; ?>">
            <img src="<?php echo htmlspecialchars($row['image']); ?>" style="width:100%">
            <h1 class="card-head"><?php echo htmlspecialchars($row['name']); ?></h1>
            <p class="title"><?php echo htmlspecialchars("Rs.".$row['price']."/-"); ?></p>
            <h3 class="card-opt">Options</h3>
            <div style="margin: 24px 0;">
            </div>
            <input type="hidden" name="quantity" class="form-control" value="1" />
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn-card" value="Add to List" />
            <!-- <p><button class="btn-card"><i class="fas fa-shopping-cart"></i></i> Add to List</button></p> -->
        </form>
    </div>
    <?php   }  
                }  ?>
</div>
</div>

<div class="btn-div">
    <button class="btn-next" onclick="goCart()">SKIP</button>

</div>
<hr>
</hr>


<?php include('./src/Header_footer/footer.php') ?>