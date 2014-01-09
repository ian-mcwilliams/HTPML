<?php

	require_once 'html_element.php';

	abstract class InputElement extends HtmlElement {
			
		function InputElement($id, $name, $cssClass, $type) {
			parent::__construct($id, $name, $cssClass);
			parent::setAttribute("type", $type);
		}
		
		
		public function getValue() {
			return parent::getAttribute('value');
		}
		
		public function setValue($value) {
			$this->value = $value;
			parent::setAttribute('value', $value);
		}
	}

		