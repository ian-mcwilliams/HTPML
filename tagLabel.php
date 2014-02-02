<?php
	
    require_once 'elementIndexed.php';

    class TagLabel extends ElementIndexed {

        public function TagLabel($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            $sink->addToBuffer('<label'.parent::getAttributesAsString().' />'."\n");
        }


    }