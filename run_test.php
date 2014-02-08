<?php

    require 'scriptHtml.php';
        
    $sink = new RenderSink();
    
    $i = 0
            
    $i = 1
    
    echo var_dump($sink);
    
    /*$tagDoctype = new TagDoctype();
    $tagDoctype->render($sink);
    
    $tagHtml = new TagHtml('testPageHtml', 'testPageHtml', 'testPage');
    $tagHead = new TagHead('testPageHead', 'testPageHead', 'testPage');
    $tagHtml->addChild($tagHead);
    
    $tagBody = new TagBody('testPageBody', 'testPageBody', 'testPage');

    $tagInputText = new TagInputText('testid', 'testname', 'testcssclass');
    $tagInputText->setPlaceholder('testValue');
    $tagInputText->setMaxlength('5');
    
    $tagAnchor = new TagAnchor('anchortestid', 'anchortestname', 'anchortestcssclass');
    $tagAnchor->setHref('http://www.w3schools.com');
    $tagAnchor->setText('Go to School');
    
    $tagDiv = new TagDiv('divtestid', 'divtestname', 'divtestcssclass');
    $tagDiv->addAttributeToClass('testClass1');
    $tagDiv->addAttributeToClass('testClass2');
    $tagDiv->removeAttributeFromClass('testClass2');

    $tagDiv->addChild($tagInputText);
    $tagDiv->addChild($tagAnchor);
    $tagBody->addChild($tagDiv);
    $tagHtml->addChild($tagBody);
    
    $tagHtml->render($sink);

    echo $sink->getBuffer();	
	*/
