<?php
session_start();
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
        <label for="user-name">Username: </label>
        <input type="text" name="user-name" id="user-name" placeholder="Username">
        <label for="user-password">Password: </label>
        <input type="password" name="user-password" id="user-password" placeholder="Password">
        <input type="submit" value="Invia">
    </form>
</body>
</html>

