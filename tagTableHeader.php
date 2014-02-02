<?php

    require_once 'elementWrapping.php';

    class TagTableHeader extends ElementWrapping {
        
        public function TagTableHeader($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'th');
        }
    }