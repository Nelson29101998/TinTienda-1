<?php
include "php/conexion.php";
session_start();
$sql = "SELECT * FROM ropa";
$res = mysqli_query($conexion, $sql);

if (isset($_GET['abr']) || isset($_SESSION['Id'])) {
    $abrir = $_SESSION['Id'];
    $_SESSION['Id'] = $abrir;
    $saludo = $_SESSION['Id'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Inicio</title>
</head>

<body style="background-color: green">
    <center>
        <h1> TinTienda </h1>
        <?php
        if (isset($abrir)) {
        ?>
            <p>¡Bienvenido a <?php echo $saludo; ?>!</p>
        <?php
        }
        ?>
        <table border="1">
            <tbody>
                <tr>
                    <?php
                    if (empty($abrir)) {
                    ?>
                        <td>
                            <a href="html/tiponuevacuenta.html"><input name="nc" id="nc" type="button" value="Registrate Nueva cuenta"></a>
                        </td>
                    <?php
                    }
                    ?>
                    <?php
                    if (empty($abrir)) {
                    ?>
                        <td>
                            <a href="php/iniciasesioncliente.php"><input name="in" id="in" type="button" value="Inicia sesión de Cliente"></a>
                        </td>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($abrir)) {
                    ?>
                        <td>
                            <a href="php/selecionarlo.php"><input name="ped" id="ped" type="button" value="Ver pedido"></a>
                        </td>
                        <td>
                            <a href="php/cerrar.php"><input name="salir" id="salir" type="button" value="Cerrar sesión"></a>
                        </td>
                    <?php
                    }
                    ?>
                    <td>
                        <a href="php/ayuda/menuayuda.php"><input type="button" name="help" id="help" value="Ayuda"></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>

        <?php
        while ($ropa = mysqli_fetch_array($res)) {
        ?>
            <table border="1" style="background-color: #F1C40F;">
                <tbody>
                    <tr>
                        <td>
                            Nombre ropa:
                        </td>
                        <td>
                            <?php echo $ropa['Nombre_ropa'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Detalle:
                        </td>
                        <td>
                            <?php echo $ropa['Detalle'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <img src="<?php echo $ropa['Foto'] ?>" width="200">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Sexo:
                        </td>
                        <td>
                            <?php echo $ropa['Sexo'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tamaño:
                        </td>
                        <td>
                            <?php echo $ropa['Tamano'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Precio:
                        </td>
                        <td>
                            $<?php echo $ropa['precio'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Color:
                        </td>
                        <td>
                            <?php echo $ropa['Color'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Cantidad:
                        </td>
                        <td>
                            <?php echo $ropa['Unidades'] ?> Unidades
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input name="savepedido" id="savepedido" type="button" value="Guardar du pedido">
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </center>
</body>

</html>