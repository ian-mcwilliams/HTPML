<?php
	
    require_once 'elementIndexed.php';

    abstract class ElementWrapping extends ElementIndexed {
        private $childElements = array();

        public function ElementWrapping($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);	
        }

        public function addChild($element) {
            array_push($this->childElements, $element);
        }

        protected function getChildElements() {
            return $this->childElements;
        }

        public function renderAll($sink, $tag, $text='') {
            $sink->addToBuffer('<'.$tag.parent::getAttributesAsString().'>'."\n");
            foreach ($this->getChildElements() as $childElement) {
                $childElement->render($sink);
            }
            if ($text != '') {
                $text .= "\n";
            }
            $sink->addToBuffer($text.'</'.$tag.'>'."\n");

        }


    }


