<?php 
session_start();
include "conexion.php";
$id = $_SESSION['ii'];
$_SESSION['i'] = $id;

if(isset($_GET['id'])){
    $numid = $_GET['id'];
    $borrarcomida = "DELETE FROM pedidos WHERE Id = '$numid'";
    if($conexion -> query($borrarcomida) === TRUE){
        echo "<center><h1>Listo borre tu comida</h1><a href='selecionarlo.php'><input name='vv' id='vv' type='button' value='Volver'></a></center>";
    }else{
        echo "Error";
    }
}
?>