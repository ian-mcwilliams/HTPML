<?php

    class TagForm extends ElementIndexed {
        
        public function TagForm($attrs) {
            parent::__construct($attrs);
        }
        
        public function setOnSubmit($onSubmit) {
            parent::setAttribute("onSubmit", $onSubmit);
        }
        
        public function setAction($action) {
            parent::setAttribute("action", $action);
        }
        
        public function setMethod($method) {
            parent::setAttribute("method", $method);
        }

        public function render($sink) {
            parent::renderAll($sink, 'form');
        }
    }