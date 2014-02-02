<?php
	
    require_once 'elementIndexed.php';

    class TagTextarea extends ElementIndexed {

        public function TagTextarea($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            $sink->addToBuffer('<textarea'.parent::getAttributesAsString().' />'."\n");
        }


    }