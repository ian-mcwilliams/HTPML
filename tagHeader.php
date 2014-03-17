<?php

    class TagHeader extends ElementIndexed {
        private $number;

        public function TagHeader($attrs) {
            $this->setNumber(parent::checkAttr($attrs, 'number') ?: 1);
            parent::__construct($attrs);
        }
        
        public function setNumber($number) {
            $this->number = $number;
        }
        
        public function getNumber() {
            return $this->number;
        }

        public function render($sink) {
            parent::renderAll($sink, 'h'.$this->number);
        }
        
        
    }