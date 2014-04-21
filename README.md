HTPML

Write HTML in your PHP code without messy yucky echo (retch!) commands.

example:

require_once '../HTPML.php';
$hP = new HTPML();

$cssLink = $hP->gen('link', 'href=>main.css');
$head = $hP->gen('head', NULL, $cssLink);
$paragraph = $hP->gen('p', 'class=>mainText');
$div = $hP->gen('div', 'name=>mainDiv&&id=>mainDiv&&class=>mainDiv', $paragraph);
$body = $hP->gen('body', NULL, $div);
$html = $hP->gen('html', NULL, array($head, $body));

$hP->add($html);
echo $hP->render();

OK, it was a lie - you still need _one_ echo!

Add elements as children to each other, program html from inside out:

Build the elements required for the document head
Build the head and attach the required elements

Build a method for the form;
Build a div for the form to go in and append the form
Build other divs etc as required
Build the main document body and append the divs

Build the html tag and append the head and body

It's easier than learning your ABCs.

Special cases:

A variety of html elements don't fit in the normal flow:

Text

There's a special class for text, to address:

Having text as a child of tags, the <p> and <b> tags for example
Having a complex interaction between text and tags, eg <p>Here is some <b>bold</b> text!</p>

Each text element is an array which accepts strings and tag objects
As the tag objects can have their own children as normal, this can be used at any level as needed

Comment

Comments are raised as tags and require a text object as a child to just pop in some text