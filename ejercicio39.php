<?php


$archivonew = "biblia.txt";
$texto="dios ";
$crear=fopen($archivonew,"w");
fwrite($crear,$texto);
fclose($crear);



?>