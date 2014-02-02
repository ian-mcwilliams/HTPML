<?php
	
    require_once 'elementHtml.php';

    class TagBold extends ElementHtml {
        private $text;
        
        public function setText($text) {
            $this->text = $text;
        }

        public function render($sink) {
            $sink->addToBuffer('<b>'.$this->text.'</b>'."\n");
        }


    }

