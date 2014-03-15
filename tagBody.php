<?php

    class TagBody extends ElementIndexed {

        public function TagBody($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'body');
        }


    }

