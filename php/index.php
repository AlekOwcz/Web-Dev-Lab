<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>
<body>
    <h1>Nasz system</h1>
    <a href="user.php">User page</a><br>
    <?php
        if(isSet($_POST['logout'])) $_SESSION['loggedIn'] = 0;
        if (isset($_COOKIE['biscuit'])) {
            echo "Cookie value: " . $_COOKIE['biscuit'];
         } else {
            echo "Cookie expired!";
        }
        // require('functions.php');
        // if(isSet($_POST['submit'])) {
        //     $username = $_POST['username'];
        //     $password = $_POST['password'];
        //     // echo    'Received username: ' . $username . '<br>' . 
        //     //         'Received passoword:' . $password . '<br><br>';
        // }
        // if($username == $person1->username && $password == $person1->password){
        //     $_SESSION['nameSurname'] = $person1->nameSurname;
        //     $_SESSION['loggedIn'] = 1;
        //     header("Location: user.php");
        // }
        // if($username == $person2->username && $password == $person2->password) {
        //     $_SESSION['nameSurname'] = $person2->nameSurname;
        //     $_SESSION['loggedIn'] = 1;
        //     header("Location: user.php");
        // }
        
    
    ?>
    <fieldset>
        <form action="/login.php" method="post">
            <legend>Log-In form:</legend>
            <label for="username">Username:</label>
                <input type="text" id="username" name="username"><br>

            <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br>

            <input type="submit" value="login" name="submit">
        </form>
    </fieldset>
    <br><br>
    <fieldset>
        <legend>Cookie creation:</legend>
        <form action="/cookie.php" method="GET">
            <label for="time">Czas:</label>
            <input type="number" id="time" name="time" min="1">
            <input type="submit" value="Create cookie" name="createCookie">
        </form>
    </fieldset>
    
</body>
</html>
