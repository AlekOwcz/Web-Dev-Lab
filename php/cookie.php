<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>
<body>
    <?php
        require_once("funkcje.php");
        if(!empty($_GET['time'])) $time = $_GET['time']; 
        else $time = 0; 
        setcookie("biscuit", "177", time() + $time, "/");
        echo 'Cookie successfully added!';
    ?>
    <a href="/index.php">Return</a>
</body>
</html>
