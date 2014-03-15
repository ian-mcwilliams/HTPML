<?php

    class TagTableRow extends ElementIndexed {
        
        public function TagTableRow($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'tr');
        }
    }