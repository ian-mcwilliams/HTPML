<?php 
	
    require_once 'tagInput.php';

    class TagInputSubmit extends TagInput {
        
        public function TagInputSubmit($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass, "submit");
        }
        
        public function setValue($value) {
            parent::setAttribute("value", $value);
        }


    }

