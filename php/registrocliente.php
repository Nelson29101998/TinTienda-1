<!DOCTYPE html>
<html lang="es">

<?php
session_start();
include "conexion.php";
if ($_POST) {
    $rut = $_POST['rut'];
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];
    $edad = $_POST['edad'];
    $sex = $_POST['sexo'];
    $tel = $_POST['phone'];
    $pais = $_POST['pais'];
    $city = $_POST['city'];
    $dir = $_POST['dir'];
    $cor = $_POST['correo'];
    $pass1 = $_POST['pass'];
    $pass2 = $_POST['pass_rep'];

    $classname = "";
    $classape = "";
    $classano = "";
    $classtel = "";
    $classex = "";
    $classrut = "";
    $classpais = "";
    $classcity = "";
    $classdir = "";
    $classcor = "";
    $classpass1 = "";
    $classpass2 = "";

    if ($nom == "") {
        $msgNom = "Falta ingresar el nombre";
        $classname = "error";
    }

    if ($ape == "") {
        $msgApe = "Falta ingresar el apellido";
        $classape = "error";
    }

    if ($edad == "") {
        $msgAno = "Falta ingresar la edad";
        $classano = "error";
    } else {
        if (!is_numeric($edad)) {
            $msgAno = "Edad debe ser número";
            $classano = "error";
        }
    }

    if ($tel == "") {
        $msgTel = "Falta ingresar el teléfono";
        $classtel = "error";
    } else {
        if (!is_numeric($tel)) {
            $msgAno = "Teléfono debe ser número";
            $classano = "error";
        }
    }

    if ($sex == "") {
        $msgSex = "Falta ingresar el sexo";
        $classex = "error";
    }

    if ($rut == "") {
        $msgRut = "Falta ingresar el RUT";
        $classrut = "error";
    }

    if ($pais == "") {
        $msgPais = "Falta ingresar el pais";
        $classpais = "error";
    }

    if ($city == "") {
        $msgCity = "Falta ingresar el ciudad";
        $classcity = "error";
    }

    if ($dir == "") {
        $msgDir = "Falta ingresar el dirección";
        $classdir = "error";
    }

    if ($cor == "") {
        $msgCor = "Falta ingresar el correo";
        $classcor = "error";
    }

    if ($pass1 == "") {
        $msgPass1 = "Falta ingresar la contraseña";
        $classpass1 = "error";
    }

    if ($pass2 == "") {
        $msgPass2 = "Falta repetir contraseña";
        $classpass2 = "error";
    }

    if ($pass1 != $pass2) {
        $msgPass1 = "La contraseña son diferente";
        $classpass1 = "error";

        $msgPass2 = "Repetir contraseña son diferente";
        $classpass2 = "error";
    } else if (
        $classname == "" && $classape == "" && $classano == "" && $classtel == ""
        && $classex == "" && $classrut == "" && $classpais == "" && $classcity == ""
        && $classdir == "" && $classcor == "" && $classpass1 == "" && $classpass2 == ""
    ) {
        $ins = "INSERT INTO cliente(Id_RUT, Nombre, Apellido, Edad, Sexo, Pais, Ciudad,
        Mail, Direccion, Telefono, Contrasena, Rep_contrasena)
        values ('" . $rut . "', '" . $nom . "', '" . $ape . "', '" . $edad . "', '" . $sex . "',
        '" . $pais . "', '" . $city . "', '" . $cor . "', '" . $dir . "', '" . $tel . "', 
        '" . $pass1 . "', '" . $pass2 . "')";
        if ($conexion->query($ins) === TRUE) {
            echo "<center><h1>Registro exitoso. Muchas gracias por preferirnos. ;)</h1><a href='../index.php'><button type='button'>Volver</button></a></center>";
        } else {
            echo "<h1>Error: " . $sql . $conexion->error . "</h1>";
            echo "Registrado no ha podido!! :(";
        }
    }
}
?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Registro de cliente</title>
    <style>
        div {
            margin: 10px;
        }

        div label {
            padding: 10px;
            float: left;
            width: 20%;
        }

        input {
            padding: 10px;
            border: solid 4px black;
        }

        .error {
            background: orange;
            border: solid 4px red;
        }

        .msg {
            color: white;
            font-size: 15px;
        }
    </style>
</head>

<body style="background-color: green;">
    <form name="nc" id="nc" method="POST" action="registrocliente.php">
        <fieldset>
            <legend>Registro cliente</legend>
            <div class="<?php echo $classname; ?>">
                <label>Nombre: </label>
                <input name="nom" id="nom" type="text" maxlength="20" placeholder="nombre" value="<?php
                                                                                                    if (isset($nom)) {
                                                                                                        echo $nom;
                                                                                                    }
                                                                                                    ?>">
                <span class="msg">
                    <?php
                    if (isset($msgNom)) {
                        echo $msgNom;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classape; ?>">
                <label>Apellidos: </label>
                <input name="ape" id="ape" type="text" maxlength="20" placeholder="apellido" value="<?php
                                                                                                    if (isset($ape)) {
                                                                                                        echo $ape;
                                                                                                    }
                                                                                                    ?>">
                <span class="msg">
                    <?php
                    if (isset($msgApe)) {
                        echo $msgApe;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classano; ?>">
                <label>Edad: </label>
                <input name="edad" id="edad" type="number" maxlength="3" placeholder="Edad" value="<?php
                                                                                                    if (isset($edad)) {
                                                                                                        echo $edad;
                                                                                                    }
                                                                                                    ?>">
                <span class="msg">
                    <?php
                    if (isset($msgAno)) {
                        echo $msgAno;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classex; ?>">
                <label>Sexo: </label>
                <input name="sexo" id="sexo" type="text" maxlength="10" placeholder="Tú sexo" value="<?php
                                                                                                        if (isset($sex)) {
                                                                                                            echo $sex;
                                                                                                        }
                                                                                                        ?>">
                <span class="msg">
                    <?php
                    if (isset($msgSex)) {
                        echo $msgSex;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classrut; ?>">
                <label>RUT: </label>
                <input name="rut" id="rut" type="text" maxlength="9" placeholder="Tú RUT" value="<?php
                                                                                                    if (isset($rut)) {
                                                                                                        echo $rut;
                                                                                                    }
                                                                                                    ?>">
                <span class="msg">
                    <?php
                    if (isset($msgRut)) {
                        echo $msgRut;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classtel; ?>">
                <label>Teléfono:</label>
                +<input name="phone" id="phone" type="number" maxlength="11" placeholder="número de teléfono" value="<?php
                                                                                                                        if (isset($tel)) {
                                                                                                                            echo $tel;
                                                                                                                        }
                                                                                                                        ?>">
                <span class="msg">
                    <?php
                    if (isset($msgTel)) {
                        echo $msgTel;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classpais; ?>">
                <label>Pais: </label>
                <input name="pais" id="pais" type="text" maxlength="20" placeholder="Pais" value="<?php
                                                                                                    if (isset($pais)) {
                                                                                                        echo $pais;
                                                                                                    }
                                                                                                    ?>">
                <span class="msg">
                    <?php
                    if (isset($msgPais)) {
                        echo $msgPais;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classcity; ?>">
                <label>Ciudad: </label>
                <input name="city" id="city" type="text" maxlength="20" placeholder="Ciudad" value="<?php
                                                                                                    if (isset($city)) {
                                                                                                        echo $city;
                                                                                                    }
                                                                                                    ?>">
                <span class="msg">
                    <?php
                    if (isset($msgCity)) {
                        echo $msgCity;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classdir; ?>">
                <label>Dirección: </label>
                <input name="dir" id="dir" type="text" maxlength="500" placeholder="Dirección" value="<?php
                                                                                                        if (isset($dir)) {
                                                                                                            echo $dir;
                                                                                                        }
                                                                                                        ?>">
                <span class="msg">
                    <?php
                    if (isset($msgDir)) {
                        echo $msgDir;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classcor; ?>">
                <label>Mail: </label>
                <input name="correo" id="correo" type="email" maxlength="500" placeholder="Correo" value=" <?php
                                                                                                            if (isset($cor)) {
                                                                                                                echo $cor;
                                                                                                            }
                                                                                                            ?>">
                <span class="msg">
                    <?php
                    if (isset($msgCor)) {
                        echo $msgCor;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classpass1; ?>">
                <label>Contraseña: </label><input name="pass" id="pass" type="password" maxlength="100" placeholder="contraseña">
                <span class="msg">
                    <?php
                    if (isset($msgPass1)) {
                        echo $msgPass1;
                    }
                    ?>
                </span>
            </div>
            <div class="<?php echo $classpass2; ?>">
                <label>Repetir contraseña: </label><input name="pass_rep" id="pass_rep" type="password" maxlength="100" placeholder="Repetir contraseña">
                <span class="msg">
                    <?php
                    if (isset($msgPass2)) {
                        echo $msgPass2;
                    }
                    ?>
                </span>
            </div>
            <div>
                <input name="save" id="save" type="submit" value="Registrado">
                <a href="../index.php"><input name="vol" id="vol" type="button" value="Volver"></a>
            </div>
        </fieldset>
    </form>
</body>

</html>