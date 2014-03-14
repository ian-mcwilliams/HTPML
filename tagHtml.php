<?php

    require_once 'elementWrapping.php';

    class TagHtml extends ElementWrapping {
        
        public function TagHtml($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'html');
        }
    }