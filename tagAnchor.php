<?php
	
    require_once 'elementWrapping.php';

    class TagAnchor extends ElementWrapping {

        public function TagAnchor($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setHref($href) {
            parent::setAttribute("href", $href);
        }

        public function render($sink) {
            parent::renderAll($sink, 'a');
        }

        
    }

