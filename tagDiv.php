<?php

    class TagDiv extends ElementIndexed {
        
        public function TagDiv($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'div');
        }
    }

