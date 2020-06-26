<?php
$coffe_1 = "Cappuccino"; 
$coffe_2 = "Flat White";
$coffe_3 = "Espresso";


//if()
$num_0 = 2;
$num_1 = 3;
$num_2 = 5;
if(1 + 1==$num_0){
	echo "yes";
}else{
	echo "no";
}

//elseif()
if($num_0 = $num_2){
	echo "yes 2 = 5";
}elseif($num_0 < $num_2){
	echo "yes 2 < 5";
}else{
	echo "yes 2 > 5";
}

//for()
for($a = 1; $a <= 10; $a++){
	echo $a;
}
for($b = 1; ; $b++){
	if($b>10){
		break;
	}
	echo $b;
}

//foeach()
$coffe_arr = array('1'=>'Cappuccino', '2'=>'Flat White', '3'=>'Espresso');
foreach($coffe_arr as $value){
	echo "$value <br />";
}
foreach($coffe_arr as $key => $value){
	echo "$key = $value <br />";
}

//while()
$num_3 = 0;
while($num_3 <= 5){
	echo "The number is the: $num_3 <br />";
	$num_3++;
}

//do{}while()
$num_4 = 0;
do{
	echo "The number is the: $num_4 <br />";
	$num_4++;
}while($num_4 <= 5);

//switch()
$mycolor = "green";
switch($mycolor){
	case "red":
	echo "Your favorite color is red!";
	break;
	case "blue":
	echo "Your favorite color is blue!";
	break;
	case "green":
	echo "Your favorite color is green!";
	break;
	default:
	echo "Your favorite color is neither red, blue, nor green!";
}

//break;
for($num_5 = 0; $num_5 < 10; $num_5++){
	if($num_5 == 4){
		break;
	}
	echo "The number is: $num_5 <br />";
}

//continue;
for($num_6 = 0; $num_6 < 10; $num_6++){
	if($num_6 == 4){
		continue;
	}
	echo "The number is: $num_6 <br />";
}

//return;
function square($num_7){
	return $num_7 * $num_7;
}
echo square(4); //output 16

