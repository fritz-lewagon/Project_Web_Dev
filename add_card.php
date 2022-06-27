<?php

include('db.php'); // connect to the database

// Get the user values from the previous FORM

$id_product = $_POST['id_product'];
$id_user = $_SESSION['id_user'];

if ($id_user == "")
{
    header("Location: login.html");
}

$query = "INSERT INTO shopping_card_fiesta (id_user, id_product) VALUES ($id_user, $id_product)";


$result = mysqli_query($conn, $query);


// check if the query have a syntax error
if ($result == false)

{
    mysqli_close($conn);
    die("Query failed");
}

header("Location: add_card.html");

?>