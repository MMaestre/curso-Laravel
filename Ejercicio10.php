<?php
/**
 * @author MMaestre
 * @version 1.0.0
 * @internal
 */

$personas = [
    "nombre" => "Xavi",
    "apellidos" => "Rodríguez Soler",
    "edad" => 40
];

var_dump ($personas);

$personas['nombre']="Paco";

echo "<br/>";
die(var_dump($personas));
