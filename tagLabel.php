<?php
	
    require_once 'elementIndexed.php';

    class TagLabel extends ElementIndexed {

        public function TagLabel($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setFor($id) {
            parent::setAttribute("for", $id);
        }

        public function render($sink) {
            parent::renderAll($sink, 'label');
        }


    }