<?php

    class TagAnchor extends ElementIndexed {

        public function TagAnchor($attrs) {
            parent::__construct($attrs);
        }
        
        public function setHref($href) {
            parent::setAttribute("href", $href);
        }

        public function render($sink) {
            parent::renderAll($sink, 'a');
        }

        
    }

