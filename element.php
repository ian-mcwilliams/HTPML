<?php

    class Element {
        private $childElements = array();
        protected $attributes = array();
        
        public function Element($tag, $attrs) {
            if ($tag == 'text') {
                $attrs = array('text' => $attrs);
            }
            $this->setTag($tag);
            if ($tag == 'link') {
                $attrs['rel'] = 'stylesheet';
                $attrs['type'] = 'text/css';
            }
            foreach ($attrs as $key => $value) {
                $this->setAttribute($key, $value);
            }
        }

        public function render($sink) {
            $this->renderAll($sink, $this->getTag());
        }
        
        public function getTag() {
            return $this->tag;
        }
        
        private function setTag($tag) {
            $this->tag = $tag;
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

        protected function getAttributesAsString($allQuotes=TRUE) {
            $string = '';
            foreach ($this->attributes as $key => $value) {
                $string .= ' '.$key.'=';
                if ($key == 'class') {
                    $string .= '"';
                    $fullValue = $this->getClassValuesAsString();
                    $string .= $fullValue.'"';
                } else {
                    if ($allQuotes || $key != 'rows' && $key != 'cols') {
                        $value = '"'.$value.'"';
                    }
                    $string.=$value;
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
            $flatChildrenArr = $this->flattenArrTree($children);
            foreach ($flatChildrenArr as $child) {
                $hP = new HTPML;
                if (is_string($child)) {
                    $element = $hP->gen('text', $child);
                } else {
                    $element = $child;
                }
                $this->childElements[] = $element;
            }
        }
        
        private function flattenArrTree($children) {
            $thisArr = array();
            if (is_array($children)) {
                foreach ($children as $child) {
                    $thisArr = array_merge($thisArr, $this->flattenArrTree($child));
                }
            } else {
                $thisArr[] = $children;
            }
            return $thisArr;
        }

        protected function getChildElements() {
            return $this->childElements;
        }
        
        private function verifyChildObj($var) {
            if (is_object($var)) {
                return $var;
            } else {
                throw new Exception("Could not render non-object:\n\n".var_dump($var));
            }
        }
        
        private function inSingleTagArr($tag) {
            $singleTagArr = array(
                'img',
                'input',
                'link',
                'br'
            );
            return in_array($tag, $singleTagArr);
        }

        public function renderAll($sink, $tag) {
            if ($tag != 'textarea') {
                $nL = "\n";
                $allQuotes = FALSE;
            } else {
                $nL = '';
                $allQuotes = TRUE;
            }
            $this->executeRender($sink, $tag, $nL, $allQuotes);
        }
        
        private function renderChildren($sink) {
            foreach ($this->getChildElements() as $childElement) {
                $childObj = $this->verifyChildObj($childElement);
                $childObj->render($sink);
            }
        }
        
        private function executeRender($sink, $tag, $nL, $allQuotes) {
            switch ($tag) {
                case $this->inSingleTagArr($tag):
                    $sink->addToBuffer('<'.$tag.  $this->getAttributesAsString().' />'.$nL);
                    break;
                case 'comment':
                    $sink->addToBuffer('<!-- '.$this->renderChildren($sink).' -->'."\n");
                    break;
                case 'doctype':
                    $sink->addToBuffer('<!DOCTYPE HTML>'."\n");
                    break;
                case 'text':
                    $sink->addToBuffer($this->getAttribute('text'));
                    break;
                default:
                    $sink->addToBuffer('<'.$tag.  $this->getAttributesAsString($allQuotes).'>'.$nL);
                    $this->renderChildren($sink);
                    $sink->addToBuffer('</'.$tag.'>'.$nL);
            }    
        }
    }

