<?php

$coffe_1 = array("Cappuccino", "Espresso", "Flat White");
$coffe_2 = array("Espresso", "Cappuccino", "Other Coffe");
$coffe_arr_1 = array("Cappuccino" => "$3", "Espresso" => "$2", "Flat White" => "$4");
$coffe_arr_2 = array("Espresso" => "$2", "Cappuccino" => "$3",  "Other Coffe" => "$4");

function myfunc($a, $b)
{
	if($a === $b)
	{
		return 0;
	}
	return ($a<$b) ? 1 : -1;
}

function echobr()
{
	echo "<br />";
	return;
}


//array_diff()
$result = array_diff($coffe_1, $coffe_2);
print_r($result);
echobr();

//array_intersect()
$result_1 =array_intersect($coffe_1, $coffe_2);
print_r($result_1);
echobr();

//array_udiff()
$result_2 = array_udiff($coffe_1, $coffe_2, 'myfunc');
print_r($result_2);
echobr();

//array_uintersect()
$result_3 = array_uintersect($coffe_1, $coffe_2, 'myfunc');
print_r($result_3);
echobr();

//array_?_key()
$result_4 = array_diff_key($coffe_arr_1, $coffe_arr_2);
print_r($result_4); // diff
echobr();

$result_5 = array_intersect_key($coffe_arr_1, $coffe_arr_2);
print_r($result_5); // intersect
echobr();

//array_?_ukey()
$result_6 = array_diff_ukey($coffe_arr_1, $coffe_arr_2, 'myfunc');
print_r($result_6); // diff
echobr();

$result_7 = array_intersect_ukey($coffe_arr_1, $coffe_arr_2, 'myfunc');
print_r($result_7); // intersect
echobr();

//array_?_assoc()
$result_8 = array_diff_assoc($coffe_arr_1, $coffe_arr_2);
print_r($result_8); //diff
echobr();

$result_9 = array_intersect_assoc($coffe_arr_1, $coffe_arr_2);
print_r($result_9);  //intersect
echobr();

//array_?_uassoc()
$result_10 = array_diff_uassoc($coffe_arr_1, $coffe_arr_2, 'myfunc');
print_r($result_10); //diff
echobr();

$result_11 = array_intersect_uassoc($coffe_arr_1, $coffe_arr_2, 'myfunc');
print_r($result_11); //intersect
echobr();

