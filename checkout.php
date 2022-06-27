<?php

include('db.php'); // connect to the database

// Get the user values from the previous FORM

$id_user = $_SESSION['id_user'];

$query = "DELETE FROM shopping_card_fiesta WHERE id_user =$id_user";
$result = mysqli_query($conn, $query);

// check if the query have a syntax error
if ($result == false)

{
    mysqli_close($conn);
    die("Query failed");
}

header("Location: checkout.html");

?>