<?php


    class ScriptHtml {
        private $sink;
        private $childElements = array();

        public function ScriptHtml($elements=array()) {
            require_once 'elementHtml.php';
            require_once 'elementIndexed.php';
            require_once 'renderSink.php';
            require_once 'tagInput.php';
            $this->sink = new RenderSink();
            foreach ($elements as $element) {
                $this->addChild($element);
            }
        }
        
        public function createChild($tag, $attrs=array()) {
            $this->addChild($this->create($tag, $attrs));
        }
        
        public function create($tag, $attrs=array(), $children=null) {
            $element = $this->generateElement($tag, $attrs);
            if (!is_null($children)) {
                $element->add($children);
            }
            return $element;
        }
        
        public function add($children) {
            if (!is_array($children)) {
                $children = array($children);
            }
            $this->childElements = array_merge($this->childElements, $children);
        }
        
        public function getChildren() {
            return $this->childElements;
        }

        public function render() {
            foreach ($this->childElements as $childElement) {
                $childElement->render($this->sink);
            }
            return $this->sink->getBuffer();
        }
        
        public function getBr() {
            return $this->create('br');
        }
        
        public function addBr($param) {
            $this->addChild($this->getBr());
        }
        
        private function generateElement($tag, $attrs) {
            switch ($tag) {
                case 'text':
                    require_once 'elementText.php';
                    return new ElementText($attrs);
                case 'a':
                    require_once 'tagAnchor.php';
                    return new TagAnchor($attrs);
                case 'body':
                    require_once 'tagBody.php';
                    return new TagBody($attrs);
                case 'b':
                    require_once 'tagBold.php';
                    return new TagBold($attrs);
                case 'br':
                    require_once 'tagBreak.php';
                    return new TagBreak();
                case 'comment':
                    require_once 'tagComment.php';
                    return new TagComment($attrs);
                case 'div':
                    require_once 'tagDiv.php';
                    return new TagDiv($attrs);
                case 'doctype':
                    require_once 'tagDoctype.php';
                    return new TagDoctype();
                case 'form':
                    require_once 'tagForm.php';
                    return new TagForm($attrs);
                case 'head':
                    require_once 'tagHead.php';
                    return new TagHead($attrs);
                case 'header':
                    require_once 'tagHeader.php';
                    return new TagHeader($attrs);
                case 'html':
                    require_once 'tagHtml.php';
                    return new TagHtml($attrs);
                case 'image':
                    require_once 'tagImage.php';
                    return new TagImage($attrs);
                case 'inputCheckbox':
                    require_once 'tagInputCheckbox.php';
                    return new TagInputCheckbox($attrs);
                case 'inputDate':
                    require_once 'tagInputDate.php';
                    return new TagInputDate($attrs);
                case 'inputHidden':
                    require_once 'tagInputHidden.php';
                    return new TagInputHidden($attrs);
                case 'inputPassword':
                    require_once 'tagInputPassword.php';
                    return new TagInputPassword($attrs);
                case 'inputRadio':
                    require_once 'tagInputRadio.php';
                    return new TagInputRadio($attrs);
                case 'inputSubmit':
                    require_once 'tagInputSubmit.php';
                    return new TagInputSubmit($attrs);
                case 'inputText':
                    require_once 'tagInputText.php';
                    return new TagInputText($attrs);
                case 'label':
                    require_once 'tagLabel.php';
                    return new TagLabel($attrs);
                case 'link':
                    require_once 'tagLink.php';
                    return new TagLink($attrs);
                case 'li':
                    require_once 'tagListItem.php';
                    return new TagListItem($attrs);
                case 'option':
                    require_once 'tagOption.php';
                    return new TagOption($attrs);
                case 'p':
                    require_once 'tagParagraph.php';
                    return new TagParagraph($attrs);
                case 'select':
                    require_once 'tagSelect.php';
                    return new TagSelect($attrs);
                case 'script':
                    require_once 'tagScript.php';
                    return new TagScript($attrs);
                case 'sourcedscript':
                    require_once 'tagScriptSourced.php';
                    return new TagScriptSourced($attrs);
                case 'table':
                    require_once 'tagTable.php';
                    return new TagTable($attrs);
                case 'td':
                    require_once 'tagTableData.php';
                    return new TagTableData($attrs);
                case 'th':
                    require_once 'tagTableHeader.php';
                    return new TagTableHeader($attrs);
                case 'tr':
                    require_once 'tagTableRow.php';
                    return new TagTableRow($attrs);
                case 'textarea':
                    require_once 'tagTextarea.php';
                    return new TagTextarea($attrs);
                case 'title':
                    require_once 'tagTitle.php';
                    return new TagTitle($attrs);
                case 'ul':
                    require_once 'tagUnorderedList.php';
                    return new TagUnorderedList($attrs);
            }
        }


    }


    
