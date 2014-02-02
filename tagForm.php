<?php

    require_once 'elementWrapping.php';

    class TagForm extends ElementWrapping {
        
        public function TagForm($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'form');
        }
    }