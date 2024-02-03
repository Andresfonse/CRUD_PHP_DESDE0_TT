<?php  

$server= "localhost";
$user="root";
$password="";

try{

    $conexion=new PDO("mysql:host=$server;dbname=galeria", $user,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Vacations', 'image.jpg');
    ";

    $conexion->exec($sql);
   
   
   
    echo "Conexion Lista";



}
catch(PDOException $error){

echo "Error 999".$error."";



}
?>