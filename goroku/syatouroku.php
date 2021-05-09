<?php
$name = '<a href="' . $_POST["name"] . ".php" . '">'.$_POST["name"] . "</a>". "<br>";
file_put_contents("db/gorokusya.txt",$name,FILE_APPEND);
$newfilename = $_POST["name"] . ".php";
file_put_contents($newfilename,$_POST["name"]."pages");
header("Location:goroku.php");
?>