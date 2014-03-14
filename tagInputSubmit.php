<?php 
	
    require_once 'tagInput.php';

    class TagInputSubmit extends TagInput {
        
        public function TagInputSubmit($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass, "submit");
        }


    }

