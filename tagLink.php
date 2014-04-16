<?php

    class TagLink extends ElementIndexed {
        
        public function TagLink($attrs) {
            $attrs['rel'] = 'stylesheet';
            $attrs['type'] = 'text/css';
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'link', TRUE);
        }


    }

