<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Inicia sesión de cliente</title>
    
</head>

<body style="background-color: green;">
<center>
        <h1>Inicia sesión de cliente</h1>
        <form name="cliente" id="cliente" method="POST" action="sesioncliente.php">
            <table style="text-align: right;" border="4">
                <tbody>
                    <tr>
                        <td>
                            <input name="correo" id="correo" type="email" required placeholder="Mail">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="pass" id="pass" type="password" pattern="[A-Za-z0-9_-]{1,15}" required
                                placeholder="Contraseña">
                        </td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>
                            <input name="ent" id="ent" type="submit" value="Entrar">
                            <a href="../index.php"><input name="vol" id="vol" type="button" value="Volver"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </center>
</body>
</body>

</html>