<?php

    require_once 'elementWrapping.php';

    class TagTableData extends ElementWrapping {
        
        public function TagTableData($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'td');
        }
    }