<?php
/**
 * @author MMaestre
 * @version 1.0.0
 * @internal
 */

// CONCATENAR
echo "hello <br/> <hr/>";
$nombre = "Mary";

echo "hello ".$nombre;

// CON HANDLEBARS
echo "<br/>";
echo "hello {$nombre}";

// SOLO VARIABLES
echo "<br/>";
$saludo = "Ave, ";
$nombre = "César";

echo $saludo.$nombre;