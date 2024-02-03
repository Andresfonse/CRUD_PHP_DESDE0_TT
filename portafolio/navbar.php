<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    if ($_SESSION['email'] == "admin@gmail.com" && $_SESSION['password'] == "password") {
        header("location: index.php");
    } else {
        header("location: tienda.php");
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is a mesage in navbar
</body>
</html>