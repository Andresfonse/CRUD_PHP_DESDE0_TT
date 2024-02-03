<?php 

session_start();
$_SESSION["user"]="Andres";
$_SESSION["estado"]="Online";


echo "Your online"."<br/>";

echo "Username is:".$_SESSION["user"]."and you are:".$_SESSION["estado"];




?>