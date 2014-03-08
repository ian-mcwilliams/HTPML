<?php

require 'elementHtml.php';

class ElementText extends ElementHtml {
    private $children = array();

    public function ElementText($text) {
        $this->addChildren($text);
    }
    
    public function addChildren($children, $index=-1) {
        if ($index == -1) {
            array_push($this->children, $children);
        } else {
            array_splice($this->children, $index, 0, $children);
        }
    }
    
    public function getChildren() {
        return $this->children;
    }
    
    public function render($sink) {
        foreach ($this->children as $child) {
            if (is_string($child)) {
                $sink->addToBuffer($child."\n");
            } else {
                $child->render($sink);
            }
        }
    }
    
    
}

