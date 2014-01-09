<?php

    abstract class HtmlElement {
        var $attributes = array();
		
        abstract protected function render($renderSink);
        
        
        public function HtmlElement($id, $name, $class) {
            $this->setAttribute('name', $name);
            $this->setAttribute('id', $id);
            $this->setAttribute('class', $class);
        }
		
        public function setAttribute($key, $value) {
            if ($key == 'class') {
                $this->attributes[$key] = array($value);
            } else {
                $this->attributes[$key] = $value;
            }
	}

        public function addAttributeToClass($value) {
            array_push($this->attributes['class'], $value);
        }

        public function removeAttributeFromClass($valueToRemove) {
            foreach ($this->attributes['class'] as $key => $value) {
                if ($value == $valueToRemove) {
                    $this->attributes['class'][$key] = ''; //TODO: look up how to remove array elements
                    break;
                }
            }
        }
		
        protected function getAttribute($key) {
            return $this->attributes[$key];
        }

        public function getName() {
            return $name;
        }

        public function getId() {
            return $id;
        }

        public function getCssClass() {
            return $class;
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
            $i = 0;
            foreach ($this->attributes['class'] as $key => $value) {
                if ($value != '') {
                    $string.=$value;
                }
                if ($i < count($this->attributes['class'])) {
                    $string.=' ';
                }
                $i++;
            }
            return $string;
        }
	
    }

