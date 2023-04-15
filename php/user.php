<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>
<body>
    <?php
        require_once("functions.php");
        if($_SESSION['loggedIn'] != 1) {
            header("Location: index.php");
        }
        echo "Zalogowano<br>";
        echo "Witaj " . $_SESSION['nameSurname'] . "!";
    ?>
    <fieldset>
        <legend>Log out:</legend>
        <form action="/index.php" method="post">
            <input type="submit" value="Logout" name="logout">
        </form>
    </fieldset>
    <br><br>
    <fieldset>
        <legend>Picture submission:</legend>
        <form action='/user.php' method='POST' enctype='multipart/form-data'> 
            <input name="picture" type="file"><br>
            <input name="submitPic" type="submit" value="Upload and Display">
        </form>
    </fieldset>
    <?php 
        if(isSet($_POST['submitPic'])){
            $currDir = getcwd();
            $uploadDir = "/pics/";
            $fileName = $_FILES['picture']['name'];
            $fileSize = $_FILES['picture']['size'];
            $fileTmpName = $_FILES['picture']['tmp_name'];
            $fileType = $_FILES['picture']['type'];
            if($fileName != "" and ($fileType == 'image/png' or $fileType == 'image/PNG' or $fileType == 'image/jpeg' or $fileType == 'image/JPEG')) {
                $uploadPath = $currDir . $uploadDir . $fileName;
                if (move_uploaded_file($fileTmpName, $uploadPath)) echo "<img src='pics/klot.png'>";
            }
        } else {
            echo '[Space for your image if you decide to upload one]';
        }
    ?>
</body>
</html>
