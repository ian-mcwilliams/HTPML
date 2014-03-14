<?php

    require_once 'elementWrapping.php';

    class TagUnorderedList extends ElementWrapping {
        
        public function TagUnorderedList($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'ul');
        }
    }