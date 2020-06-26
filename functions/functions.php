<?php
//function()
function hello($name){	
	echo "Hello, ". $name . "!";
}
hello("Denis");

//function_exists()
if(function_exists('hello')){
	echo "yes";
}else{
	echo "no";
}

//get_defined_functions()
echo "<pre>";
$arr_func = get_defined_functions($exclude_disabled = false);
print_r($arr_func);

//call_user_func()
function my_name($name){
	echo "My name " . $name ."!";
}
call_user_func("my_name", "Den");

//is_callable()
function my_car(){
}
$my_car = 'my_car';
var_dump(is_callable($my_car, true, $callablename));
echo $callablename;