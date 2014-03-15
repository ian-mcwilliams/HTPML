<?php

    class TagTableData extends ElementIndexed {

        public function TagTableData($attrs) {
            parent::__construct($attrs);
        }
        
        public function setColspan($colspan) {
            parent::setAttribute("colspan", $colspan);
        }
        
        public function setRowspan($rowspan) {
            parent::setAttribute("rowspan", $rowspan);
        }

        public function render($sink) {
            parent::renderAll($sink, 'td');
        }
    }