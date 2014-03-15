<?php

    class TagInputText extends TagInput {
        
        public function TagInputText($attrs) {
            $attrs['type'] = 'text';
            parent::__construct($attrs);
        }

        public function setMaxlength($maxlength) {
            parent::setAttribute("maxlength", $maxlength);
        }

        public function setMax($max) {
            parent::setAttribute("max", $max);
        }

        public function setMin($min) {
            parent::setAttribute("min", $min);
        }
        
        public function setOnBlur($command) {
            parent::setAttribute("onBlur", $command);
        }
        
        public function setSize($size) {
            parent::setAttribute("size", $size);
        }

        public function setPlaceholder($placeholder) {
            parent::setAttribute("placeholder", $placeholder);
        }


    }

