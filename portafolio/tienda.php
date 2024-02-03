<?php
include_once("conexion.php");

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<div class="bg-indigo-900 text-center py-4 lg:px-4">
  <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
    <span class="font-semibold mr-2 text-left flex-auto">Get the coolest t-shirts from our brand new store</span>
    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
  </div>
</div>

<?php



if (isset($_GET['user']) && isset($_GET['password'])) {
    $user = $_GET['user'];
    $password = $_GET['password'];

    echo "Hola " . $user;
} 

// navbar.php

// Resto de tu código...

$objconexion = new Conexion();


if(isset($_GET['user']) && isset($_GET['password'])) {
    $user = $_GET['user'];
    $password = $_GET['password'];

    // Resto de tu código...
    
    // Proceso de inserción
    $sql = "INSERT INTO `sesion` (`user`, `password`) VALUES (?, ?)";
    $objconexion->ejecutar($sql, [$user, $password]);
    header("location:tienda.php");
} 











$objconexion = new Conexion();

// Proceso de inserción
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $image = $_POST['image'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO `proyectos` (`id`, `name`, `image`, `descripcion`) VALUES (NULL, ?, ?, ?)";
    $objconexion->ejecutar($sql, [$name, $image, $descripcion]);
    header("location:tienda.php");
}

// Proceso de eliminación
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['borrar'])) {
    $id = $_GET['borrar'];
    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` = ?";
    $objconexion->ejecutar($sql, [$id]);
    header("location:tienda.php");

}



// ...

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['editar'])) {
    // Aquí podrías obtener los datos del proyecto que se va a editar para mostrarlos en el formulario de edición
    $id = $_GET['editar'];
    $proyectoParaEditar = $objconexion->consultar("SELECT * FROM `proyectos` WHERE `id` = ?", [$id]);

    // Asegúrate de verificar si el proyecto para editar existe antes de mostrar el formulario
    if ($proyectoParaEditar) {

        
        // Muestra el formulario de edición con los datos prellenados
        echo '<form action="editar_proyecto.php" method="POST" class="max-w-sm mx-auto">';
        echo '<input type="hidden" name="id" value="' . $proyectoParaEditar[0]['id'] . '">';
    
        // Campo Nuevo nombre
        echo '<div class="mb-4">';
        echo '<label for="nuevo_nombre" class="block text-gray-700 text-sm font-bold mb-2">Nuevo nombre</label>';
        echo '<div class="flex">';
        echo '<span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">';
        echo '<svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">';
        echo '<path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>';
        echo '</svg>';
        echo '</span>';
        echo '<input type="text" id="nuevo_nombre" name="nuevo_nombre" class="rounded-none rounded-r-md bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="' . htmlspecialchars($proyectoParaEditar[0]['name']) . '">';
        echo '</div>';
        echo '</div>';
    
        // Campo Nueva descripción
        echo '<div class="mb-6">';
        echo '<label for="nueva_descripcion" class="block text-gray-700 text-sm font-bold mb-2">Nueva descripción</label>';
        echo '<div class="flex">';
        echo '<span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">';
        echo '<svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">';
        echo '<path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>';
        echo '</svg>';
        echo '</span>';
        echo '<input type="text" id="nueva_descripcion" name="nueva_descripcion" class="rounded-none rounded-r-md bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="' . htmlspecialchars($proyectoParaEditar[0]['descripcion']) . '">';
        echo '</div>';
        echo '</div>';
    
        // Botón de Guardar cambios
        echo '<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar cambios</button>';
    
        echo '</form>';

        
        
    }
    
}

// ...



// Consultar los datos después de la inserción o eliminación
$resultado = $objconexion->consultar("SELECT * FROM `proyectos`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">



    
</head>
<body>





<div class="flex justify-center items-center min-h-screen">
        <form action="tienda.php" method="POST" class="bg-white p-8 rounded shadow-md max-w-md w-full mt-4">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image URL:</label>
                <input type="text" name="image" id="image" required
                    class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Description:</label>
                <input type="text" name="descripcion" id="descripcion" required
                    class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex items-center justify-center">
                <button type="submit"
                    class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
                    Send
                </button>
            </div>
        </form>
    </div>




    <!-- Resto del contenido HTML -->

    <?php
// Ahora puedes iterar sobre los resultados
if ($resultado) {
    echo '<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">'; // Contenedor de la cuadrícula

    foreach ($resultado as $proyecto) {
        echo '<div class="max-w-sm rounded overflow-hidden shadow-lg">'; // Cada tarjeta
        echo '<img class="w-full h-48 object-cover" src="' . $proyecto['image'] . '" alt="' . $proyecto['name'] . '">'; // Imagen con tamaño específico

        echo '<div class="px-6 py-4">'; // Contenido del cuerpo de la tarjeta
        echo '<div class="font-bold text-xl mb-2">' . $proyecto['name'] . '</div>'; // Título
        echo '<p class="text-gray-700 text-base">' . $proyecto['descripcion'] . '</p>'; // Descripción
        echo '</div>';

        echo '<div class="px-6 pt-4 pb-2">'; // Etiquetas
        // Puedes ajustar el formato de las etiquetas según tus necesidades
        echo '<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>';
        echo '<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>';
        echo '<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>';
        echo '</div>';

        // Botones de editar y eliminar
        echo '<div class="px-6 pt-4 pb-2">';
        echo '<a href="?editar=' . $proyecto['id'] . '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2">Editar</a>';
        echo '<a href="?borrar=' . $proyecto['id'] . '" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar</a>';
        echo '</div>';

        echo '</div>'; // Fin de la tarjeta
    }

    echo '</div>'; // Fin del contenedor de la cuadrícula
}
?>



 
</body>
</html>


