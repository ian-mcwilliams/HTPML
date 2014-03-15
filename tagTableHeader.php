<?php

    class TagTableHeader extends ElementIndexed {

        public function TagTableHeader($attrs) {
            parent::__construct($attrs);
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