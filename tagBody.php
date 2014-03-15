<?php
	
    require_once 'elementIndexed.php';

    class TagBody extends ElementIndexed {

        public function TagBody($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'body');
        }


    }

