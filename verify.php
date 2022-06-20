<?php


include('db.php');


 $_SESSION['username'] = $_POST['username'];
 $_SESSION['pass'] = $_POST['pass'];

 $username = $_SESSION['username'];
 $pass = $_SESSION['pass'];

 //define SQL query

$query = "SELECT id_user, username, password FROM users_fiesta
          WHERE username = '$username' && password = '$pass'";



// Now we can execute the query and store the result in $result

$result = mysqli_query($conn, $query);

// now we are going to check if the quuery returns a syntax
// error or not

if ($result == false) {
    header("Location: query_error.html");
} 

if (mysqli_num_rows($result) == 0){
    // redirect programm to error page
    header("Location: error_login.html");
} else {
    // the query returns 1 row and I have to get this data
    $row = mysqli_fetch_row($result);
    //I'm going to storr the iduser as a session variable to be used later
    $_SESSION['id_user'] = $row[0];
    // redirect the programm to a welcome page
    header("Location: welcome.html");
}




?>