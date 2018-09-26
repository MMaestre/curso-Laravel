<?php
/**
 * @author MMaestre
 * @version 1.0.3
 * @internal
 */
require('vendor/autoload.php');

use Usuario\Persona;

$persona = new Persona();
$persona->setNombre("Paca");
echo $persona->getNombre();