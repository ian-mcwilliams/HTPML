<?php

    class TagImage extends ElementIndexed {

        public function TagImage($attrs) {
            parent::__construct($attrs);
        }
        
        public function setSource($source) {
            parent::setAttribute('src', $source);
        }

        public function render($sink) {
            parent::renderAll($sink, 'img', TRUE);
        }


    }