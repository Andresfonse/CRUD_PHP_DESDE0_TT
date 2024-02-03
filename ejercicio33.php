<?php   
// datos json para volverlo tipo plano o strings
$jsoncontenido='[
    {"name":"Andres", "lastname":"Fonseca"},
    {"name":"Felipe", "lastname":"Pro"}
    ]';

$result= json_decode($jsoncontenido);

foreach ( $result as $estudiantes){

    echo ($estudiantes->name)." ".($estudiantes->lastname)."<br/>";
}

?>