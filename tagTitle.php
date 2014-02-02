<?php
	
    require_once 'elementHtml.php';

    class TagTitle extends ElementHtml {
        private $text;
        
        public function setText($text) {
            $this->text = $text;
        }

        public function render($sink) {
            $sink->addToBuffer('<title>'.$this->text.'</title>'."\n");
        }


    }

