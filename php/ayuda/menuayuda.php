<!DOCTYPE html>
<html lang="es">
<?php
if (isset($_SESSION['Id'])) {
    $abrir = $_SESSION['Id'];
    $_SESSION['Id'] = $abrir;
    $saludo = $_SESSION['Id'];
}
?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Ayuda</title>
</head>

<body style="background-color: green">
    <center>
        <h1>Ayuda</h1>
        <table>
            <tbody>
                <tr>
                    <td style="text-align: center;">
                        <a href="menusayudas/manual_usuario.php">
                            <h2>Manual de usuario:</h2>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                    <a href="menusayudas/manual_sistema.php">
                        <h2>Manual de Sistema:</h2>
                    </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="../../index.php"><input type="button" name="vol" id="vol" value="Volver"></a>
    </center>
</body>

</html>