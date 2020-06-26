<?php
//Data type
var_dump(is_bool(true)); //boolean

var_dump(is_int(23)); /*integer (is_integer and is_long are aliases of the is_int)*/

var_dump(is_float(2.3)); /* float or double (is_double and is_real are aliases of the is_float)*/

var_dump(is_string("Hello, World!")); // string

var_dump(is_array($coffe_ar = array('Cappuccino', 'Espresso', 'Flat white'))); // array

/* Class coffe*/
class coffe{
	function my_coffe(){
		$coffe_1 = "Cappuccino";
	}
}
$coffe = new coffe;
$coffe->my_coffe();
var_dump(is_object($coffe)); // object

$resource = fopen('https://google.com/', 'r');
var_dump(is_resource($resource)); //resource

$coffe = null;
var_dump(is_null($coffe));

/* is_scalar : Scalar variables are those containing an integer, float, string or boolean. Types array, object, resource are not scalar. */
var_dump(is_scalar(23)); //integer
var_dump(is_scalar(2.3)); //float
var_dump(is_scalar("Hello, World!")); //string
var_dump(is_scalar(false)); //boolean

/* is_numeric : is_float or is_int*/
var_dump(is_numeric(23)); //integer
var_dump(is_numeric(2.3)); //float

//floatval() or doubleval()
$num0 = '123.45The'; //output 123.45
$num1 = '12345The'; //output 12345
$num2 = 'The12345'; //output 0
echo floatval($num0);
echo floatval($num1);
echo floatval($num2);

//intval()
$num3 = '123'; //output 123
$num4 = '3.4'; //output 3
$num5 = 'The123'; //output 0
echo intval($num3);
echo intval($num4);
echo intval($num5);

//strval()
$str0 = 'Hello, World!';
echo strval($str0);

//get_defined_vars()
$coffe_ar = array('Cappuccino', 'Espresso', 'Flat white');
$arr = get_defined_vars();
print_r($arr); // output all variables

//gettype()
$data = array($coffe_ar, $resource, $num3, $str0, 3.2, 3);
foreach($data as $value){
	echo gettype($value);
}

//settype()
$var = "5bar";
var_dump(settype($var, "integer"));

//isset()
$car = "BMV";
$fruit;
var_dump(isset($car)); //output true
var_dump(isset($fluit)); //ouptut false

//unset()
function test_unset(){
	static $num6;
	$num6++;
	echo "before unset: ". $num6; //output 1
	unset($num6);
	$num6 = 23;
	echo "after unset: ". $num6; //output 23
}
test_unset();

//empty()
$coffe_2 = "Cappuccino";
if(empty($coffe_2)){
	echo "false";
}else{
	echo "true";
}
$coffe_3;
if(empty($coffe_3)){
	echo "false";
}else{
	echo "true";
}

echo "<br />";
//print_r()
print_r($coffe_ar);

echo "<br />";
//var_dump()
var_dump($coffe_ar);

echo "<br />";
//var_export()
var_export($coffe_ar);

//get_resource_type()
echo get_resource_type($resource); //output stream