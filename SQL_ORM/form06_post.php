<?php
session_start();
if (isset($_SESSION['ERROR'])){
    printf("<b>ERROR %s\n</b>",$_SESSION['ERROR']);
    unset($_SESSION['ERROR']);
}
print<<<KONIEC
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form action="form06_redirect.php" method="POST">
    id_prac <input type="text" name="id_prac">
    nazwisko <input type="text" name="nazwisko">
    <input type="submit" value="Wstaw">
    <input type="reset" value="Wyczysc">
</form>
<form action="form06_get.php" method="GET">
    <input type="submit" id="list" name="list" value="Wyswietl pracownikow">
</form>
KONIEC;
?>
