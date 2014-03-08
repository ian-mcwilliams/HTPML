<?php
	
    require_once 'elementIndexed.php';

    class TagLabel extends ElementIndexed {
        private $text;

        public function TagLabel($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setFor($id) {
            parent::setAttribute("for", $id);
        }
        
        public function setText($text) {
            $this->text = $text;
        }

        public function render($sink) {
            $sink->addToBuffer('<label'.parent::getAttributesAsString().'>'.$this->text.'</label>'."\n");
        }


    }