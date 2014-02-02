<?php
	
    require_once 'elementIndexed.php';

    class TagOption extends ElementIndexed {
        private $text;

        public function TagOption($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setText($text) {
            $this->text = $text;
        }

        public function render($sink) {
            $sink->addToBuffer('<option'.parent::getAttributesAsString().'>'.$this->text.'</option>'."\n");
        }


    }