<?php

    abstract class TagInput extends ElementIndexed {

        public function TagInput($id, $name, $cssClass, $type) {
            parent::__construct($id, $name, $cssClass);
            parent::setAttribute("type", $type);
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

		