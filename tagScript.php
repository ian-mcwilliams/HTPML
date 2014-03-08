<?php
	
    require_once 'elementWrapping.php';

    class TagScript extends ElementWrapping {

        public function TagScript($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'script');
        }


    }

