<?php

class ElementText extends ElementHtml {
    private $children = array();

    public function ElementText($input) {
        $this->add($input);
    }
    
    public function add($children, $index=-1) {
        if ($index == -1) {
            if (!is_array($children)) {
                $children = array($children);
            }
            $this->children = array_merge($this->children, $children);
        } else {
            $this->children = array_splice($this->children, $index, 0, $children);
        }
    }
    
    public function getChildren() {
        return $this->children;
    }
    
    public function render($sink) {
        foreach ($this->children as $child) {
            if (is_string($child)) {
                $sink->addToBuffer($child);
            } else {
                $child->render($sink);
            }
        }
    }
    
    
}

