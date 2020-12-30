<?php
session_start();
include "conexion.php";

$sql = "SELECT * FROM empleado";
$res = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Empleado</title>
</head>

<body style="background-color: green;">
    <center>
        <h1>Empleado</h1>
        <?php
        while ($re = mysqli_fetch_array($res)) {
        ?>
            <table style="background-color: white;" border="4">
                <tbody>
                    <tr>
                        <td>
                            <label>Cantidad: </label><?php echo $re['Cantidad']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Método de Pago: </label><?php echo $re['Metodo']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Precio: </label><?php echo "$" . $re['Precio']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <?php echo "<a href='completo.php?id=$re[Id]'><input name='fin' id='fin' type='button' value='Finalizado'></a>"; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
        <table>
            <tbody>
                <tr>
                    <td>
                        <a href="../html/tiponuevacuenta.html"><input name="salir" id="salir" type="button" value="Volver"></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
</body>

</html>