<?php

    class TagDiv extends ElementIndexed {
        
        public function TagDiv($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'div');
        }
    }

