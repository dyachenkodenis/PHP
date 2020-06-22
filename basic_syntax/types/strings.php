<?php 

$my_str = "my_str";
echo "<br />" . 'one text and c:\*.*? \n $my_str'; // single quoted
echo "<br />" . "two text \n and c:\*.*? \n $my_str"; // double quoted

echo "<br />"; // html

$my_str2 = <<<EOD
my_str2  
test EOD 
test text
EOD;

echo $my_str2;

echo "<br />"; // html

class test_string{
	
	function test_string_func(){
		$one = 'TEST_STRING 1';
		$two = 'TEST_STRING 2';
		return($two);
	}
}
$test_string = new test_string();


echo $test_string->test_string_func();

