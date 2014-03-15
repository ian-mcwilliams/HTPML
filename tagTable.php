<?php

    class TagTable extends ElementIndexed {
        
        public function TagTable($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'table');
        }
    }