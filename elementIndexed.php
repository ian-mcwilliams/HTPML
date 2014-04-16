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
        
        public function add($children) {
            if (!is_array($children)) {
                $children = array($children);
            }
            $this->childElements = array_merge($this->childElements, $children);
        }

        protected function getChildElements() {
            return $this->childElements;
        }
        
        private function verifyChildObj($var) {
            if (is_object($var)) {
                return $var;
            } elseif (is_string($var)) {
                return new ElementText($var);
            } else {
                throw new Exception('Could not render non-object: '."\n\n".  var_dump($var));
            }
        }

        public function renderAll($sink, $tag, $single=FALSE) {
            if (substr($tag, 0, 8) != 'textarea') {
                $nL = "\n";
                $closeTag = $tag;
            } else {
                $closeTag = 'textarea';
                $nL = '';
            }
            switch ($single) {
                case TRUE:
                    $sink->addToBuffer('<'.$tag.  $this->getAttributesAsString().' />'.$nL);
                    break;
                case FALSE:
                    $sink->addToBuffer('<'.$tag.  $this->getAttributesAsString().'>'.$nL);
                    foreach ($this->getChildElements() as $childElement) {
                        $childObj = $this->verifyChildObj($childElement);
                        $childObj->render($sink);
                    }
                    $sink->addToBuffer('</'.$closeTag.'>'.$nL);
                    break;
            }

        }
	
    }

