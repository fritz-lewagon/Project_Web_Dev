<?php 
session_start();

$conn = mysqli_connect(
    'localhost', //server
    'root', // master user of the database
    'root', // password of this user
    'fiesta' // name of the database
) or die(mysqli_error($mysqli)); // stop the connection if an error happens


?>