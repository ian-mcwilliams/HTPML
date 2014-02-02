<?php 
	
    require_once 'tagInput.php';

    class TagInputDate extends TagInput {
        
        public function TagInputDate($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass, "date");
        }


    }

