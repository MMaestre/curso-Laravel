<?php
/**
 * @author MMaestre
 * @version 1.0.3
 * @internal
 */
namespace Usuario;
    class Persona {
        private $nombre;
        private $apellido;
        private $edad;

        /**
         * Persona constructor.
         * @param string $nombre
         */
        public function __construct($nombre)
        {
            $this->setNombre($nombre);
        }


        /**
         * @return string
         */
        public function getNombre():string
        {
            return $this->nombre;
        }

        /**
         * @param string $nombre
         */
        public function setNombre(string $nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * @return string
         */
        public function getApellido():string
        {
            return $this->apellido;
        }

        /**
         * @param string $apellido
         */
        public function setApellido(string $apellido)
        {
            $this->apellido = $apellido;
        }

        /**
         * @return integer
         */
        public function getEdad():int
        {
            return $this->edad;
        }

        /**
         * @param integer $edad
         */
        public function setEdad(int $edad)
        {
            $this->edad = $edad;
        }

        public function sumaEdad() {
            $this->setEdad($this->edad++);
        }
    }