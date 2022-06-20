<?php
// this is the page user_reg.php

include('db.php'); // connect to the database
header("checkpoint0");
// Get the user values from the previous FORM

$username = $_POST['username'];
$password = $_POST['pass'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

header("checkpoint1");

// check if the user already exists in the database
// define this query
$query = "SELECT username FROM users_fiesta WHERE username = '$username'";

// execute the query
$result = mysqli_query($conn, $query);

header("checkpoint2");

// check if the query have a syntax error
if ($result == false) 
{
    mysqli_close($conn);
    die("Query failed");
} 

if (mysqli_num_rows($result) == 1)
{
    // the query returns 1 row -> the user exists
    header("Location: user_exist.html");
} else
{    
    // the query returns 0 rows -> I have to INSERT the user into the database
    $query = "INSERT INTO users_fiesta (username, password, firstname, lastname) VALUES ('$username', '$password', '$firstname', '$lastname')";
    //header("Location: welcome.html");
    // execute the query
    $result = mysqli_query($conn, $query);
    // check syntax error (if occured)

    if ($result == false)
    {
        mysqli_close($conn);
        die('Query failed');
    }
    //recoveer tha last userid inserted in the database and save it into the session variable
    $_SESSION['id_user'] = $conn->insert_id;
    
    // show the welcome page (after we will show the task_list.php page)
    header("Location: welcome.html");
}






?>