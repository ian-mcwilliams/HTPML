<?php

    class TagBold extends ElementIndexed {
        
        public function TagBold($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'b');
        }


    }

