<?php 
            include('db.php');  // Call to database connection file

            $id_purchase = $_GET['id_purchase'];
                        
            $query = "DELETE FROM shopping_card_fiesta WHERE id_purchase =$id_purchase"; // delete selected purchase  
            mysqli_query($conn, $query);

            header('Location: shopping_card.php');
 ?>



