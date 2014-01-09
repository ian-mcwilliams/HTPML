<?php
	
    require_once 'html_element.php';

    class AnchorElement extends HtmlElement {

        private $text;

        function AnchorElement($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        function setTextAndHref($text, $hrf) {
            $this->text = $text;
            parent::setAttribute("href", $hrf);
        }

        function render($renderSink) {
            $renderSink->addToBuffer('<a'.parent::getAttributesAsString().'>'.$this->text.'</a>');
        }


    }

