<?php

$x=5;
function my_func(){
	echo "Variable x inside function is: $x <br />"; //output error
}
my_func();
	echo "Variable x outside functionis is: $x <br />";

//$GLOBALS;
$num_1 = 35;
$num_2 = 50;
function var_test(){
	$GLOBALS['num'] = $GLOBALS['num_1'] + $GLOBALS['num_2'];
}
var_test();
echo $num;

//$_GET;
echo "<br /><a href='../files/inc3.php?subject=Message: Test Get'>Test GET</a>";

//$_POST;
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Name: <input type="text" name="fname">
	<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//collect value of input field
	$name = $_POST['fname'];
	if(empty($name)){
		echo "Name is empty";
	}else{
		echo $name;
	}
}

//$_SERVER;
echo "<pre>";
print_r($_SERVER);

//$_COOKIE;
$cookie_name = "user";
$cookie_value = "Denis";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400 = 1 day
if(!isset($_COOKIE[$cookie_name])){
	echo "Cookied named '" . $cookie_name . "' is not set!";
}else{
	echo "Cookie '" . $cookie_name . "' is set!";
	echo "Value is:" . $_COOKIE[name];
}
echo "<br />";

//$_FILES
//An associative array of items uploaded to the current script via the HTTP POST method. The structure of this array is outlined in the POST method uploads section.
echo 
"Array(
[file1] => Array(
	[name] => myfile.jpg
	[type] => image/jpeg
	[tmp_name] => /tmp/php
	[error] => UPLOAD_ERR_OK
	[size] => 98145
	)

)";

//$_ENV
//An associative array of variables passed to the current script via the environment method
echo 'My username is '. $_ENV['USER']. "!";

//$_SESSION;
//An associative array containing session variables available to the current script.
session_start();
$_SESSION["favcolor"]  = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
print_r($_SESSION);
echo "Session 'favcolor' and 'favanimal':".$_SESSION['favcolor']. " " .$_SESSION["favanimal"];
