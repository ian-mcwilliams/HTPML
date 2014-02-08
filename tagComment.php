<?php
	
    require_once 'elementHtml.php';

    class TagComment extends ElementHtml {
        private $comment;

        public function setTagComment($comment) {
            $this->comment = $comment;
        }

        public function render($sink) {
            $sink->addToBuffer('<!-- '.$this->comment.' >'."\n");
        }


    }

