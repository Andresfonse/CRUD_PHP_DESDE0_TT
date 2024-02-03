<?php  
 
// PROGRAMACION ORENTADA A OBJETOS POO 



 class Claserandom { // esta es la clase 

public static function hola (){ // este es el metodo


    echo "Hola soy un metodo";
}



 }

 $sal=new Claserandom; // y este el objeto 
 $sal->hola();


 Claserandom::hola();
?>