<?php 

$fruits=array("f"=>"fresa","b"=>"banana","c"=>"coco");
print_r($fruits);


echo $fruits["b"]."<br/>";

foreach($fruits as $init=>&$valor){

echo "el valor es ",$init." y su indice es".$valor."<br/>";
}

 
?>