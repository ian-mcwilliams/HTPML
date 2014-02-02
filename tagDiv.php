<?php

    require_once 'elementWrapping.php';

    class TagDiv extends ElementWrapping {
        
        public function TagDiv($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'div');
        }
    }

