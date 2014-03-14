<?php
	
    require_once 'elementWrapping.php';

    class TagLabel extends ElementWrapping {

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