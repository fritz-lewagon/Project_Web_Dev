<?php 
session_start();

$conn = mysqli_connect(
    'localhost', //server
    'admin_mie20122', // master user of the database
    'z9UBLbvS', // password of this user
    'fiesta' // name of the database
) or die(mysqli_error($mysqli)); // stop the connection if an error happens


?>