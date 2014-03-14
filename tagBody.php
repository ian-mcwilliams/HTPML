<?php
	
    require_once 'elementWrapping.php';

    class TagBody extends ElementWrapping {

        public function TagBody($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'body');
        }


    }

