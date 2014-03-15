<?php

    class TagHtml extends ElementIndexed {
        
        public function TagHtml($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'html');
        }
    }