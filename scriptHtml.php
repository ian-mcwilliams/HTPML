<?php


    require_once 'elementHtml.php';
    require_once 'elementIndexed.php';
    require_once 'elementText.php';
    require_once 'renderSink.php';
    require_once 'tagAnchor.php';
    require_once 'tagBody.php';
    require_once 'tagBold.php';
    require_once 'tagBreak.php';
    require_once 'tagComment.php';
    require_once 'tagDiv.php';
    require_once 'tagDoctype.php';
    require_once 'tagForm.php';
    require_once 'tagHead.php';
    require_once 'tagHeader.php';
    require_once 'tagHtml.php';
    require_once 'tagImage.php';
    require_once 'tagInput.php';
    require_once 'tagInputCheckbox.php';
    require_once 'tagInputDate.php';
    require_once 'tagInputPassword.php';
    require_once 'tagInputRadio.php';
    require_once 'tagInputSubmit.php';
    require_once 'tagInputText.php';
    require_once 'tagLabel.php';
    require_once 'tagLink.php';
    require_once 'tagListItem.php';
    require_once 'tagOption.php';
    require_once 'tagParagraph.php';
    require_once 'tagSelect.php';
    require_once 'tagScript.php';
    require_once 'tagScriptSourced.php';
    require_once 'tagTable.php';
    require_once 'tagTableData.php';
    require_once 'tagTableHeader.php';
    require_once 'tagTableRow.php';
    require_once 'tagTextarea.php';
    require_once 'tagTitle.php';
    require_once 'tagUnorderedList.php';
    
    class scriptHtml {
        private $sink;
        private $childElements = array();

        public function scriptHtml() {
            $this->sink = new RenderSink();
        }

        public function render() {
            echo $this->sink->getBuffer();
        }


    }

