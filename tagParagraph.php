<?php
	
    require_once 'elementIndexed.php';

    class TagParagraph extends ElementIndexed {
        private $text;

        public function TagParagraph($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setText($text) {
            $this->text = $text;
        }

        public function render($sink) {
            $sink->addToBuffer('<p'.parent::getAttributesAsString().'>'.$this->text.'</p>'."\n");
        }


    }

