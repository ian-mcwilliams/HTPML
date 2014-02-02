<?php
	
    require_once 'elementHtml.php';

    class TagParagraph extends ElementHtml {
        private $text;
        
        public function setText($text) {
            $this->text = $text;
        }

        public function render($sink) {
            $sink->addToBuffer('<p>'.$this->text.'</p>'."\n");
        }


    }

