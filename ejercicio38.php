<?php 

$texto = "contenido.txt";

$lecturadelarchivo=fopen($texto,"r");

$letras=fread($lecturadelarchivo,filesize($texto));

echo $letras;
?>