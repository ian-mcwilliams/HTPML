<?php
	
    require_once 'elementIndexed.php';

    class TagLink extends ElementIndexed {
        
        public function TagLink($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
            parent::setAttribute('rel', 'stylesheet');
            parent::setAttribute('type', 'text/css');
        }
        
        public function setSource($href) {
            parent::setAttribute("href", $href);
        }

        public function render($sink) {
            parent::renderAll($sink, 'link', TRUE);
        }


    }

