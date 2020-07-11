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



print_r($coffe);
var_dump($coffe);
var_export($coffe);

print_r($new_order);















