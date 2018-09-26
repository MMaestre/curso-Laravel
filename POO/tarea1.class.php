<?php
/**
 * @author MMaestre
 * @version 1.0.3
 * @internal
 */

    class Tarea {
        public $nombre;

        function __construct(string $nombre)
        {
            $this->setNombre($nombre);
        }

        /**
         * @return string
         */
        public function getNombre():string {
            return $this->nombre;
        }

        /**
         * @param string $nombre
         */
        public function setNombre(string $nombre)
        {
            $this->nombre = $nombre;
        }
    }

    $tarea = new Tarea('Juana');
    var_dump($tarea);