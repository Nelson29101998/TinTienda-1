<?php
include "conexion.php";
session_start();
$id = $_SESSION['Id'];
$_SESSION['Id'] = $id;
$sql = "SELECT * FROM pedido";
$buscar = mysqli_query($conexion, $sql);


$cantidad = "";
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Comprar</title>
</head>

<body style="background-color: green;">
    <center>
        <h1>🛒 Pedido:</h1>
        <form name="pedido" id="pedido" method="POST" action="finalizar.php?di=$id">
            <?php
            while ($pedido = mysqli_fetch_array($buscar)) {
                $num = $pedido['Id_pedido'];
                $n = $pedido['Nombre_ropa'];
                $c = $pedido['Precio'];
                $e = $pedido['Color'];
                $tam = $pedido['Tamano'];
                $cantidad = $pedido['Cantidad'];
                $nom = $pedido['Nombre'];
                $ape = $pedido['Apellido'];
                $fecha = $pedido['Fecha'];
                $pais = $pedido['Pais'];
                $city = $pedido['Ciudad'];
                $dir = $pedido['Direccion'];
            ?>

                <table style="background-color: white;" border="4">
                    <tbody>
                        <tr>
                            <td>
                                <?php echo "Número de pedido: " . $num ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo "Nombre de ropa: " . $n; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo "Colo: " . $e ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo "Tamaño: " . $tam ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                echo "Precio: $" . $c;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo "Nombre: " . $nom . " " . $ape ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo "Cantidad: " . $cantidad ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo "Feche entrega: " . $fecha ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo "Pais: " . $pais ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo "Ciudad: " . $city ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo "Dirección: " . $dir ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">
                                <input type="button" name="buy" id="buy" value="Comprar">
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php
            }
            ?>
            <a href="../index.php"><input id="vol" name="vol" type="button" value="Volver"></a>
            
    </center>
</body>

</html>