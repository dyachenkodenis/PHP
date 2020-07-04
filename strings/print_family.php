<?php

//print()
print "Hello, World!";

//printf()
$number = 3;
$city = "Los Angeles";
printf("Hello %u %s", $number, $city);

//vprintf()
vprintf("Hello %u %s", array($number, $city));

//sprintf()
$test = sprintf("Hello %u %s", $number, $city);
echo $test;

//vsprintf()
echo vsprintf("Hello, Piter %u %s", array($number, $city));

//sscanf()
$test1 = "age:30 weight:60kg";
sscanf($test1, "age:%d weight:%g", $age, $weight);
var_dump($age, $weight);

//fprintf()
$file = fopen('../files/inc3.php', 'w');
echo fprintf($file, "Lorem ipsum dolor %u sit amet %s.", $number, $city);

//fscanf()
$file1 = fopen('../files/inc3.php', 'r');
while($userinfo = fscanf($file1, "%s\t%s\t%s\n")){
	list($name, $profession, $contrycode) = $userinfo;
	//...
	//print_r($file1);
}
fclose($file1);