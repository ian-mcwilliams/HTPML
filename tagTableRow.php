<?php

    require_once 'elementWrapping.php';

    class TagTableRow extends ElementWrapping {
        
        public function TagTableRow($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'tr');
        }
    }