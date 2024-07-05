<?php

session_start();

include __DIR__ . "/src/utilities/user.php";

$_POST["username"] = $_SESSION["username"];

$_POST["userpassword"]= $_SESSION["userpassword"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 id="login">Login</h1>
    <form action="../../index.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="Username">
        <label for="userpassword">Password: </label>
        <input type="password" name="userpassword" id="userpassword" placeholder="Password">
        <input type="submit" value="Invia">
    </form>
</body>
</html>

