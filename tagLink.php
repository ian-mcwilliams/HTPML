<?php
	
    require_once 'elementIndexed.php';

    class TagLink extends ElementIndexed {
        
        public function TagLink($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setSource($href) {
            parent::setAttribute("href", $href);
        }

        public function render($sink) {
            $sink->addToBuffer('<link rel="stylesheet" type="text/css"'.parent::getAttributesAsString().' />'."\n");
        }


    }

