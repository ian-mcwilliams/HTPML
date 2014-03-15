<?php
	
    require_once 'elementIndexed.php';

    class TagAnchor extends ElementIndexed {

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

