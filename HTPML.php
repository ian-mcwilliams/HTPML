<?php

    require_once 'element.php';
    require_once 'renderSink.php';

    class HTPML {
        private $sink;
        private $childElements = array();

        public function HTPML($elements=array()) {
            $this->sink = new RenderSink();
            foreach ($elements as $element) {
                $this->addChild($element);
            }
        }
        
        public function createChild($tag, $attrs=array()) {
            $this->addChild($this->gen($tag, $attrs));
        }
        
        public function gen($tag, $attrs=NULL, $children=NULL) {
            if (is_null($attrs)) {
                $attrs = array();
            }
            if (is_string($attrs) && $tag != 'text') {
                $attrs = $this->genAttrsArr($attrs);
            }
            $element = new Element($tag, $attrs);
            if (!is_null($children)) {
                $element->add($children);
            }
            return $element;
        }
        
        private function genAttrsArr($attrsStr) {
            $attrsArr = array();
            $splitStr = explode('&&', $attrsStr);
            foreach ($splitStr as $str) {
                $splitAttr = explode('=>', $str);
                $attrsArr[$splitAttr[0]] = $splitAttr[1];
            }
            return $attrsArr;
        }
        
        public function add($children) {
            if (!is_array($children)) {
                $children = array($children);
            }
            $this->childElements = array_merge($this->childElements, $children);
        }
        
        public function getChildren() {
            return $this->childElements;
        }

        public function render() {
            foreach ($this->childElements as $childElement) {
                $childElement->render($this->sink);
            }
            return $this->sink->getBuffer();
        }
        
        public function getBr() {
            return $this->gen('br');
        }
        
        public function addBr($param) {
            $this->addChild($this->getBr());
        }
    }


    
