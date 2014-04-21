<h1>HTPML</h1>


Write HTML in your PHP code without messy yucky echo (retch!) commands.

For example:

...
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
...

OK, it was a lie - you still need _one_ echo!


<h3>Structure</h3>

Add elements as children to each other, program html from inside out:

<ul>
<li>Build the elements required for the document head</li>
<li>Build the head and attach the required elements</li>

<li>Build a method for the form;</li>
<li>Build a div for the form to go in and append the form</li>
<li>Build other divs etc as required</li>
<li>Build the main document body and append the divs</li>

<li>Build the html tag and append the head and body</li>
</ul>

It's easier than learning your ABCs.


<h3>Special cases</h3>

A variety of html elements don't fit in the normal flow:


<h4>Text</h4>

There's a special class for text, to address:

Having text as a child of tags, the &lt;p&gt; and &lt;b&gt; tags for example

Having a complex interaction between text and tags, eg &lt;p&gt;<p>Here is some &lt;b&gt;<b>bold</b>&lt;/b&gt; text!</p>&lt;/p&gt;


Each text element is an array which accepts strings and tag objects

As the tag objects can have their own children as normal, this can be used at any level as needed


<h4>Comment</h4>

Comments are raised as tags and require a text object as a child to just pop in some text