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
    <title>Ayuda - Manual de sistema</title>
    <style>
        ol {
            counter-reset: item
        }

        li {
            display: block
        }

        li:before {
            content: counters(item, ".") " ";
            counter-increment: item
        }
    </style>
</head>

<body style="background-color: green">
    <center>
        <h2>Manual de sistema:</h2>
        <ol>
            <li>REQUISITO DEL SISTEMA:
                <table border="1">
                    <tbody>
                        <tr>
                            <td>CPU</td>
                            <td>Inter Core i4</td>
                        </tr>
                        <tr>
                            <td>RAM</td>
                            <td>4 GB o más</td>
                        </tr>
                        <tr>
                            <td>Espacio disponible en disco</td>
                            <td>400 MB</td>
                        </tr>
                        <tr>
                            <td>Sistema operativo</td>
                            <td>Windows 7 o más adelante</td>
                        </tr>
                        <tr>
                            <td>Tarjeta grafica</td>
                            <td>Sencilla</td>
                        </tr>
                    </tbody>
                </table>
            </li>
            <br>
            <table>
                <tbody>
                    <tr style="outline: thin solid">
                        <td>
                            <ul>
                                <li>
                                    <label>Haga clic el botón "Registrate Nueva cuenta"</label>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr style="outline: thin solid">
                        <td style="text-align: center;">
                            <img src="../../../image/fotoayuda/registrar_raya.jpg" width="500">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr style="outline: thin solid">
                        <td>
                            <ul>
                                <li>
                                    <label>Uno registrarse como nuevo cliente y otra iniciar sesión en el caso de que ya se esté registrado.</label>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr style="outline: thin solid">
                        <td style="text-align: center;">
                            <img src="../../../image/fotoayuda/nueva_registra.png">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr style="outline: thin solid">
                        <td>
                            <ul>
                                <li>
                                    <label>Haga clic el botón"Iniciar sesión"</label>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr style="outline: thin solid">
                        <td style="text-align: center;">
                            <img src="../../../image/fotoayuda/boton_inicia_sesion.png">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr style="outline: thin solid">
                        <td>
                            <ul>
                                <li>
                                    <label>Iniciar sesión:</label>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr style="outline: thin solid">
                        <td style="text-align: center;">
                            <img src="../../../image/fotoayuda/inicia_sesion.png">
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <li>AYUDA ADICIONAL:
                <br>
                <label>Si desea obtener apoyo técnico o ayuda en relación con el software, póngase en contacto con nelsonmouatvergara@gmail.com.</label>
            </li>
        </ol>
        <br>
        <a href="../menuayuda.php"><input type="button" name="vol" id="vol" value="Volver"></a>
    </center>
</body>

</html>