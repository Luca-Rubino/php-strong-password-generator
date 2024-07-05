<?php 
session_start();

include __DIR__ . "/src/utilities/users.php";

$prova = "Peppe";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>php-strong-password-generator</title>
</head>
<body>

    <header>
        <section>
            <h1 id="title-page">php-strong-password-generator</h1>
        </section>
        <section>
            <a href="./src/page/logout.php">Logout</a>
            <a href="./src/page/login.php">Login</a>  
        </section>
        
    </header>
    <main id="main-index">
        <!-- <h2>Benvenuto: <?php echo $prova; ?>.</h2> -->
        <h2>Benvenuto: <?php echo $_POST["username"]; ?>.</h2>
    </main>
    <footer>
    </footer>

</body>
</html>