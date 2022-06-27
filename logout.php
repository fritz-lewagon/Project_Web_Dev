<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type="text/css" href="style.css" />
    <title>Login</title>
</head>
<body>
    <?php
    session_start();
    session_destroy();
    $_SESSION = array();
    $id_user = $_SESSION['id_user'];
    die($id_user);
     ?>
    <p>You have succesfully logged out</p>
</body>
</html>