<?php

	require_once 'input_text_element.php';
	require_once 'anchor_element.php';
	require_once 'div_element.php';
	require_once 'render_sink.php';
	
	$inputElement = new InputTextElement('testid', 'testname', 'testcssclass');
	$inputElement->setPlaceholder('testValue');
	$inputElement->setMaxlength('5');
	
	//echo '<br>*******'.$inputElement->getValue().'&&&&&&<br>';
	
	$anchorElement = new AnchorElement('anchortestid', 'anchortestname', 'anchortestcssclass');
	$anchorElement->setTextAndHref('Go to School', 'http://www.w3schools.com');
	
	$divElement = new DivElement('divtestid', 'divtestname', 'divtestcssclass');
    $divElement->addAttributeToClass('testClass1');
    $divElement->addAttributeToClass('testClass2');
    $divElement->removeAttributeFromClass('testClass2');
//echo var_dump($divElement->attributes);
	$divElement->addChild($inputElement);
	$divElement->addChild($anchorElement);
	$divElement->addChild($inputElement);
	
	
	$sink = new RenderSink();
	
	$divElement->render($sink);
	
	echo $sink->getBuffer();	
	
