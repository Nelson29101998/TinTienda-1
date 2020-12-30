<?php 
session_start();
include "conexion.php";

if(isset($_GET['id'])){
    $numid = $_GET['id'];
    $eliminar = "DELETE FROM empleado WHERE Id = '$numid'";
    if($conexion -> query($eliminar) === TRUE){
        echo "<center><h1>Listo finalizado con exito!!</h1><a href='../index.php'><input name='v' id='v' type='button' value='Volver'></a></center>";
    }else{
        echo "ERRROR";
    }
}


?>