<?php

    class TagComment extends ElementHtml {
        private $comment;

        public function TagComment($attrs) {
            $this->setComment(parent::checkAttr($attrs['comment']) ?: '');
        }

        public function setComment($comment) {
            $this->comment = $comment;
        }

        public function render($sink) {
            $sink->addToBuffer('<!-- '.$this->comment.' -->'."\n");
        }


    }

