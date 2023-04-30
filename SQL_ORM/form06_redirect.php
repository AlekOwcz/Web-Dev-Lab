<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if (isset($_POST['id_prac']) &&
is_numeric($_POST['id_prac']) &&
is_string($_POST['nazwisko']))
{
    $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
    try {
        $result = $stmt->execute();
    } catch (mysqli_sql_exception $e) {
        $_SESSION['ERROR'] = "Query failed: " . $e->getMessage();
        $stmt->close();
        $link->close();
        header("Location: form06_post.php");
        exit();
    }
    $stmt->close();
} else { 
    $link->close();
    $_SESSION['ERROR'] = "Invalid input";
    header("Location: form06_post.php");
    exit();
}
$link->close();
$_SESSION['SUCCESS'] = "Successfully added worker!";
header("Location: form06_get.php");
?>