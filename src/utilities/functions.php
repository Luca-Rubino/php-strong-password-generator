<?php 

function Hiddenpage() {
    if (!isset($_SESSION["username"]) && !isset($_SESSION["userpassword"]) | $_SESSION["username"] = !1 && $_SESSION["userpassword"] = !1) {
        header('Location: ./src/page/login.php');
    };
};

?>