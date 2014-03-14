<?php 
	
    require_once 'tagInput.php';

    class TagInputRadio extends TagInput {
        
        public function TagInputRadio($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass, "radio");
        }


    }

