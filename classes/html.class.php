<?php

    class Html {
        private $lang;
        private $listaElementos = [];

        function __construct($lang) {
            if($lang){$this->lang = $lang;} else {$this->lang = "pt-br";};
        }

        function addElemento($elemento) {
            $this->listaElementos[] = $elemento;
        }
       
        function __toString() {
            $html = "<!DOCTYPE html><html lang=\"{$this->lang}\">";
            foreach($this->listaElementos as $iListaElementos){
                $html .= $iListaElementos;
            }
            $html .= "</html>";
            return $html;
        }
    }

?>