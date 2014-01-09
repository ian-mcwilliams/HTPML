<?php 
	
	require_once 'input_element.php';

	class InputPasswordElement extends InputElement {
		public function InputPasswordElement($id, $name, $cssClass) {
			parent::__construct($id, $name, $cssClass, "text");
		}
		
		public function setMaxlength($max) {
			parent::setAttribute("maxlength", $max);
		}

		function render($renderSink) {
			$renderSink->addToBuffer('<input type="text" value="'.parent::getValue().'"/>');
		}


	}


