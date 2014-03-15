<?php

    class TagTitle extends ElementIndexed {
        
        public function TagTitle($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'title');
        }


    }

