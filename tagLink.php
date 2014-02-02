<?php
	
    require_once 'elementHtml.php';

    class TagLink extends ElementHtml {
        private $href;
        
        public function setSource($href) {
            $this->href = $href;
        }

        public function render($sink) {
            $sink->addToBuffer('<link rel="stylesheet" type="text/css" href=">'.$this->href.' />'."\n");
        }


    }

