<?php

    require_once 'elementIndexed.php';

    class TagHead extends ElementIndexed {
        
        public function TagHead($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'head');
        }
    }