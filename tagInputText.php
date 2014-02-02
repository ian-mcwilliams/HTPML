<?php 
	
    require_once 'tagInput.php';

    class TagInputText extends TagInput {
        
        public function TagInputText($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass, "text");
        }

        public function setMaxlength($max) {
            parent::setAttribute("maxlength", $max);
        }

        public function setMax($max) {
            parent::setAttribute("max", $max);
        }

        public function setPlaceholder($pH) {
            parent::setAttribute("placeholder", $pH);
        }


    }

