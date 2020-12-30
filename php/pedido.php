<?php 
session_start();
include "conexion.php";
if(isset($_GET['pedido'])){
    $id = $_SESSION['i'];
    $numcom = $_GET['pedido'];
    $sql = "SELECT * FROM comidas WHERE Id = '$numcom'";
    $bus = mysqli_query($conexion, $sql);
    $buscar = mysqli_fetch_array($bus, MYSQLI_ASSOC);

    if(isset($buscar['Id'])){
        $foto = $buscar['Foto'];

        $nom = $buscar['Nombre'];

        $ing = $buscar['Ingredientes'];

        $precio = $buscar['Costo'];
    }
    $envio = 3000;

    $total = $precio + $envio;

    $pedidoinserta = "INSERT INTO pedidos(Foto, Nombre, Ingredientes, Costo, Envio, Total)
    VALUE ('".$foto."', '".$nom."', '".$ing."', '".$precio."', '".$envio."', '".$total."')";
    if($conexion -> query($pedidoinserta) === TRUE){
        echo "<center><h1>Listo subir tu pedido</h1><a href='../index.php?abr=$id'><input name='vol' id='vol' type='button' value='Volver'></a></center>";
    }else{
        echo "Error";
    }
}
