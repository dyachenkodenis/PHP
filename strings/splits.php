<?php

//chunk_split()
$test = "Hello, World!";
echo chunk_split($test , 1, "=");

//str_split()
print_r(str_split("Hello"));

//explode()
$test1 = "Lorem ipsum dolor sit amet.";
print_r(explode(" ", $test1));

//implode()
$test2 = array('Lorem', 'ipsum', 'dolor', 'sit', 'amet', '.');
print_r(implode(" ", $test2));

//strtok()
$test3 = "Lorem ipsum dolor sit amet.";
$token = strtok($test3, " ");
while($token !== false){
	echo $token."<br />";
	$token = strtok(" ");
}