<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
		img{
			width: 100px;
			border-radius: 40px;
		}
	</style>
</head>
<body>
	


<?php

$coffe = array('Cappuccino', 'Espresso', 'Flat white'); //

$new_order = array(
	"<img src='/files/Espresso.jpg' alt='Espresso'>" => "Cup of coffe: 
	 <select name='Cupofcoffe' size='1' multiple form='testForm'>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
	 </select>
	", 
	"<img src='/files/Cappuccino.jpg' alt='Cappuccino'>" => "Cup of coffe: 
	 <select name='Cupofcoffe' size='1' multiple form='testForm'>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
	 </select>
	", 
	"<img src='/files/Flat_white.jpg' alt='Flat white'>" => "Cup of coffe: 
	 <select name='Cupofcoffe' size='1' multiple form='testForm'>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
	 </select>
	", 
);

/////




$array_coffe = array_coffe();

print_r($array_coffe);

print_r($coffe);
var_dump($coffe);
var_export($coffe);

print_r($new_order);




















?>

</body>
</html>
