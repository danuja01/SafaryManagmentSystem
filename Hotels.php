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
                header('Location:cart.php');
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="hotels.php"</script>';  
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
<link rel="stylesheet" href="./src/css/hotels.css">


<h1 class="head-title">Enjoy Safari with affordable hotel rooms</h1>


<!-- Safari Vehicle Cards -->
<div class="card-set">
    <?php

$query = "SELECT * FROM hotels  ";  
$result = mysqli_query($conn, $query);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
?>


    <div class="card">
        <form class=" form-inline" method="post" action=" Hotels.php?action=add&id=<?php echo $row["id"]; ?>">
            <img src="<?php echo htmlspecialchars($row['image']); ?>" style="width:100%">
            <h1 class="card-head"><?php echo htmlspecialchars($row['name']); ?></h1>
            <p class="title"><?php echo htmlspecialchars("Rs.".$row['price']."/-"); ?></p>
            <h3 class="card-opt">Options</h3>
            <ul>
                <?php foreach(explode(',', $row['facilities']) as $op) { ?>
                <li><?php echo htmlspecialchars("$op"); ?></li>
                <?php } ?>
            </ul>
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

<div class="btn-div">
    <button class="btn-next" onclick="goCamping()">SKIP</button>

</div>


<?php include('./src/Header_footer/footer.php') ?>