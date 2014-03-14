<?php 
	
    require_once 'tagInput.php';

    class TagInputDate extends TagInput {
        
        public function TagInputDate($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass, "date");
        }


    }

