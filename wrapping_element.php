<?php
	
	require_once 'html_element.php';
	
	abstract class WrappingElement extends HtmlElement {
		var $childElements = array();
		
		function WrappingElement($id, $name, $cssClass) {
			parent::__construct($id, $name, $cssClass);	
		}
		
		public function addChild($element) {
		
			array_push($this->childElements, $element);

		}
		
		protected function getChildElements() {
			return $this->childElements;
		}
		
		public function renderAll($sink, $tag) {
			$sink->addToBuffer('<'.$tag.'>');
			$childElements = $this->getChildElements();
			foreach ($childElements as $childElement) {
				$childElement->render($sink);
			}
			$sink->addToBuffer('</'.$tag.'>');
			
		}
		
		
	}


