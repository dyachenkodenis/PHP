<?php 

// Practice Program

//Even Odd 
//если остаток от деления на 2 равен 0 по число четное
/*$number = 1233456;
if($number%2 == 0)
{
	echo "$number is Even Number";
}else{
	echo "$number is Odd Number";
}*/

//Even Odd Program using Form in PHP
//Определение четного или нечетного числа с использованием формы
?>
<!-- <html>
	<body>
		<form method="post">
			Enter a number:
			<input type="number" name="number">
			<input type="submit" value="Submit">
		</form>
	</body>
</html> -->
<?php 
/*if($_POST){
	$number = $_POST['number'];
	if(($number % 2) == 0){
		echo "$number is Even Number";
	}else{
		echo "$number is Odd Number";
	}
}
*/

//Prime Number
//Вывод 15-ти простых чисел
/*
$count = 0;
$num = 2;
while($count < 15){
	$div_count = 0;
	for($i = 1; $i <= $num; $i++){
		if(($num % $i) == 0){
			$div_count++;
		}
	}
	if($div_count < 3){
		echo $num. ", ";
		$count = $count + 1;
	}
	$num = $num + 1;
}
*/
//Вывод с помощью формы
?>
<!-- <form method="post">
	Enter a number: <input type="text" name="input">
	<input type="submit" name="submit" vaue="Submit">
</form> -->
<?php 
/*if($_POST){
	$input = $_POST['input'];
	for($i = 2; $i <= $input - 1; $i++){
		if($input % $i == 0){
			$value = True;
		}
	}
	if(isset($value) && $value){
		echo 'The number '. $input .' is not prime';
	}else{
		echo 'The Number '. $input . ' is prime';
	}
}
*/

//Table of Number
/*define('a', 7);
for($i = 1; $i <= 10; $i++){
	echo $i*a;
	echo "<br />";
}
*/

//Factorial Program
//Факториал числа — это произведение натуральных чисел от 1 до самого числа (включая данное число).
/*$num = 4;
$factorial = 1;
for($x = $num; $x >= 1; $x--){
	$factorial = $factorial * $x;
}
echo "Factorial of $num is $factorial";
*/
//Factorial using Form in PHP
?>
<!-- <form method="post">
	Enter the number:<input type="text" name="number" id="number">
	<input type="submit" name="submit" value="Submit">
</form> -->
<?php 
/*if($_POST){
	$fact = 1;
	//getting value from input text box "number"
	$number = $_POST['number'];
	echo "Fctorial of $number: <br /><br />";
	//start loop
	for($i = 1; $i <= $number; $i++){
		$fact = $fact * $i;
	}
	echo $fact . "<br />";
}*/

//Factoring using Recursion in PHP 
/*function fact($n){
	if($n <= 1){
		return 1;
	}else{
		return $n * fact($n - 1);
	}
}
echo "Fctorial of 6 is " . fact(6);
*/

//Armstrong NUmber
/*$num = 407;
$total = 0;
$x = $num;
while($x != 0){
	$rem = $x % 10;
	$total = $total + $rem * $rem * $rem;
	$x = $x / 10;
}
if($num == $total){
	echo "Yes it is an Armstrong number";
}else{
	echo "No it is not an Armstrong number";
}*/
?>
<!-- <form method="post">
	Enter the number:
	<input type="number" name="number">
	<input type="submit" value="Submit">
</form> -->
<?php 
/*if($_POST){
	//get the number entered
	$number = $_POST['number'];
	//store entered number in a variable
	$a = $number;
	$sum = 0;
	//run loop till the quotient is 0
	while($a != 0){
		$rem = $a % 10; //find reminder
		$sum = $sum + ($rem * $rem * $rem);//cube the reminder and add it to the sumvariable till the loop ends
		$a = $a / 10; //find quotient. if 0 then loop again
	}
	//if the entired number and $sum value matches then it is an armstrong number
	if($number == $sum){
		echo "Yes $number an Armstrong Number";
	}else{
		echo "$number is not an Armstrong Number";
	}
}*/

//Palindrome Number
/*function palindrome($n){
	$number = $n;
	$sum = 0;
	while(floor($number)){
		$rem = $number % 10;
		$sum = $sum * 10 + $rem;
		$number = $number / 10;
	}
	return $sum;
}
$input = 1235321;
$num = palindrome($input);
if($input == $num){
	echo "$input is a Palindrome number";
}else{
	echo "$input is not a Palindrome";
}
*/
?>
<!-- <form method="post">
	Enter a Number:
	<input type="number" name="number">
	<button type="submit">Submit</button>
</form> -->
<?php 
/*if($_POST){
	//get the value from form
	$num = $_POST['number'];
	//reersing the number
	$reverse = strrev($num);
	//Cheking if the number and reversing is equal
	if($num == $reverse){
		echo "The number $num is Palindrome";
	}else{
		echo "The number $num is not a Palindrome";
	}
}
*/

//Fibonacci Series
/*$num = 0;
$n1 = 0;
$n2 = 1;
echo "<h3>Fibonacci series for </h3>";
echo $n1. ' ' . $n2 .' ';
while($num < 10){
	$n3 = $n2 + $n1;
	echo $n3 . ' ';
	$n1 = $n2;
	$n2 = $n3;
	$num = $num + 1;
}*/
//Fibonaci series using Recursive function
//Print fibonacci series upto 12 elements.
/*$num = 12;
echo "<h3>Fibonacci function for fibonacci series.</h3>";
//Recursive function for fibonacci series.
function series($num)
{
	if($num == 0){
		return 0;
	}else if($num == 1){
		return 1;
	}else{
		return (series($num - 1) + series($num - 2));
	}
}
//Call Function 
for($i = 0; $i < $num; $i++){
	echo series($i) . " ";	
}*/

//Reversing number in PHP
/*$num = 123456;
$revnum = 0;
while($num > 1){
	$rem = $num % 10;
	$revnum = ($revnum * 10) + $rem;
	$num = ($num / 10);
}
echo "Reverse nuber of 23456 is : $revnum";

*/

//Reversing Number With strev()
/*function reverse($number)
{
	//writes number into
	$num = (string) $number;
	//Reverse the string
	$revstr = strrev($num);
	//Writes string into int.
	$reverse = (int) $revstr;
	return $reverse;
} 
echo reverse(23456);
*/

//Reverse Sring
//Reverse String using strrev() function
/*$string = 'SKYAPPER';
echo "Reverse string of $string is " . strrev($string);
*/

//Reverse string without using strrev() function
/*$string = "SKYAPPER";
$length = strlen($string);
for($i = ($length - 1) ; $i >= 0; $i--){
	echo $string[$i];
}
*/

//Swapping two numbers
//Swapping Using Third Variable
/*$a = 45;
$b = 78;
//Swapping logic
$third = $a;
$a = $b;
$b = $third;
echo "After swapping: <br /><br />";
echo "a = ". $a . " b = " . $b;
*/  

//Swapping Without using Third Variable
/*$a = 234;
$b = 345;
//using arithmetic operation
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "Value of a: $a<br />";
echo "Value of b: $b<br />";
// ... and ...
$a = 234;
$b = 345;
//using arithmetic operation
$a = $a * $b;
$b = $a / $b;
$a = $a / $b;
echo "Value of a: $a<br />";
echo "Value of b: $b<br />";*/

//Adding Two Numbers
//Adding in Simple Code
/*$x = 15;
$y = 30;
$z = $x + $y;
echo "Sum: " . $z;
*/
//Adding in Form
?>
<!-- <form method="post">
	Enter First Number:
	<input type="number" name="number1">
	Enter Second Number:
	<input type="number" name="number2">
	<input type="submit" name="submit" value="Add">
</form> -->
<?php 
/*if(isset($_POST['submit'])){
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$sum = $number1 + $number2;
	echo "The sum of $number1 and $number2 is: ". $sum;
}
*/
//Adding in Simple Code
?>
<!-- <form>
	Enter First Number:
	<input type="number" name="number1">
	Enter Second Number:
	<input type="number" name="number2">
	<input type="submit" name="submit" value="Add">
</form> -->
<?php 
/*$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
for($i = 1; $i <= $number2; $i++){
	$number1++;
}
echo "Sum of $number1 and $number2 is = " . $number2;
*/

//Substracting Two Numbers
//Substraction in Simple Code
/*$x = 30;
$y = 15;
$z = $x - $y;
echo "Difference: ". $z;*/
//Substraction in Form
?>
<!-- <form method="post">
	Enter First Number:
	<input type="number" name="number1">
	Enter Second Number:
	<input type="number" name="number2">
	<input type="submit" name="submit" value="Add">
</form> -->
<?php 
/*if($isset($_POST['submit'])){
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$sum = $number1 - $number2;
	echo "The difference of $number1 and $number2 is: ". $sum;
}*/
//Substraction in Form without (-) Operator
?>
<!-- <form>
	Enter First Number:
	<input type="number" name="number1">
	Enter Second Number:
	<input type="number" name="number2">
	<input type="submit" name="submit" value="Add">
</form> -->
<?php 
/*$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
for($i = 1; $i <= $number2; $i++){
	$number1--;
}
echo "Difference = " . $number1;
*/

//Area of Triangle
//площадь треугольника
/*$base = 10;
$height = 15;
echo "Area with base $base and height $height = " . ($base * $height) / 2;
*/
//Area of Triangle with Form
?>
<!-- <form method="post">
	Base: <input type="number" name="base">
	Height: <input type="number" name="height">
	<input type="submit" name="submit" value="Add">
</form> -->
<?php
/*if(isset($_POST['submit'])){
	$base = $_POST['base'];
	$height = $_POST['height'];
	$area = ($base * $height) / 2;
	echo "The area of a triangle width base as $base and height as $height is $area";
}*/

//Area of a Rectangle
/*$length = 14;
$width = 12;
echo "area of rectangle is $length * $width = " . ($length * $width) . "<br />";
*/
//Area of Rectangle with Form
?>
<!-- <form method="post">
	Width: <input type="number" name="width">
	Length: <input type="number" name="length">
	<input type="submit" name="submit" value="Add">
</form> -->
<?php 
/*if(isset($_POST['submit'])){
	$width = $_POST['width'];
	$length = $_POST['length'];
	$area = $width * $length;
	echo "The area of a rectangle with $width x $length is $area";
}*/

//Leap Year Program
//Високосный год
/*function isLeap($year)
{
	return(date('L', mktime(0,0,0,1,1, $year)) == 1);
}
//For testing
for($year = 1991; $year < 2020; $year++){
	if(isLeap($year)){
		echo "$year : LEAP YEAR <br />";
	}else{
		echo "$year : Not leap year <br />";
	}
}
*/
//Leap Year program in Form
?>
<!-- <form method="post">
	Enter the Year:
	<input type="number" name="year">
	<input type="submit" name="submit" value="Add">
</form> -->
<?php 
/*if($_POST){
	//get the year
	$year = $_POST['year'];
	//check if entered value is a number
	if(!is_numeric($year)){
		echo "Strings not alloved, Input should be a number";
		return;
	}
	//multiple conditions to check theleap year
	if((0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400))
	{
		echo "$year is a Leap Year";
	}else{
		echo "$year is not Leap Year";
	}
}*/

//Alphabet Triangle Method
//using range() function
/*$alpha = range('A', 'Z');
for($i = 0; $i < 5; $i++){
	for($j = 5; $j > $i; $j--){
		echo $alpha[$i];
	}
	echo "<br />";
}*/

//using chr() function
/*for($i = 65; $i <= 69; $++){
	for($j=5; $j>=$i-64; $j--){
		echo chr($i);
	}
	echo "<br />";
}*/

//using range() function with foreach
/*$k = 1; 
foreach(range('A', 'Z') as $char){
	for($i = 5; $i >= $k; $i--){
		echo $char;
	}
	echo "<br />";
	$k = $k + 1;
}
*/

//Alphabet Triangle Pattern
#pattern 1
/*$alpha = range('A', 'Z');
for($i = 0; $i < 5; $i++){
	for($j = 5; $j > $i; $j--){
		echo $alpha[$i];
	}
	echo "<br />";
}*/

#pattern 2
/*$alpha = range('A', 'Z');
for($i = 0; $i<5; $i++){
	for($j = 0; $j <= $i; $j++){
		echo $alpha[$i];
	}
	echo "<br />";
}*/

#pattern 3
/*$alpha = range('A', 'Z');
for($i = 0; $i < 5; $i++){
	for($j = 0; $j <= $i; $j++){
		echo $alpha[$j];
	}
	echo "<br />";
}*/

#pattern 4
/*$alpha = range('A', 'Z');
for($i = 0; $i < 5; $i++){
	for($j = 4; $j >= $i; $j--){
		echo $alpha[$j];
	}
	echo "<br />";
}*/

#pattern 5
/*$alpha = range('A', 'Z');
for($i = 5; $i >= 1; $i--){
	for($j = 0; $j <= $i; $j++){
		echo ' ';
	}
	$j--;
	for($k = 0; $k <= (5 - $j); $k++){
		echo $alpha[$k];
	}
	echo "<br />";
}*/

//Number Triangle

#pattern 1
/*$k = 1;
for($i = 0; $i < 4; $i++){
	for($j = 0; $j < $i; $j++){
		echo $k . ' ';
		$k++;
	}
	echo "<br />";
}
*/

#pattern 2
/*$k = 1;
for($i = 0; $i < 5; $i++){
	for($j = 0; $j <= $i; $j++){
		if($j % 2 == 0){
			$k = 0;
		}else{
			$k = 1;
		}
		echo $k . " ";
	}
	echo "<br />";
}*/

#pattern 3
/*for($i = 0; $i <= 5; $i++){
	for($j = 1; $j <= $i; $j++){
		echo $j;
	}
	echo "<br />";
}*/

#pattern 4
/*for($i = 0; $i <= 5; $i++){
	for($j = 1; $j <= $i; $j++){
		echo "1";
	}
	echo "<br />";
}
*/

#pattern 5
/*for($i = 0; $i <= 5; $i++){
	for($j = 5-$i; $j >=1; $j--){
		echo "1";
	}
	echo "<br />";
}
*/

#pattern 6
/*for($i = 0; $i <= 5; $i++){
	for($j = 5 - $i; $j >= 1; $j--){
		echo $j;
	}
	echo "<br />";
}*/

#pattern 7
/*for($i = 5; $i >= 1; $i--){
	for($j = $i; $j >= 1; $j--){
		echo $i . " ";
	}
	echo "<br />";
}*/

//Star Triangle

#pattern 1
/*for($i = 0; $i <= 5; $i++){
	for($j = 5 - $i; $j >= 1; $j--){
		echo "* ";
	}
	echo "<br />";
}*/

#pattern 2
/*for($i = 0; $i <= 5; $i++){
	for($j = 1; $j <= $i; $j++){
		echo "* ";
	}
	echo "<br />";
}*/

#pattern 3
/*for($i = 0; $i <= 5; $i++){
	for($k = 5; $k >= $i; $k--){
		echo " ";
	}
	for($j = 1; $j <= $i; $j++){
		echo "* ";
	}
	echo "<br />";
}
for($i = 4; $i >= 1; $i--){
	for($k = 5; $k >= $i; $k--){
		echo " ";
	}
	for($j = 1; $j <= $i; $j++){
		echo "* ";
	}
	echo "<br />";
}*/

#pattern 4
/*for($i = 1; $i <= 5; $i++){
	for($j = 1; $j <= $i; $j++){
		echo " * ";
	}
	echo "<br />";
}
for($i =5; $i >= 1; $i--){
	for($j = 1; $j <= $i; $j++){
		echo " * ";
	}
	echo "<br />";
}*/

#pattern 5
/*for($i = 1; $i <= 5; $i++){
	for($j = 1; $j <= 5; $j++){
		echo "* ";
	}
	echo "<br />";
}*/

#pattern 6
/*for($i = 5; $i >= 1; $i--){
	if($i % 2 != 0){
		for($j = 5; $j >= $i; $j--){
			echo "* ";
		}
		echo "<br />";
	}
}
for($i = 2; $i <= 5; $i++){
	if($i % 2 != 0){
		for($j = 5; $j >= $i; $j--){
			echo "* ";
		}
		echo "<br />";
	}
}*/

//Sum of Digits
/*$num = 14597;
$sum = 0;
$rem = 0;
for($i = 0; $i <= strlen($num); $i++){
	$rem = $num % 10;
	$sum = $sum + $rem;
	$num = $num / 10;
}
echo "Sum of digits 14597 is $sum";
*/

//PHP object
/*class Car
{
	function Car()
	{
		$this->model = "VW";
	}
}
//Create an object
$herbie = new Car();
//Show object properties
echo $herbie->model;*/

//Replace text within a string
/*echo str_replace("world", "Dolly", "Hello world!");
*/

//Sort array in ascending alphabetical order
/*$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++){
	echo $cars[$x];
	echo "<br />";
}*/

//Sort array ascending numerical order
/*$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++){
	echo $numbers[$x];
	echo "<br />";
}*/

//Sort array in ascending order, according to key
/*$age = array("Peter"="35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
foreach($age as $x => $x_value){
	echo "Key = " . $x . ", Value = " . $x_value;
	echo "<br />";
}*/

//Vaidate an IP addres
/*$ip = "127.0.0.1";
if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
	echo ("$ip is a validate IP addres");
}else{
	echo ("$ip is not a valid IP address");
}*/

//Santize and validate an email adress
/*$email = "test@example.com";
//Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
//Validate e-mail
if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
	echo("$email is a valid email address");
}else{
	echo("$email is not a valid email address");
}*/

//Sanitize and validate a URL
/*$url = "https://google.com";
//Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);
//Validate url
if(!filter_var($url, FILTER_VALIDATE_URL) === false){
	echo ("$url is a valid URL");
}else{
	echo ("$url is a valid URL");
}*/





































