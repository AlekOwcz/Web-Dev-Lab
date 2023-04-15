<?php 
session_start();
require('functions.php');
$username = $_POST['username'];
$password = $_POST['password'];
if($username == $person1->username && $password == $person1->password){
    $_SESSION['nameSurname'] = $person1->nameSurname;
    $_SESSION['loggedIn'] = 1;
    header("Location: user.php");
} elseif ($username == $person2->username && $password == $person2->password) {
    $_SESSION['nameSurname'] = $person2->nameSurname;
    $_SESSION['loggedIn'] = 1;
    header("Location: user.php");
} else header("Location: index.php");
?>
