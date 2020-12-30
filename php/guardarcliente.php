<?php 
session_start();
include "conexion.php";

$rut = $_POST['rut'];

$nom = $_POST['nom'];
$ape = $_POST['ape'];

$edad = $_POST['edad'];
$sex = $_POST['sexo'];

$tel = $_POST['phone'];

$pais = $_POST['pais'];
$city = $_POST['city'];
$dir = $_POST['dir'];


$cor = $_POST['correo'];

$pass1 = $_POST['pass'];
$pass2 = $_POST['pass_rep'];


$ins = "INSERT INTO cliente(Id_RUT, Nombre, Apellido, Edad, Sexo, Pais, Ciudad,
Mail, Direccion, Telefono, Contrasena, Rep_contrasena)
values ('".$rut."', '".$nom."', '".$ape."', '".$edad."', '".$sex."',
'".$pais."', '".$city."', '".$cor."', '".$dir."', '".$tel."', '".$pass1."', '".$pass2."')";
if($conexion -> query($ins) === TRUE){
    echo "<center><h1>Registro exitoso. Muchas gracias por preferirnos. ;)</h1><a href='../index.php'><button type='button'>Volver</button></a></center>";
}else{
    echo "<h1>Error: " . $sql . $conexion->error . "</h1>";
    echo "Registrado no ha podido!! :(";
}
?>