<?php

    class TagInputHidden extends TagInput {
        
        public function TagInputHidden($attrs) {
            $attrs['type'] = 'hidden';
            parent::__construct($attrs);
        }


    }

