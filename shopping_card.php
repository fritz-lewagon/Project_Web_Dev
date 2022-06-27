<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tasks List</title>
  <link rel = "stylesheet" type="text/css" href="style.css" />
</head>
<body>
  
<?php include("db.php");
$id_user = $_SESSION['id_user'];

if ($id_user == "")
{
    header("Location: login.html");
}
 ?>
    <section class="shopping_card"> 
        <h4> Shopping Card</h4>
        <table class="shopping_card">
            <thead>
              <tr>
                <!-- header of the shopping_card table -->
                <th style = "display:none;">Purchase ID</th>
                <th>Product</th>
                <th>Category</th>
                <th>Price (€)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT id_purchase, product_name, product_category, product_price FROM shopping_card_fiesta INNER JOIN products_fiesta on shopping_card_fiesta.id_product = products_fiesta.product_id WHERE shopping_card_fiesta.id_user = '$id_user'"; 
              $result_card = mysqli_query($conn, $query); 
              

                while($row = mysqli_fetch_assoc($result_card)) 
                {   ?>
                <tr>
                  <!-- Show products in a table. One row per task -->
                <td style = "display:none;"><?php echo $row['id_purchase']; ?></td> 
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_category']; ?></td>
                <td><?php echo $row['product_price']; ?></td>
                <td>
                  <a href="delete_purchase.php?id_purchase=<?php echo $row['id_purchase']?>"><img border="0" src="button_images/delete.png" width="30" height="30"></a> <!-- show detete button -->  
                </td>                
                </tr>
          <?php
             } 
          ?> <!-- end of loop while -->
            </tbody>
          </table>

          <?php 
          $query = "SELECT ROUND(SUM(product_price),2) as Total FROM shopping_card_fiesta INNER JOIN products_fiesta on shopping_card_fiesta.id_product = products_fiesta.product_id WHERE shopping_card_fiesta.id_user = '$id_user'";           
          $result_sum = mysqli_query($conn, $query);
          $row = mysqli_fetch_assoc($result_sum);

          ?> 

          <p> Total Price: <?php echo $row["Total"]; ?> </p>
          
          <button class="single-button" value="Cancel" onclick="window.location.href='mainpage.html'">Return</button>
          <button class="single-button" value="Checkout" onclick="window.location.href='checkout.php'">Buy Now</button>
    </section>
    </body>
</html>