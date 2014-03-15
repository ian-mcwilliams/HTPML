<?php

    abstract class ElementIndexed extends ElementHtml {
        private $childElements = array();
        protected $attributes = array();
        
        public function ElementIndexed($attrs) {
            foreach ($attrs as $key => $value) {
                $this->setAttribute($key, $value);
            }
        }
		
        public function setAttribute($key, $value) {
            if ($value !== FALSE) {
                if ($key == 'class') {
                    $this->attributes[$key] = array($value);
                } else {
                    $this->attributes[$key] = $value;
                }
            }
	}
        
        public function unsetAttribute($key) {
            unset($this->attributes[$key]);
        }

        public function addAttributeToClass($value) {
            array_push($this->attributes['class'], $value);
        }

        public function unsetAttributeFromClass($valueToUnset) {
            foreach ($this->attributes['class'] as $key => $value) {
                if ($value == $valueToUnset) {
                    unset($this->attributes['class'][$key]);
                    break;
                }
            }
        }
		
        protected function getAttribute($key) {
            return $this->attributes[$key];
        }
        
        public function setName($name) {
            $this->setAttribute('name', $name);
        }
        
        public function setId($id) {
            $this->setAttribute('id', $id);
        }
        
        public function setCssClass($cssClass) {
            $this->setAttribute('cssClass', $cssClass);
        }

        public function getName() {
            return $this->getAttribute('name');
        }

        public function getId() {
            return $this->getAttribute('id');
        }

        public function getCssClass() {
            return $this->getAttribute('class');
        }

        protected function getAttributesAsString() {
            $string = '';
            foreach ($this->attributes as $key => $value) {
                $string .= ' ' . $key . '="';
                if ($key == 'class') {
                    $fullValue = $this->getClassValuesAsString();
                    $string.=$fullValue.'"';
                } else {
                    $string.=$value.'"';
                }
            }
            return $string;
        }

        private function getClassValuesAsString() {
            $string = '';
            foreach ($this->attributes['class'] as $key => $value) {
                if ($value != '') {
                    $string.=$value;
                }
                if ($key != end($this->attributes['class'])) {
                    $string.=' ';
                }
            }
            return $string;
        }
        
        public function addChild($element) {
            array_push($this->childElements, $element);
        }

        protected function getChildElements() {
            return $this->childElements;
        }

        public function renderAll($sink, $tag, $single=FALSE) {
            switch ($single) {
                case TRUE:
                    $sink->addToBuffer('<'.$tag.  $this->getAttributesAsString().' />'."\n");
                    break;
                case FALSE:
                    $sink->addToBuffer('<'.$tag.  $this->getAttributesAsString().'>'."\n");
                    foreach ($this->getChildElements() as $childElement) {
                        $childElement->render($sink);
                    }
                    $sink->addToBuffer('</'.$tag.'>'."\n");    
                    break;
            }

        }
	
    }

