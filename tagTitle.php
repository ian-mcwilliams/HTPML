<?php

    class TagTitle extends ElementIndexed {
        
        public function TagTitle($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'title');
        }


    }

