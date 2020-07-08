<?php

//preg_grep()
$test = ["Red", "Pink", "Green", "Blue"];
$result = preg_grep("/^g/i", $test); // g = Green
print_r($result);

//preg_match_all()
$test1 = "Lorem ipsum dolor sit amet.";
$pattern = "/m/i";
if(preg_match_all($pattern, $test1, $matches)){
	print_r($matches);
}

//preg_replace()
$test2 = 'Lorem ipsum dolor sit amet.';
$pattern1 = '/IPSUM/i';
echo preg_replace($pattern1, 'Hello, World!', $test2);

//preg_replace_callback()
function testFunc($matches){
	return $matches[0] . '(' . strlen($matches[0]) . ')';
}

$mytext = "Lorem ipsum dolor sit amet.";
$pattern = '/[a-z0-9\.]+/i';
$result = preg_replace_callback($pattern, 'testFunc', $mytext);
echo $result;


//preg_last_error()
$str_1 = "The regular expression is invalid.";
$pattern_1 = '/invalid/';
$match_1 = @preg_match($pattern_1, $str_1, $matches_1);
if($match_1 === false){
	// An error occured
	$err = preg_last_error();
	if($err == PREG_INTERNAL_ERROR){
		echo 'Invalid regular expression.';
	}
}else if($match_1){
	//A match was found
	echo $matches_1[0];
}else{
	//No matches were found
	echo 'No matches found';
}

//or preg_last_error() too
preg_match('/(?:\D+|<\d+>)*[!?]/', 'foobar foobar foobar');
if(preg_last_error() == PREG_BACKTRACK_LIMIT_ERROR){
	print 'Backtrack limit was exhausted!';
}

//preg_replace_callback_array()
$subject = 'CCCCCcc GgggGG';
preg_replace_callback_array(
	[
		'~[c]+~i' => function($match){
			echo strlen($match[0]), ' matches for "c" found',
			PHP_EOL;
		},
		'~[g]+~i' => function($match){
			echo strlen($match[0]), ' matches for "g" found',
			PHP_EOL;
		}
	],
	$subject
);

