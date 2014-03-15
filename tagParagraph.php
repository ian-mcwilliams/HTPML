<?php

    class TagParagraph extends ElementIndexed {

        public function TagParagraph($attrs) {
            parent::__construct($attrs);
        }

        public function render($sink) {
            parent::renderAll($sink, 'p');
        }


    }

