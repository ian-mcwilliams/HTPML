<?php
	
    require_once 'elementHtml.php';

    class TagBreak extends ElementHtml {

        public function render($sink) {
            $sink->addToBuffer('<br />'."\n");
        }


    }

