<?php

    class TagHtml extends ElementIndexed {
        
        public function TagHtml($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'html');
        }
    }