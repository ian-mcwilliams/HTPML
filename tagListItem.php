<?php

    require_once 'elementIndexed.php';

    class TagListItem extends ElementIndexed {
        
        public function TagListItem($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'li');
        }
    }