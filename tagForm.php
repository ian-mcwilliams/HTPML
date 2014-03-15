<?php

    class TagForm extends ElementIndexed {
        
        public function TagForm($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
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