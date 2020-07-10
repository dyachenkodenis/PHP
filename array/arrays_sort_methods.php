<?php

$coffe = array("Cappuccino", "Espresso", "Flat White");
$price = array("$3", "$2", "$4");
$associative_arr = array("Cappuccino" => "$3", "Espresso" => "$2", "Flat White" => "$4", "Other Coffe" => "$4");
$num = array(1, 2, 3, 4);


//array_multisort()
array_multisort($price);
print_r($price);

//array_reverse()
print_r(array_reverse($associative_arr));

//asort()
asort($associative_arr);
foreach($associative_arr as $key => $value)
{
	echo "Key: " . $key . "=" . "Value: " .$value . "<br />";
}

//ksort()
ksort($associative_arr);
foreach($associative_arr as $key1 => $value1)
{
	echo "Key : $key1 = Value : $value1 <br />";
}

//krsort()
krsort($associative_arr);
foreach($associative_arr as $key2 => $value2)
{
	echo "Key : $key2 = Value : $value2 <br />";
}

//natsort()
$test_arr = array("test", "Test", "mytest", "Mytest");
sort($test_arr);
echo "Standart sorting:";
print_r($test_arr);
natsort($test_arr);
echo "Natural order: ";
print_r($test_arr);

//natcasesort()
$test_arr1 = array("test", "Test", "mytest", "Mytest");
natcasesort($test_arr);
print_r($test_arr);

//rsort()
rsort($coffe);
$v_coffe = count($coffe);
for($x = 0; $x < $v_coffe; $x ++)
{
	echo $coffe[$x]."<br />";
} 

//shuffle()
shuffle($coffe);
print_r($coffe);

//sort()
sort($coffe);
$v_coffe1 = count($coffe);
for($x = 0; $x < $v_coffe1; $x ++)
{
	echo $coffe[$x]."<br />";
}

//usort()
function myfunc($associative_arr, $b)
{
	if($associative_arr == $b) return 0;
	return($associative_arr < $b) ? - 1 : 1;
}
usort($associative_arr, "myfunc");
foreach($associative_arr as $key3=>$value3)
   {
   echo "Key=" . $key3 . ", Value=" . $value3;
   echo "<br>";
   }

//uksort()
function myfunc_1($associative_arr, $b)
{
	if($associative_arr == $b) return 0;
	return($associative_arr < $b) ? - 1 : 1;
}
uksort($associative_arr, "myfunc_1");
foreach($associative_arr as $key4=>$value4)
   {
   echo "Key=" . $key4 . ", Value=" . $value4;
   echo "<br>";
   }


//uasort()
function myfunc_2($associative_arr, $b)
{
	if($associative_arr == $b) return 0;
	return($associative_arr < $b) ? - 1 : 1;
}
uasort($associative_arr, "myfunc_2");
foreach($associative_arr as $key5=>$value5)
   {
   echo "Key=" . $key5 . ", Value=" . $value5;
   echo "<br>";
   }

