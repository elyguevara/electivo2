<?php
    class curso{
        var $codigo;
        var $nombre;
        var $horas;
        var $credito;
        
        //
        function getCodigo() {
            return $this->codigo;
        }

        function getNombre() {
            return $this->nombre;
        }

        function getHoras() {
            return $this->horas;
        }

        function getCredito() {
            return $this->credito;
        }

        function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setHoras($horas) {
            $this->horas = $horas;
        }

        function setCredito($credito) {
            $this->credito = $credito;
        }

        function __construct($codigo, $nombre, $horas, $credito) {
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            $this->horas = $horas;
            $this->credito = $credito;
        }
    }
?>