<?php
	
    require_once 'elementWrapping.php';

    class TagParagraph extends ElementWrapping {

        public function TagParagraph($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'p');
        }


    }

