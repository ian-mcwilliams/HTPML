<?php

    require_once 'elementIndexed.php';

    class TagTable extends ElementIndexed {
        
        public function TagTable($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'table');
        }
    }