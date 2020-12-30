<?php 
session_start();
include "conexion.php";
if(isset($_GET['di'])){
    $ab = $_GET['di'];
    $_SESSION["Id"] = $ab;
    $cant = $_SESSION['cant'];
    $res = $_SESSION['res'];
    $metodo = $_POST['pago'];

    $insertempl = "INSERT INTO empleado(Cantidad, Metodo, Precio)
    VALUE('".$cant."', '".$metodo."', '".$res."')";

    if($conexion -> query($insertempl) === TRUE){
        echo "<center><h1>¡¡Muchas gracias por comprar!!</h1><a href='../index.php?abr=$ab'><input name='v' id='v' type='button' value='Volver'></a></center>";
    }else{
        echo "<center>No pudo subir</center>";
    }

}
?>