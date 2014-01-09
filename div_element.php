<?php

	require_once 'wrapping_element.php';

	class DivElement extends WrappingElement {
		function DivElement($id, $name, $cssClass) {
			parent::__construct($id, $name, $cssClass);
		}
		
		public function render($sink) {
			$tag ='div'.parent::getAttributesAsString();
			parent::renderAll($sink, $tag);
		}
	}

