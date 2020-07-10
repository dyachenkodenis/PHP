<?php

$coffe = array("Cappuccino", "Espresso", "Flat White");
$price = array("$3", "$2", "$4");
$associative_arr = array("Cappuccino" => "$3", "Espresso" => "$2", "Flat White" => "$4", "Other Coffe" => "$4");
$num = array(1, 2, 3, 4);


//array_pop()
$test = array_pop($coffe);
print_r($test);

//array_push()
array_push($coffe, "one coffe", "two coffe");
print_r($coffe);

//array_shift()
$test1 = array_shift($associative_arr);
print_r($test1);

//array_unshift()
array_unshift($coffe, "three coffe");
print_r($coffe);

//count()
echo count($coffe);

//current()
echo current($coffe);

//each()
print_r(each($coffe));/* This function has been deprecated as of php 7.2.0. Relying on this function is highly discouraged */

//end()
echo current($coffe);
echo end($coffe);

//key()
echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit.". key($coffe);

//next()
echo next($coffe);

//prev()
echo current($num);
echo next($num);
echo prev($num);

//reset()
echo reset($num);



