<?php

$a_rray = array('a', 'b');
$b_rray = array('c', 'd');
$c = array('e');

$z = array_merge($a_rray, $c, $b_rray);
echo var_dump($z);

//    require 'scriptHtml.php';
//    
//    
//    $sH = new ScriptHtml();
////    $text = $sH->createElement('text', array('somearraytext'));
////    $anchor = $sH->createElement('a', array('id' => 'testscriptanchorid', 'href' => '#'));
////    $anchor->addChild($text);
////    $sH->addChild($anchor);
//    
////    $sH->createChild('doctype');
////    $html = $sH->createElement('html', array('id'=>'testPageHtml', 'name'=>'testPageHtml', 'cssclass'=>'testPage'));
////    $head = $sH->createElement('head');
////    $body = $sH->createElement('body');
////    $html->addChild($head);
////    $html->addChild($body);
////    $sH->addChild($html);
////    $sH->render();
//    
//    $inputText = $sH->create('inputText', array('placeholder'=>'username'));
//    $inputPassword = $sH->create('inputPassword', array('placeholder'=>'password'));
//    $inputSubmit = $sH->create('inputSubmit', array('value'=>'submit'));
//    $inputForm = $sH->create('form', array('method'=>'get', 'action'=>'#'));
//    $inputForm->add(array($inputText, $sH->br(), $inputPassword, $sH->br(), $inputSubmit));
//    $sH->add($inputForm);
//    $sH->render();
    
    
    
    
    
    
    
    
    
    
    
    
//    
//    $tagBody = new TagBody('testPageBody', 'testPageBody', 'testPage');
//    $tagBreak = new TagBreak;
//
//    $tagInputText = new TagInputText('testid', 'testname', 'testcssclass');
//    $tagInputText->setPlaceholder('testValue');
//    $tagInputText->setMaxlength('5');
//    
//    $tagLabel = new TagLabel('testlabelid', 'testlabelname', 'testlabelcssclass');
//    $tagLabel->setFor('testinputpasswordid');
//    $tagLabelText = new ElementText('password label:');
//    $tagLabel->addChild($tagLabelText);
//    
//    $tagInputPassword = new TagInputPassword('testinputpasswordid', 'testinputpasswordname', 'testinputpasswordcssclass');
//    $tagInputCheckbox = new TagInputCheckbox('testinputcheckboxid', 'testinputcheckboxname', 'testinputcheckboxcssclass');
//    $tagInputDate = new TagInputDate('testinputdateid', 'testinputdatename', 'testinputdatecssclass');
//    $tagInputRadio = new TagInputRadio('testinputradioid', 'testinputradioname', 'testinputradiocssclass');
//    $tagInputSubmit = new TagInputSubmit('testinputsubmitid', 'testinputsubmitname', 'testinputsubmitcssclass');
//    $tagTextarea = new TagTextarea('testtextareaid', 'testtextareaname', 'testtextareacssclass');
//    $tagTextarea->setRows(10);
//    $tagTextarea->setCols(40);
//    $tagTextarea->setPlaceholder('testtextareaplaceholdertext');
//    
//    $tagAnchor = new TagAnchor('anchortestid', 'anchortestname', 'anchortestcssclass');
//    $tagAnchor->setHref('http://www.w3schools.com');
//    $tagAnchorText = new ElementText('Go to School');
//    $tagAnchor->addChild($tagAnchorText);
//    
//    $tagParagraph = new TagParagraph('paragraphtestid', 'paragraphtestname', 'paragraphtestcssclass');
//    $tagParagraphText = new ElementText('A test paragraph with test bold text');
//    $tagParagraph->addChild($tagParagraphText);
//    
//    $tagBold = new TagBold;
//    $tagBoldText = new ElementText('Some bold test text');
//    $tagBold->addChild($tagBoldText);
//    
//    $tagForm = new TagForm('formtestid', 'formtestname', 'formtestcssclass');
//    $tagForm->addChild($tagInputText);
//    $tagForm->addChild($tagLabel);
//    $tagForm->addChild($tagInputPassword);
//    $tagForm->addChild($tagInputCheckbox);
//    $tagForm->addChild($tagInputDate);
//    $tagForm->addChild($tagInputRadio);
//    $tagForm->addChild($tagInputSubmit);
//    $tagForm->addChild($tagTextarea);
//    
//    $tagComment = new TagComment('testcomment');
//    
//    $tagH1 = new TagHeader('testh1id', 'testh1name', 'testh1cssclass', 1);
//    $tagH1Text = new ElementText('test H1 text');
//    $tagH1->addChild($tagH1Text);
//    $tagH2 = new TagHeader('testh2id', 'testh2name', 'testh2cssclass', 2);
//    $tagH2Text = new ElementText('test H2 text');
//    $tagH2->addChild($tagH2Text);
//    $tagH3 = new TagHeader('testh3id', 'testh3name', 'testh3cssclass', 3);
//    $tagH3Text = new ElementText('test H3 text');
//    $tagH3->addChild($tagH3Text);
//    $tagH4 = new TagHeader('testh4id', 'testh4name', 'testh4cssclass', 4);
//    $tagH4Text = new ElementText('test H4 text');
//    $tagH4->addChild($tagH4Text);
//    $tagH5 = new TagHeader('testh5id', 'testh5name', 'testh5cssclass', 5);
//    $tagH5Text = new ElementText('test H5 text');
//    $tagH5->addChild($tagH5Text);
//    $tagH6 = new TagHeader('testh6id', 'testh6name', 'testh6cssclass', 6);
//    $tagH6Text = new ElementText('test H6 text');
//    $tagH6->addChild($tagH6Text);
//    
//    $tagImage = new TagImage('testimageid', 'testimagename', 'testimagecssclass');
//    $tagImage->setSource('http://www.boroguide.co.uk/images/borochat2.jpg');
//    
//    $tagLink = new TagLink;
//    $tagLink->setSource('testsourcelocation.php');
//    
//    $tagUnorderedList = new TagUnorderedList('testulid', 'testulname', 'testulcssclass');
//    $tagListItem1 = new TagListItem('testli1id', 'testli1name', 'testli1cssclass');
//    $tagListItem1Text = new ElementText('tagListItem1Text');
//    $tagListItem1->addChild($tagListItem1Text);
//    $tagListItem2 = new TagListItem('testli2id', 'testli2name', 'testli2cssclass');
//    $tagListItem2Text = new ElementText('tagListItem2Text');
//    $tagListItem2->addChild($tagListItem2Text);
//    $tagUnorderedList->addChild($tagListItem1);
//    $tagUnorderedList->addChild($tagListItem2);
//    
//    $tagSelect = new TagSelect('testselectid', 'testselectname', 'testselectcssclass');
//    $tagOption1 = new TagOption('tagoption1id', 'tagoption1name', 'tagoption1cssclass');
//    $tagOption1Text = new ElementText('tagOption1Text');
//    $tagOption1->addChild($tagOption1Text);
//    $tagOption2 = new TagOption('tagoption2id', 'tagoption2name', 'tagoption2cssclass');
//    $tagOption2Text = new ElementText('tagOption2Text');
//    $tagOption2->addChild($tagOption2Text);
//    $tagOption2->setSelected();
//    $tagSelect->addChild($tagOption1);
//    $tagSelect->addChild($tagOption2);
//    
//    $tagScript = new TagScript('testscriptid', 'testscriptname', 'testscriptcssclass');
//    $tagScriptText = new ElementText('document.write("testtagscripttext")');
//    $tagScript->addChild($tagScriptText);
//    
//    $tagScriptSourced = new TagScriptSourced('testscriptsourcedid', 'testscriptsourcedname', 'testscriptsourcedcssclass');
//    $tagScriptSourced->setSource('testJs.js');
//    
//    $tagTable = new TagTable('testtableid', 'testtablename', 'testtablecssclass');
//    $tagTableRow1 = new TagTableRow('testtablerow1id', 'testtablerow1name', 'testtablerow1cssclass');
//    $tagTableHeader1 = new TagTableHeader('testtableheader1id', 'testtableheader1name', 'testtableheader1cssclass');
//    $tagTableHeader1Text = new ElementText('testtableheader1text');
//    $tagTableHeader1->addChild($tagTableHeader1Text);
//    $tagTableRow1->addChild($tagTableHeader1);
//    $tagTableHeader2 = new TagTableHeader('testtableheader2id', 'testtableheader2name', 'testtableheader2cssclass');
//    $tagTableHeader2Text = new ElementText('testtableheader2text');
//    $tagTableHeader2->addChild($tagTableHeader2Text);
//    $tagTableRow1->addChild($tagTableHeader2);
//    $tagTable->addChild($tagTableRow1);
//    $tagTableRow2 = new TagTableRow('testtablerow2id', 'testtablerow2name', 'testtablerow2cssclass');
//    $tagTableRow2Data1 = new TagTableData('testtablerow2data1id', 'testtablerow2data1name', 'testtablerow2data1cssclass');
//    $tagTableRow2Data1Text = new ElementText('testtablerow2data1text');
//    $tagTableRow2Data1->addChild($tagTableRow2Data1Text);
//    $tagTableRow2->addChild($tagTableRow2Data1);
//    $tagTableRow2Data2 = new TagTableData('testtablerow2data2id', 'testtablerow2data2name', 'testtablerow2data2cssclass');
//    $tagTableRow2Data2Text = new ElementText('testtablerow2data2text');
//    $tagTableRow2Data2->addChild($tagTableRow2Data2Text);
//    $tagTableRow2->addChild($tagTableRow2Data2);
//    $tagTable->addChild($tagTableRow2);
//    $tagTableRow3 = new TagTableRow('testtablerow3id', 'testtablerow3name', 'testtablerow3cssclass');
//    $tagTableRow3Data1 = new TagTableData('testtablerow3data1id', 'testtablerow3data1name', 'testtablerow3data1cssclass');
//    $tagTableRow3Data1Text = new ElementText('testtablerow3data1text');
//    $tagTableRow3Data1->addChild($tagTableRow3Data1Text);
//    $tagTableRow3->addChild($tagTableRow3Data1);
//    $tagTableRow3Data2 = new TagTableData('testtablerow3data2id', 'testtablerow3data2name', 'testtablerow3data2cssclass');
//    $tagTableRow3Data2Text = new ElementText('testtablerow3data2text');
//    $tagTableRow3Data2->addChild($tagTableRow3Data2Text);
//    $tagTableRow3->addChild($tagTableRow3Data2);
//    $tagTable->addChild($tagTableRow3);
//    
//    $tagTitle = new TagTitle();
//    $tagTitleText = new ElementText('testtitletext');
//    $tagTitle->addChild($tagTitleText);
//    
//    $tagHead->addChild($tagTitle);
//    
//    
//    
//    
//    
//    $tagDiv = new TagDiv('divtestid', 'divtestname', 'divtestcssclass');
//    $tagDiv->addAttributeToClass('testClass1');
//    $tagDiv->addAttributeToClass('testClass2');
//    $tagDiv->unsetAttributeFromClass('testClass2');
//
//    $tagDiv->addChild($tagInputText);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagAnchor);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagParagraph);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagBold);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagForm);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagComment);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagH1);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagH2);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagH3);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagH4);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagH5);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagH6);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagImage);
//    $tagDiv->addChild($tagLink);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagUnorderedList);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagSelect);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagScript);
//    $tagDiv->addChild($tagScriptSourced);
//    $tagDiv->addChild($tagBreak);
//    $tagDiv->addChild($tagTable);
//    
//    
//    
//    $tagBody->addChild($tagDiv);
//    $tagHtml->addChild($tagHead);
//    $tagHtml->addChild($tagBody);
//    
//    $tagHtml->render($sink);
	
//    $tagHtml->addChild($tagHead);
