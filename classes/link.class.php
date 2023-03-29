<?php

    class Link {
        private $url;
        private $rel;
        private $integrity;
        private $crossorigin;
        private $type;

        function __construct($url, $rel, $integrity = null, $crossorigin = null, $type = null) {
            // $this->integrity   = $integrity;
            // $this->crossorigin = $crossorigin;
            // $this->type        = $type;
            if ($url) {$this->url = $url;};
            if ($rel) {$this->rel = $rel;};
            if ($integrity) {$this->integrity = $integrity;};
            if ($crossorigin) {$this->crossorigin = $crossorigin;};
            if ($type) {$this->type = $type;};

        }

        public function __toString() {
            return "<link href=\"{$this->url}\"
            rel=\"{$this->rel}\"
            integrity=\"{$this->integrity}\" 
            crossorigin=\"{$this->crossorigin}\" 
            type=\"{$this->type}\">";
        }

    }

?>