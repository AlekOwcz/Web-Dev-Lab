<?php
session_start();
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if (isset($_SESSION['SUCCESS'])){
    printf("<b>%s</b><br>",$_SESSION['SUCCESS']);
    unset($_SESSION['SUCCESS']);
}
$sql = "SELECT * FROM pracownicy ORDER BY id_prac";
$result = $link->query($sql);
foreach ($result as $v) {
    echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
}
$result->free();
$link->close();
print<<<FIN
<form action="form06_post.php" method="post">
    <input type="submit" name="submit" value="Dodaj pracownika">
</form>
FIN;
?>
