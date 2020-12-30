<?php
session_start();
include "conexion.php";
$correo = $conexion -> real_escape_string ($_POST['correo']);
$pass = $conexion -> real_escape_string( $_POST['pass']);


$sql = "SELECT * FROM  cliente WHERE Mail = '$correo' AND Contrasena ='$pass'";
$buscar = mysqli_query($conexion, $sql);
if ($buscar->num_rows > 0) {
    $res = mysqli_fetch_array($buscar, MYSQLI_ASSOC);
    if (isset($res['Mail'])) {
        if ($res['Contrasena'] == $pass) {
            $_SESSION["Id"] = $res['Nombre'];
            $_SESSION["start"] = time();
            $_SESSION["expire"] = $_SESSION["start"] + (5);

            header("Location: ../index.php?abr=$res[Id]");
        } else {
            echo "<center><h1>La Contraseña es incorrecto!!</h1><a href='iniciasesioncliente.php'><button type='button'>Volver</button></a></center>";
        }
    } else {
        echo "<center><h1>Usuario no esta registrado!!</h1><a href='iniciasesioncliente.php'><button type='button'>Volver</button></a></center>";
    }
} else {
    echo "<center><h1>Ha ocurrido inicia sesión!!</h1><a href='iniciasesioncliente.php'><button type='button'>Volver</button></a></center>";
}