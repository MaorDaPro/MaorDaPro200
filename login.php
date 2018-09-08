<<?php


$User=$_POST["Username"];
$Password=$_POST["Password"];

$lines=file("users.txt");
foreach ($lines as $Names) {

}
if($User == "Names" && $Password == "12123")  {


  header("Location:index.html");
  echo "welcome";
}else {

     header("Location:test.html");

}


 ?>
