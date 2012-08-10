<?php
include('funciones.php');
cabecera('Envio');

$nombre = $_REQUEST["nombre"];
$correo = $_REQUEST["correo"];
$tlf = $_REQUEST["tlf"];
$mensaje = $_REQUEST["mensaje"];

/*mail($destino, $asunto, $mensaje, $encabezados);*/
mail("info@esserestudi.com", $nombre, $mensaje, "From:  $correo") or die ("Su mensaje no se envio.");

echo "<p>Hemos recibido la siguiente informaci&oacute;n:<p>";
echo $mensaje;
echo "<p><br><p>Muy pronto nos pondremos en contacto con usted.<p>";

pie();
?>
