<?php

    class TagScript extends ElementIndexed {

        public function TagScript($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'script');
        }


    }

