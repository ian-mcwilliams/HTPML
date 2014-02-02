<?php 
	
    require_once 'tagInput.php';

    class TagInputSubmit extends TagInput {
        
        public function TagInputSubmit($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass, "submit");
        }


    }

