<?php

//addcslashes()
echo addcslashes('foo[]', 'A..z'). "<br />";

//stripcslashes()
$test = addcslashes('hello', 'A..z');
echo $test . "<br />";
echo stripcslashes($test)."<br />";

//addslashes()
$test1 = "O'reilly";
echo addslashes($test1)."<br />";

//stripslashes()
$test2 = "O\'reilly";
echo stripslashes($test2)."<br />";

//htmlspecialchars()
$test3 = htmlspecialchars("<a href='test' >World!</a>", ENT_QUOTES);
echo $test3;

//htmlspecialchars_decode()
$test4 = "<p>this -&gt; &quot;</p>\n";
echo htmlspecialchars_decode($test4, ENT_NOQUOTES);

//htmlentities()
$test5 = "<p>Hello, <a href='test.php'>'Word'</a> and ...!</p>";
echo htmlentities($test5);

//html_entity_decode()
$test6 = "&lt;p&gt;Hello, &lt;a href='test.php'&gt;'Word'&lt;/a&gt; and ...!&lt;/p&gt;";
echo html_entity_decode($test6);

//get_html_translation_table()
var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));

//quotemeta()
$test7 = "Hello, World. (can you hear me?)";
echo quotemeta($test7);

//nl2br()
echo nl2br("Hello, \nWorld!");

//strip_tags()
$test8 = "<p>Hello, <br /><a href='test'>World</a>!</p><!-- comment -->";
echo strip_tags($test8);