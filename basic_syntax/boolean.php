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

