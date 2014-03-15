<?php

    class TagInputCheckbox extends TagInput {
        
        public function TagInputCheckBox($attrs) {
            $attrs['type'] = 'checkbox';
            parent::__construct($attrs);
        }


    }

