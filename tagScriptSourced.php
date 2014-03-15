<?php

    class TagScriptSourced extends ElementIndexed {

        public function TagScriptSourced($attrs) {
            parent::__construct($attrs);
        }
        
        public function setSource($source) {
            parent::setAttribute("src", $source);
        }

        public function render($sink) {
            parent::renderAll($sink, 'script');
        }


    }

