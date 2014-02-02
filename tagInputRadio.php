<?php 
	
    require_once 'tagInput.php';

    class TagInputRadio extends TagInput {
        
        public function TagInputRadio($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass, "radio");
        }


    }

