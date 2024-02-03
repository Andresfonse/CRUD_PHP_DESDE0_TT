<?php 
session_start();
// Mientras este el sesion start la sesion no se perdera hasta que el usuario cierre el  navegador 

if( isset($_SESSION["user"])){

    echo "Username is:".$_SESSION["user"]."and you are:".$_SESSION["estado"];


}else {

    echo "No information 404";
}






?>