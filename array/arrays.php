<?php

$coffe = array("Cappuccino", "Espresso", "Flat White");
$price = array("$3", "$2", "$4");
$associative_arr = array("Cappuccino" => "$3", "Espresso" => "$2", "Flat White" => "$4", "Other Coffe" => "$4");
$num = array(1, 2, 3, 4);

//array()
echo "Coffe: ". $coffe[0] . ", ". $coffe[1]. ", ".$coffe[2];

//array_change_key_case()

print_r(array_change_key_case($associative_arr, CASE_UPPER));

//array_chunk()
print_r(array_chunk($coffe, 2));

//array_combine()
$test = array_combine($coffe, $price);
print_r($test);

//array_count_values()
print_r(array_count_values($coffe));

//array_fill_keys()
$test1 = array_fill_keys($coffe, 'new price');
print_r($test1);

//array_fill()
$test2 = array_fill(3, 4, 'price');
print_r($test2);

//array_filter()
function test($test3){
	return($test3);
}
print_r(array_filter($coffe, "test"));

//array_flip()
$result = array_flip($associative_arr);
print_r($result);

//array_key_exists()
if(array_key_exists("Cappuccino", $associative_arr))
{
	echo "Key exists";
}
else
{
	echo "Key does not exists";
}

//array_keys()
print_r(array_keys($associative_arr));

//array_map()
function myfunc_1($test3)
{
return($test3 * $test3);
}
print_r(array_map("myfunc_1", $num));

//array_merge()
print_r(array_merge($coffe, $price));

//array_merge_recursive()
print_r(array_merge_recursive($coffe, $price));

//array_pad()
print_r(array_pad($coffe, 4, "other coffe"));

//array_product()
echo(array_product($num));

//array_rand()
$random_case = array_rand($coffe, 3);
echo $coffe[$random_case[0]] . "<br />";
echo $coffe[$random_case[1]] . "<br />";
echo $coffe[$random_case[2]];

//array_reduce()
function myfunc_2($test4,$test5)
{
	return $test4 . "-" . $test5;
}
print_r(array_reduce($coffe, "myfunc_2"));

//array_search()
echo array_search("Flat White", $coffe);

//array_slice()
print_r(array_slice($associative_arr, 2));

//array_splice()
$test6 = array("Coffe 1" => "0", "Coffe 2" => "1");
$test7 = array("Other Coffe" => "1");
array_splice($test6, 0, 2, $test7);
print_r($test6);

//array_sum()
echo array_sum($num);

//array_unique()
print_r(array_unique($associative_arr));

//array_walk()
function myfunc_3($value,$key)
{
	echo "The key $key has the value $value <br />";
}
array_walk($associative_arr, "myfunc_3");

//array_walk_recursive()
function myfunc_4($value, $key)
{
	echo "The key $key has the value $value <br />";
}
$test8 = array($associative_arr, "One Coffe" => "?", "Two Coffe" => "?");
array_walk_recursive($test8, "myfunc_4");

//compact()
$result_1 = compact("num", "coffe", "price");
print_r($result_1);

//in_array()
if(in_array("Flat White", $coffe))
{
	echo "Match found";
}
else
{
	echo "Match not found";
}

//list()
list($a, $b, $c) = $coffe;
echo "One coffe = $a, Two coffe = $b, Three coffe = $c";

//range()
$number = range(1,3);
print_r($number);




