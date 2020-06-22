<?php


echo "<br />" . var_dump((bool)""); // bool(false)
echo "<br />" . var_dump((bool)1); // bool(true)
echo "<br />" . var_dump((bool)-2); // bool(true)
echo "<br />" . var_dump((bool)"str"); // bool(true)
echo "<br />" . var_dump((bool)2.5); // bool(true)
echo "<br />" . var_dump((bool)array(3)); // bool(true)
echo "<br />" . var_dump((bool)array()); // bool(false)
echo "<br />" . var_dump((bool)"false"); // bool(true)
echo "<br />" . var_dump((bool)true); // bool(true)


$x = true;
echo $x;

echo "<br />"; // html

echo "<br />" . var_dump(NAN ||  FALSE); // bool(true) 
echo "<br />" . var_dump(NAN &&  TRUE);  // bool(true) 
echo "<br />" . var_dump(NAN === FALSE); //	bool(false) 
echo "<br />" . var_dump(NAN === TRUE);  //	bool(false) 
echo "<br />" . var_dump(NAN === "STR");  // bool(false) 
echo "<br />" . var_dump(NAN === NAN);   //	bool(false)
echo "<br />" . var_dump(NAN ==  NAN);  //	bool(false) 
echo "<br />" . var_dump(NAN ==  FALSE); //	bool(false) 
echo "<br />" . var_dump(NAN ==  TRUE);  // bool(true)
