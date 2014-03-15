<?php

    class TagInputDate extends TagInput {
        
        public function TagInputDate($attrs) {
            $attrs['type'] = 'date';
            parent::__construct($attrs);
        }


    }

