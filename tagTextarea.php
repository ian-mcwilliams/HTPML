<?php
	
    require_once 'elementIndexed.php';

    class TagTextarea extends ElementIndexed {
        private $rows;
        private $cols;

        public function TagTextarea($id=FALSE, $name=FALSE, $cssClass=FALSE, $rows=1, $cols=1) {
            parent::__construct($id, $name, $cssClass);
            $this->setRows($rows);
            $this->setCols($cols);
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
            $sink->addToBuffer('<textarea rows='.$this->rows.' cols='.$this->cols.' '.parent::getAttributesAsString().'></textarea>'."\n");
        }


    }