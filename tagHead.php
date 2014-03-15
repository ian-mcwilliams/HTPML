<?php

    class TagHead extends ElementIndexed {
        
        public function TagHead($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'head');
        }
    }