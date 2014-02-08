<?php
	
    require_once 'elementIndexed.php';

    class TagScript extends ElementIndexed {

        public function TagScript($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setSource($source) {
            parent::setAttribute("src", $source);
        }

        public function render($sink) {
            $sink->addToBuffer('<script'.parent::getAttributesAsString().'></script>'."\n");
        }


    }

