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
    <title>Ayuda - Manual Usuario</title>
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
        <table>
            <tbody>
                <tr style="text-align: center;">
                    <td>
                        <h2>Manual de Usuario:</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ol>
                            <li>INTRODUCCIÓN
                                <ol>
                                    <li>Descripción del sistema y objetivos:</li>
                                    <label>La tienda online es una plataforma digital que se utiliza para vender producto en este caso se ha elegido ropa. En nuestra página web TinTienda podrás encontrar ropa de todo tipo de ropa para hombre incluidos los accesorios.</label>
                                    <dl>
                                        <dt>Los objetivos que van a tener mi tienda online son:</dt>
                                        <dd>- Dar acceso a nuevos clientes.</dd>
                                        <dd>- Captar clientes de la competencia.</dd>
                                        <dd>- Proporcionar notoriedad relevancia y prestigio a mi marca en la red.</dd>
                                        <dd>- Aumentar las ventas de mis productos, lanzar ofertas promocionar productos obtener información y opción de los clientes.</dd>
                                    </dl>

                                    <li>Conocimientos previos de los usuarios:</li>
                                    <label>El usuario solo necesita tener conocimientos básicos de manejo del ordenador y el internet.</label>
                                    <br>
                                    <br>

                                    <li>Capacidades mínimas del computador:</li>
                                    <dl>
                                        <dt>El computador debería tener por lo menos:</dt>
                                        <dd>- Un procesador de gama media.</dd>
                                        <dd>- Una memoria RAM de mínimo 4 GB.</dd>
                                        <dd>- Un disco duro de estado sólido.</dd>
                                        <dd>- Una tarjeta gráfica de las más sencillas las integradas dentro del procesador son suficientes.</dd>
                                    </dl>

                                    <li>Software adicional:</li>
                                    <dl>
                                        <dt>Además de lo mencionado anteriormente sería interesante que se contrata con:</dt>
                                        <dd>- 2 o 3 puerto USB.</dd>
                                        <dd>- Un lector de CD/DVD.</dd>
                                        <dd>- Una tarjeta de red.</dd>
                                        <dd>- Una pantalla de más de 13 pulgadas.</dd>
                                    </dl>
                                </ol>
                            </li>
                            <br>

                            <li>ACCESO AL SISTEMA:
                                <br>
                                <label>Para acceder al sistema lo haremos a través del siguiente link: www.tintienda.cl al acceder al sistema nos va a dar dos opciones.</label>
                                <br>
                                <label>Uno registrarse como nuevo cliente y otra iniciar sesión en el caso de que ya se esté registrado. A continuación, nuestro un pantallazo para ejemplificar lo dicho:</label>
                                <br>
                                <label>Registro de cliente:</label>
                                <br>
                                <img src="../../../Image/fotoayuda/registra_cliente.png" width="500">
                                <br>
                                <br>
                                <label>Inicia sesión:</label>
                                <br>
                                <img src="../../../Image/fotoayuda/inicia_sesion.png">
                                <br>
                                <label>Entre las funcionalidades que va a tener mi página web de ropa van a ser las siguiente:</label>
                                <ol>
                                    <li>Imágenes de los productos (ropa de hombre) ya que son determinantes.</li>
                                    <li>A portar detalles relevantes o importantes sobre el producto como su composición, recomendaciones de lavado, …etc. que ayudarán a generar confianza y evitar devoluciones.</li>
                                    <li>Una guía de tallas que permita al cliente saber qué medidas rige el patrón de cada talla.</li>
                                    <li>Destaca ciertos productos de otros, puede crear una opción de los más vendidos o de promociones, novedades, …etc.</li>
                                    <li>Debemos dotar a la plataforma de una opción donde el cliente pueda valorar el producto comprado y su experiencia de compra.</li>
                                </ol>
                            </li>
                            <br>
                            <li>GUÍA DE INSTALACIÓN:
                                <br>
                                <label>Nuestro sistema no requiere de una guía de instalación.</label>
                            </li>


                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="../menuayuda.php"><input type="button" name="vol" id="vol" value="Volver"></a>
    </center>
</body>

</html>