<?php 
	
	require_once 'input_element.php';

	class InputTextElement extends InputElement {
		public function TextInputElement($id, $name, $cssClass) {
			parent::__construct($id, $name, $cssClass, "text");
		}
		
		public function setMaxlength($max) {
			parent::setAttribute("maxlength", $max);
		}
		
		public function setMax($max) {
			parent::setAttribute("max", $max);
		}
		
		public function setPlaceholder($pH) {
			parent::setAttribute("placeholder", $pH);
		}

		function render($renderSink) {
			$renderSink->addToBuffer('<input'.parent::getAttributesAsString().'/>');
		}


	}

