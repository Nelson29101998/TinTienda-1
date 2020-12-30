<?php 
session_start();
include "conexion.php";

$nompl = $_POST['nomplato'];
$ing = $_POST['ing'];
$costo = $_POST['prec'];

if(isset($_POST['guar'])){
    $target = $_FILES['fotopl']['name'];
    $tmp = $_FILES['fotopl']['tmp_name'];
    $folder = '../image/';
    move_uploaded_file($tmp, $folder.$target);
}

$sql = "INSERT INTO comidas (Foto, Nombre, Ingredientes, Costo)
VALUE ('".$target."', '".$nompl."', '".$ing."', '".$costo."')";

if ($conexion->query($sql) === TRUE) {
    echo "<center><h1>Subio la foto con exito!!<h1><a href='../index.php'><button type='button'>Volver</button></a></center>";
} else {
    echo "<h1>Error: " . $sql . $conexion->error . "</h1>";
    echo "No pudo subir la foto";
}
$conexion -> close();
?>