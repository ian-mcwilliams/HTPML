<?php
	
    require_once 'elementWrapping.php';

    class TagOption extends ElementWrapping {

        public function TagOption($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setValue($value) {
            parent::setAttribute("value", $value);
        }
        
        public function setSelected() {
            parent::setAttribute("selected", "selected");
        }

        public function render($sink) {
            parent::renderAll($sink, 'option');
        }


    }