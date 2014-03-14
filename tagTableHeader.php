<?php

    require_once 'elementWrapping.php';

    class TagTableHeader extends ElementWrapping {

        public function TagTableHeader($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
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