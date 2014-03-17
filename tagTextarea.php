<?php

    class TagTextarea extends ElementIndexed {
        private $rows;
        private $cols;

        public function TagTextarea($attrs) {
            $this->setRows(parent::checkAttr($attrs, 'rows') ?: 1);
            $this->setCols(parent::checkAttr($attrs, 'cols') ?: 1);
            parent::__construct($attrs);
        }
        
        public function setValue($value) {
            parent::setAttribute("value", $value);
        }
        
        public function setOnBlur($command) {
            parent::setAttribute("onBlur", $command);
        }

        public function setMaxlength($maxlength) {
            parent::setAttribute("maxlength", $maxlength);
        }

        public function setPlaceholder($placeholder) {
            parent::setAttribute("placeholder", $placeholder);
        }

        public function setRows($rows) {
            $this->rows = $rows;
        }

        public function setCols($cols) {
            $this->cols = $cols;
        }

        public function render($sink) {
            parent::renderAll($sink, 'textarea rows='.$this->rows.' cols='.$this->cols);
        }


    }