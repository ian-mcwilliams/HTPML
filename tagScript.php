<?php

    class TagScript extends ElementIndexed {

        public function TagScript($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'script');
        }


    }

