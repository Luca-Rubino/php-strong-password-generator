<?php 

// header("Location: src/page/login.php");
include __DIR__ . "/src/utilities/user.php";

$prova = "Peppe";

foreach ($users as $user) {
    # code...
}
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
        <h1 id="title-page">php-strong-password-generator</h1>
    </header>
    <main id="main-index">
        <h2>Benvenuto: <?php echo $prova; ?>.</h2>
        <h2>Benvenuto: <?php echo $user["username"]; ?>.</h2>
    </main>
    <footer>
    </footer>

</body>
</html>