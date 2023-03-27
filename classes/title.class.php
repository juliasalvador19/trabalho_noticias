<?php   

    class Title {
        private $value;

        function __construct($value) {
            $this->value = $value;
        }

        function __toString() {
            return "<title>{$this->value}</title>";
        }
    }

?>