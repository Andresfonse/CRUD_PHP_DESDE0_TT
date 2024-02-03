<?php 

$name = "";
$age = "";
$rdglanguage="";

$chkphp="";
$chkdart="";
$chkpython="";
$chksql="";
$anime="";
$comentario="";  




 
if($_POST){


    $name= ( isset($_POST['name']))?$_POST['name']:"";
    $age= ( isset($_POST['age']))?$_POST['age']:"";
    $rdglanguage= ( isset($_POST['language']))?$_POST['language']:"";
    $chkphp= ( isset($_POST['chkphp'])=="si" )?"checked":"";
    $chkdart= ( isset($_POST['chkdart'])=="si" )?"checked":"";
    $chkpython= ( isset($_POST['chkpython'])=="si" )?"checked":"";
    $chksql= ( isset($_POST['chksql'])=="si" )?"checked":"";
    $anime= ( isset($_POST['anime']))?$_POST['anime']:"";
    $comentario= ( isset($_POST['comentario']))?$_POST['comentario']:"";


    // Forma de insercion y manipulacion de los datos deun formulario
    print_r($_POST);

 



}



else {

    echo "no ha iniciado el formulario";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if($_POST){

    echo "Name is: ".$name." and u age is : ".$age."<br/>";
    echo "Tu lenguage es : ".$rdglanguage."<br/>";
    echo "te gustan los animes de ".$anime."<br/>";

    echo "Estas aprendiendo hoy:"."<br/>";
    echo ($chkphp=="checked")?"PHP":"<br/>";
    echo ($chkdart=="checked")?"DART":"<br/>";
    echo ($chkpython=="checked")?"PYTHON":"<br/>";
    echo ($chksql=="checked")?"SQL":"<br/>";


    echo "tus dudas son:".$comentario;
    



    
}

?>
<form action="ejercicio31.php" method="POST">
Name:
<input value="<?php echo $name;?>" type="text" name="name" id="">
<br>

Age:
<input value="<?php echo $age;?>" type="text" name="age" id="">
<br>

Te gusta paa programar en:

<br><br>

<br/>php  <input  type="radio" <?php echo ($rdglanguage=="php")?"checked":""; ?> name="language" value="php" id="">

<br>dart  <input type="radio" <?php echo ($rdglanguage=="dart")?"checked":""; ?>name="language" value="dart" id="">

<br>python <input  type="radio"<?php echo ($rdglanguage=="python")?"checked":""; ?> name="language" value="python" id="">

<br>SQL <input  type="radio"<?php echo ($rdglanguage=="sql")?"checked":""; ?> name="language" value="sql" id="">

<br><br>


Estas Aprendiendo..... <br>
<br>php<input type="checkbox" <?php echo $chkphp ?> name="chkphp" value="si" id="">
<br>dart<input type="checkbox" <?php echo $chkdart ?> name="chkdart" value="si" id="">
<br>python<input type="checkbox" <?php echo $chkpython ?> name="chkpython" value="si" id="">
<br>sql<input type="checkbox" <?php echo $chksql ?> name="chksql " value="si" id="">
<br>

<br>


<select name="anime" id="">

<option value="no me gustan" <?php echo ($anime=="no me gustan")?"selected":""; ?>>No me gustan</option>
<option value="naruto" <?php echo ($anime=="naruto")?"selected":""; ?>>Naruto</option>
<option value="goku" <?php echo ($anime=="goku")?"selected":""; ?>>Goku</option>
<option value="pun"<?php echo ($anime=="pun")?"selected":""; ?>>Oyuasumi</option>

</select>

<br>
Dudas o inquietudes? <br/>
<textarea name="comentario" id="" cols="30" rows="10">

<?php 
echo $comentario;
?>
</textarea>

<input type="submit" value="Send">



</form>
    
</body>
</html>