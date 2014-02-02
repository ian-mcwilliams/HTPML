<?php

    require_once 'elementWrapping.php';

    class TagListItem extends ElementWrapping {
        
        public function TagListItem($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'li');
        }
    }