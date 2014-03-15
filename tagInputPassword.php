<?php

    class TagInputPassword extends TagInput {
        
        public function TagInputPassword($attrs) {
            $attrs['type'] = 'password';
            parent::__construct($attrs);
        }
        
        public function setOnBlur($command) {
            parent::setAttribute("onBlur", $command);
        }
        
        public function setMaxlength($maxlength) {
            parent::setAttribute("maxlength", $maxlength);
        }


    }


