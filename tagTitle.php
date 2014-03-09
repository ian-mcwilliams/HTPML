<?php
	
    require_once 'elementWrapping.php';

    class TagTitle extends ElementWrapping {
        
        public function TagTableRow($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'title');
        }


    }

