<?php

    class TagSelect extends ElementIndexed {

        public function TagSelect($attrs) {
            parent::__construct($attrs);
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