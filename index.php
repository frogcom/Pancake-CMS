<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login geslaagd!</title>
</head>
<body>
    <h1>Login succesful!</h1>
    <h2>Welcome <?php echo $user_data["user_name"] ?></h2>
    <a href="logout.php">Log out here</a>
</body>
</html>