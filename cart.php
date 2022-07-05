<?php   
 session_start();  
include('./config/db_connect.php');


 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>

<?php include('./src/Header_footer/header.php') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="./src/css/cart.css">

<br />
<div class="container" style="width:700px;">
    <h3 align="center">Booking Items</h3><br />




    <div style="clear:both"></div>
    <br />
    <h3> Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered" id="customers">
            <tr>
                <th width="40%">Item Name</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
            <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>
            <tr>
                <td><?php echo $values["item_name"]; ?></td>
                <!-- <td><?php echo $values["item_quantity"]; ?></td> -->
                <td>Rs. <?php echo $values["item_price"]; ?></td>
                <td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span
                            class="text-danger">Remove</span></a></td>
            </tr>
            <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                                    $_SESSION['total']=$total;
                                    
                               }  
                          ?>
            <tr>
                <td colspan="2" align="right">Total</td>
                <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
                <td></td>
            </tr>


            <?php include('bookedDate.php') ?>
            <?php  
                          }  
                          ?>
        </table>

        <button class="payment" onclick="goPayment()">Payment</button>
    </div>
</div>
<br />


<?php include('./src/Header_footer/footer.php') ?>