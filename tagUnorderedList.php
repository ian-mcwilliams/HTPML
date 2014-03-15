<?php

    class TagUnorderedList extends ElementIndexed {
        
        public function TagUnorderedList($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'ul');
        }
    }