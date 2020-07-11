<?php

/*ereg(), eregi(), ereg_replace(), eregi_replace(), split(), spliti(), sql_regcase() removed in php7

*/

//preg_match()
preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $test, PREG_OFFSET_CAPTURE);
print_r($test);

//explode()
$mycoffe = "Capuccino FlatWhite Espresso";
$coffe = explode(" ", $mycoffe);
echo $coffe[0];
echo $coffe[1];

//preg_split()
$test1 = preg_split("/[\s,]+/", "hupertext language,programming");
print_r($test1);

//preg_quote()
$test2 = '$40 for a g3/400';
$test2 = preg_quote($test2, '/');
echo $test2;  // returns \$40 for a g3\/400