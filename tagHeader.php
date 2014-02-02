<?php

    require_once 'elementIndexed.php';

    abstract class TagHeader extends ElementIndexed {
        private $number;
        private $text;

        public function TagHeader($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setNumber($number) {
            $this->number = $number;
        }
        
        public function setText($text) {
            $this->text = $text;
        }

        public function render($sink) {
            $sink->addToBuffer('<h'.$this->number.'>'.$this->text.'</'.$this->number.'>'."\n");
        }
        
        
    }