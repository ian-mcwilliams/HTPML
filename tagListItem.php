<?php

    require_once 'elementWrapping.php';

    class TagListItem extends ElementWrapping {
        
        public function TagListItem($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'li');
        }
    }