<?php

    abstract class TagInput extends ElementIndexed {

        public function TagInput($attrs) {
            parent::__construct($attrs);
        }

        public function getValue() {
            return parent::getAttribute('value');
        }

        public function setValue($value) {
            parent::setAttribute('value', $value);
        }

        public function render($sink) {
            parent::renderAll($sink, 'input', TRUE);
        }
    }

		