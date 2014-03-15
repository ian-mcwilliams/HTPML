<?php

    class TagListItem extends ElementIndexed {
        
        public function TagListItem($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'li');
        }
    }