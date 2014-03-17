<?php

    abstract class ElementHtml {
        	
        abstract protected function render($renderSink);
        
        protected function checkAttr(&$attrs, $ref) {
            if (isset($attrs[$ref])) {
                $value = $attrs[$ref];
                unset($attrs[$ref]);
                return $value;
            } else {
                return false;
            }
        }
        
    }

