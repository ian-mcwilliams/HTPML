<?php

    class TagLabel extends ElementIndexed {

        public function TagLabel($attrs) {
            parent::__construct($attrs);
        }
        
        public function setFor($id) {
            parent::setAttribute("for", $id);
        }

        public function render($sink) {
            parent::renderAll($sink, 'label');
        }


    }