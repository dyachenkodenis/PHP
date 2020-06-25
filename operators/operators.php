<?php
echo "<pre>"; 

//arithmetics

$arithmetics_arr = array
(
    "1+3"  => 1+3,
    "3-1"  => 3-1,
    "2*2"  => 2*2,
	"10/2" => 10/2,
    "2%6"  => 2%6, //outputs remainder of 2 divided by 6
    "2**3" => 2**3 /*outputs (2*2*2) 8; Result of raising 2 to the 2'th power */
);

var_export($arithmetics_arr);

//assignments
$b = 3;
$c = 9;
$d = 3;
$e = 8;
$assignments_arr = array
(
	'$a = 5'           => $a = 5,
	'$b = 3; $b += 5;' => $b+= 5,
	'$c = 9; $c -= 8;'  => $c-= 8,
	'$d = 3; $d *= 8;'  => $d*= 8,
	'$e = 8; $e /= 2;'  => $e/= 2,
);
var_export($assignments_arr);

//bitwise
$f = 2;
$h = 3; $i = 4;
$j = 5; $k = 3;
$l = 1; $m = 4;
$n = 6; $o = 7;
$bitwise_arr = array
(
	'$f = 2; $g = &$f;'         => $g = &$f, //output $g = 2 /*bitwise and*/
	'$h |= $i; $h = $h | $i;'   => $h | $i,   //output 7 /*bitwise or*/
	'$j ^= $k; $j = $j ^ $k;'   => $j ^ $k, //bitwise xor
	'$l <<= $m; $l = $l << $m;' => $l<<$m,  //left shift
	'$n >>= $o; $n = $n >> $o;' => $n>>$o   //right shift
);
var_export($bitwise_arr);

//comparison
var_dump($h == $k); //output true
var_dump($h === $k); //output true
var_dump($h != $f); //output true
var_dump($h <>$k); //output false
var_dump($h !== $k); //output false
var_dump($h < $k); //output false
var_dump($h > $k); //output false
var_dump($h <= $k); //output true
var_dump($h >=$k); //output true

//error control
echo @$test_error; 

//execution
$output = `ls`;
echo $output;

//increase/decrease
$test_num1 = 23;
$test_num2 = 23;
$test_num3 = 23;
$test_num4 = 23;
echo ++$test_num1 . " : ++23 <br />";
echo $test_num2++ . " : 23++ <br />";
echo --$test_num3 . " : --23 <br />";
echo $test_num4-- . " : 23-- <br />";

//logical
$p = 50;
$q = 100;
if($p == 50 and $q == 100){
	echo "Hello, World!"; /*True if both $p and $q are true; analog "&&" */
}
if($p == 50 or $q == 100){
	echo "Hello, World!"; /*True if either $p or $q is true; analog "||" */
}
if($p == 50 xor $q == 100){
	echo "Hello, World!"; /* True if either $p or $q is true, but not both */
}
if($p == 50 && $q == 100){
	echo "Hello, World!"; /* True if both $p and $q are true; analog "and" */
}
if($p ==50 || $q == 45){
	echo "Hello, World!"; /* True if either $p or $q is true; analog "or" */
}
if($p !== 60){
	echo "Hello, World!"; /* True if $p is not true */
}

//string
echo "Hello, " . "World!"; /* output "Hello, World!"; Concatenation of "Hello," and "World!" */
$text1 = "My name ";
$text2 = "Denis";
$text1 .= $text2;
echo $text1; //Appends $text2 to $text1

//type
class myClass{

}
class NotMyClass{

}
$test_class = new myClass;
var_dump($test_class instanceof myClass); //output true
var_dump($test_class instanceof NotMyClass); //output false

//array
$x_arr = array("y"=>'yellow', "g"=>'green');
$y_arr = array("r"=>'red', "b"=>'brown');

print_r($x_arr + $y_arr); //Union of $x_arr and $y_arr
var_dump($x_arr == $y_arr); /*Returns true if $x_arr and $y_arr have the same key/value pairs */
var_dump($x_arr === $y_arr); /* Returns true if $x_arr and $y_arr have the same key/value pairs in the same order and of the same types*/
var_dump($x_arr != $y_arr); /*Returns true if $x_arr is not equal to $y_arr */ 
var_dump($x_arr <> $y_arr); /* Returns true if $x_arr is not equal to $y_arr */
var_dump($x_arr !== $y_arr); /* Returns true if $x_arr is not identical to $y_arr */