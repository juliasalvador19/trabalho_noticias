<?php

    class Meta {
        private $charset;
        private $httpequiv;
        private $content;
        private $name;

        function __construct($charset, $httpequiv, $content, $name) {
            if ($charset) {$this->charset = $charset;};
            if ($httpequiv) {$this->httpequiv = $httpequiv;};
            if ($name) {$this->name = $name;};
            if ($content) {$this->content = $content;};
        }

        function __toString() {
            return "<meta charset=\"{$this->charset}\" 
                          http-equiv=\"{$this->httpequiv}\" 
                          name=\"{$this->name}\" 
                          content=\"{$this->content}\">";                 
        }
    }

?>