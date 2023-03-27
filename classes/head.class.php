<?php

    class Head {
        private $listaElementos = [];
       
        function addElemento($elemento) {
            $this->listaElementos[] = $elemento;
        }
       
        function __toString() {
            $head = "<head>";
            foreach($this->listaElementos as $iListaElementos){
                $head .= $iListaElementos;
            }
            $head .= "</head>";
            return $head;
        }
    }