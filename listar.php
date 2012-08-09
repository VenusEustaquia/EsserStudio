<?php

include('funciones.php');
$tipo= recoge('tipo');
cabecera('Listar canciones');

       print "<div id='lista-$tipo'></div>\n";


$db = NULL;
pie();
?>
