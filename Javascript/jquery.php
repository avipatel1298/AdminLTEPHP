<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src = "event.js"></script>
<body>
<h3>Button click event</h3>
<p>Hello world </p>
<button>Click On Me </button>  

<h3>P tag hide - this click event</h3>  
<p class="p-tag"> hello  how you day going</p>

<h3>When a user clicks on a button, the element with id="test" will be hidden:</h3>
<p>This is a paragraph.</p>
<p id="test">This is another paragraph.</p>
<button>Click me</button>

<h3>The function is executed when the user double-clicks on the HTML element:</h3>
<p>If you double-click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>

<h3>The function is executed when the mouse pointer enters the HTML element:</h3>
<p id="p1">Enter this paragraph.</p>

<h3>The function is executed when the mouse pointer leaves the HTML element:</h3>
<p id="demo">This is a paragraph.</p>

<h3>The function is executed, when the left, middle or right mouse button is pressed down, while the mouse is over the HTML element:</h3>
<p id="pointerdown">This is a pointer down </p>

<h3>The function is executed, when the left, middle or right mouse button is released, while the mouse is over the HTML element:</h3>
<p id="pointerup">This is Pointerup</p>

<h3>The first function is executed when the mouse enters the HTML element, and the second function is executed when the mouse leaves the HTML element:</h3>
<p id="pointerhover">when pointer hover html element </p>

<h3>The on() method attaches one or more event handlers for the selected elements.
Attach a click event to a <p> element:</h3>
<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>

<h3>With jQuery, you can hide and show HTML elements with the hide() and show() methods:</h3>
<p id="p_test">If you click on the "Hide" button, I will disappear.</p>
<button id="hide">Hide</button>
<button id="show">Show</button>

<h3>The optional speed parameter specifies the speed of the hiding/showing, and can take the following values: "slow", "fast", or milliseconds.</h3>
<button>Hide</button>
<p id="p_test">This is a paragraph with little content.</p>
<p id="p_test">This is another small paragraph.</p>

<h3>You can also toggle between hiding and showing an element with the toggle() method.</h3>
<button>Toggle between hiding and showing the paragraphs</button>
<p id="p_toggle">This is a paragraph with little content.</p>
<p id="p_toggle">This is another small paragraph.</p>