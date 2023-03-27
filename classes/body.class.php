<?php

    class Body {
        private $listaElementos = [];
       
        function addElemento($elemento) {
            $this->listaElementos[] = $elemento;
        }

        function __toString() {
            $body = "<body>";
            foreach($this->listaElementos as $iListaElementos){
                $body .= $iListaElementos;
            }

            $body .= "</body>";
            return $body;
        }
    }

