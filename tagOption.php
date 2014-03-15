<?php

    class TagOption extends ElementIndexed {

        public function TagOption($attrs) {
            parent::__construct($attrs);
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