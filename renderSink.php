<?php

    class RenderSink {
        var $stringBuffer;

        public function getBuffer() {
            return $this->stringBuffer;
        }

        public function addToBuffer($text) {
            $this->stringBuffer.=$text;
        }
    }

