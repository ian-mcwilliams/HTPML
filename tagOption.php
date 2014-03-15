<?php
	
    require_once 'elementIndexed.php';

    class TagOption extends ElementIndexed {

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