<?php

    require_once 'elementIndexed.php';

    class TagTableRow extends ElementIndexed {
        
        public function TagTableRow($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'tr');
        }
    }