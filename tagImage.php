<?php
	
    require_once 'elementIndexed.php';

    class TagImage extends ElementIndexed {

        public function TagImage($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setSource($source) {
            parent::setAttribute('src', $source);
        }

        public function render($sink) {
            parent::renderAll($sink, 'img', TRUE);
        }


    }