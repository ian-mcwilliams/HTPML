<?php 
	
    require_once 'tagInput.php';

    class TagInputCheckbox extends TagInput {
        
        public function TagInputCheckBox($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass, "checkbox");
        }


    }

