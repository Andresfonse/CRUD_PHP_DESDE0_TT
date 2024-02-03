<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nuevoNombre = $_POST['nuevo_nombre'];
    $nuevaDescripcion = $_POST['nueva_descripcion'];

    // Asegúrate de validar y sanear los datos antes de usarlos en la consulta SQL.
    // Es recomendable utilizar sentencias preparadas para evitar la inyección de SQL.

    $objconexion = new Conexion();
    
    // La consulta SQL con marcadores de posición (?)
    $sql = "UPDATE `proyectos` SET `name` = ?, `descripcion` = ? WHERE `id` = ?";

    // Ejecuta la consulta SQL con los valores proporcionados
    $objconexion->ejecutar($sql, [$nuevoNombre, $nuevaDescripcion, $id]);

    // Redirige a tienda.php después de la actualización
    header("location: tienda.php");
} else {
    // Redirige a tienda.php si alguien intenta acceder a editar_proyecto.php directamente sin un formulario
    header("location: tienda.php");
}
?>
