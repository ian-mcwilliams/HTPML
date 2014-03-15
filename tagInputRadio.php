<?php

    class TagInputRadio extends TagInput {
        
        public function TagInputRadio($attrs) {
            $attrs['type'] = 'radio';
            parent::__construct($attrs);
        }


    }

