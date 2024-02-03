<?php 

$url = "https://jsonplaceholder.typicode.com/posts/";

$options= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

$response=file_get_contents($url,false,stream_context_create($options));

$responsefix=json_decode($response);


/*foreach($responsefix->list as $datos){
  //  print_r($datos);

}*/

//foreach basica arriba eabajo esta en forma de lista  





if ($response !== true){
    echo "se ha hecho la conexion";
}else{
    echo "error 505";
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

<h3>CALL IN API PLACE</h3>
<ul>
 <?php 
 foreach($responsefix as $datos){ ?>
    <li>
<?php     print_r($datos->title);  
  ?>
    </li>
<?php 
 }
?>



</ul>
</body>
</html>

