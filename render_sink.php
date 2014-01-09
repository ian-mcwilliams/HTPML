<?php

	class RenderSink {
		var $stringBuffer;
		
		function getBuffer() {
			return $this->stringBuffer;
		}
		
		function addToBuffer($text) {
			$this->stringBuffer.=$text;
		}
	}

