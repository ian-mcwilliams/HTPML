<?php 
	
    require_once 'tagInput.php';

    class TagInputPassword extends TagInput {
        
        public function TagInputPassword($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass, "password");
        }
        
        public function setOnBlur($command) {
            parent::setAttribute("onBlur", $command);
        }
        
        public function setMaxlength($maxlength) {
            parent::setAttribute("maxlength", $maxlength);
        }


    }


