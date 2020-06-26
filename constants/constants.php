<?php

//define()
define("CONSTANT", "Hello, World!");
echo CONSTANT;

define("ANIMALS", array(
	'cat',
	'dog',
	'panda'
));
echo ANIMALS[1];
print_r(ANIMALS);
print_r(__LINE__); //magic constants __LINE__
print_r(__DIR__); // magic constants __DIR__

//constant()
echo CONSTANT;
echo constant("CONSTANT");

//defined()
if(defined("CONSTANT")){
	echo "yes";
}else{
	echo "no";
}

//get_defined_constants()
echo "<pre>";
print_r(get_defined_constants(true));

