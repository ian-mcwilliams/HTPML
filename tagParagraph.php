<?php
	
    require_once 'elementIndexed.php';

    class TagParagraph extends ElementIndexed {

        public function TagParagraph($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'p');
        }


    }

