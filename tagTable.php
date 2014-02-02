<?php

    require_once 'elementWrapping.php';

    class TagTable extends ElementWrapping {
        
        public function TagTable($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'table');
        }
    }