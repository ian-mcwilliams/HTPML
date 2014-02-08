<?php

    require_once 'elementWrapping.php';

    class TagTableHeader extends ElementWrapping {
        private $text;

        public function TagTableHeader($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setText($text) {
            $this->text = $text;
        }
        
        public function setColspan($colspan) {
            parent::setAttribute("colspan", $colspan);
        }
        
        public function setRowspan($rowspan) {
            parent::setAttribute("rowspan", $rowspan);
        }

        public function render($sink) {
            parent::renderAll($sink, 'th', $this->text);
        }
    }