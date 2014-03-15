<?php

    class TagUnorderedList extends ElementIndexed {
        
        public function TagUnorderedList($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'ul');
        }
    }