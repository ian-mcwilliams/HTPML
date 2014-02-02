<?php
	
    require_once 'elementIndexed.php';

    class TagImage extends ElementIndexed {

        public function TagImage($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setSource($source) {
            parent::setAttribute('src', $source);
        }

        public function render($sink) {
            $sink->addToBuffer('<img'.parent::getAttributesAsString().' />'."\n");
        }


    }