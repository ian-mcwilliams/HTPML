<?php 
	
    require_once 'tagInput.php';

    class TagInputCheckbox extends TagInput {
        
        public function TagInputCheckBox($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass, "checkbox");
        }


    }

