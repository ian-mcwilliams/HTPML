<?php

    class TagBold extends ElementIndexed {
        
        public function TagBold($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'b');
        }


    }

