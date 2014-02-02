<?php

    require_once 'elementWrapping.php';

    class TagHead extends ElementWrapping {
        
        public function TagHead($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'head');
        }
    }