<?php
	
    require_once 'elementWrapping.php';

    class TagOption extends ElementWrapping {

        public function TagOption($id, $name, $cssClass) {
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