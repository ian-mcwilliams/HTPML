<?php

    class TagSelect extends ElementIndexed {

        public function TagSelect($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setMultiple() {
            parent::setAttribute('multiple', 'multiple');
        }
        
        public function unsetMultiple() {
            parent::unsetAttribute('multiple');
        }

        public function render($sink) {
            parent::renderAll($sink, 'select');
        }
    }