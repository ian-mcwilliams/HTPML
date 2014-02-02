<?php
	
    require_once 'elementWrapping.php';

    class TagAnchor extends ElementWrapping {
        private $text;

        public function TagAnchor($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
            $this->text = '';
        }

        public function setText($text) {
            $this->text = $text;
        }
        
        public function setHref($href) {
            parent::setAttribute("href", $href);
        }

        public function render($sink) {
            parent::renderAll($sink, 'a', $this->text);
        }


    }

