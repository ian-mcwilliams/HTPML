<?php

    class TagInputSubmit extends TagInput {
        
        public function TagInputSubmit($attrs) {
            $attrs['type'] = 'submit';
            parent::__construct($attrs);
        }


    }

