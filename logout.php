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
    <section class="form-register">
    <h4>You have succesfully logged out.</h4>
    </section>
</body>
</html>