<?php  

$server= "localhost";
$user="root";
$password="";

try{

    $conexion=new PDO("mysql:host=$server;dbname=galeria", $user,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   

$sql="SELECT * FROM `fotos`";

$sentencia=$conexion->prepare($sql);

$sentencia->execute();

$result=$sentencia->fetchAll();

//print_r($result);


foreach($result as $foto){

    print_r($foto); 
} //quitar y poner print _r como arriba
   
   
    echo "Conexion Lista";



}
catch(PDOException $error){

echo "Error 999".$error."";



}
?>