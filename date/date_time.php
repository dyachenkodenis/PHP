<?php

//checkdate()
var_dump(checkdate(07,05,2020)) . "<br />"; //month, day, year

//getdate()
print_r(getdate()) . "<br />";;

//time()
$time = time();
echo($time . "<br />");
echo(date("Y-m-d", $time)) . "<br />";

//microtime()
echo(microtime()) . "<br />";

//date_default_timezone_get()
echo date_default_timezone_get() . "<br />";

//date_default_timezone_set()
date_default_timezone_set("Asia/Bangkok");
echo date_default_timezone_get() . "<br />";

//date_parse()
print_r(date_parse("2013-05-01 12:30:45.5"));

//gettimeofday()
print_r(gettimeofday()) . "<br />";
print_r(gettimeofday(true)) . "<br />";

//gmdate()
echo(gmdate(1)) . "<br />";

//idate()
echo idate("B") . "<br />"; //Swatch Beat/Internet Time
echo idate("d") . "<br />";
echo idate("h") . "<br />";
echo idate("H") . "<br />";
echo idate("i") . "<br />";
echo idate("I") . "<br />";
echo idate("L") . "<br />";
echo idate("m") . "<br />";
echo idate("s") . "<br />";
echo idate("t") . "<br />";
echo idate("U") . "<br />";
echo idate("W") . "<br />";
echo idate("w") . "<br />";
echo idate("y") . "<br />";
echo idate("Y") . "<br />";
echo idate("z") . "<br />";
echo idate("Z") . "<br />";

//strptime()
$dateFormat = "%d/%m/%Y %H/%M/%S";
$strf = strftime($dateFormat);
echo $strf . "<br />";
print_r(strptime($strf, $dateFormat)) . "<br />";

//strtotime()
echo strtotime("now") . "<br />";
echo strtotime("+5 hours") . "<br />";
echo strtotime("+1 week") . "<br />";
echo strtotime("next Monday") . "<br />";

//gmmktime()
echo "Oct 3, 1975 was on a ".date("1", gmmktime(0,0,0,10,3,1975)) . "<br />";

//gmstrftime()
echo(gmstrftime("%B %d %Y, %X %Z", mktime(20,0,0,12,31,98)). "<br />");
setlocale(LC_ALL, "hu_HU.UTF8");
echo(gmstrftime("%Y. %B %d. %A. %X %Z")) . "<br />";

//strftime()
echo(strftime("%B %d %Y, %X %Z", mktime(20,0,0,12,31,98)). "<br />");
setlocale(LC_ALL, "hu_HU.UTF8");
echo(strftime("%Y. %B %d. %A. %X %Z")). "<br />";

//localtime()
print_r(localtime()). "<br />";
print_r(localtime(time(), true)). "<br />";

//mktime()
echo "Oct 3, 1975 was on a ".date("1", mktime(0,0,0,10,3,1975));

//date_sun_info()
$sun_info=date_sun_info(strtotime("2013-01-01"),31.7667,35.2333);
foreach($sun_info as $key=>$val){
	echo "$key: " .date("H:i:s", $val). "<br />";
}
print_r(date_sun_info(strtotime("2020-07-05"),90,0)); /*time, latitude, longtitude*/

//date_sunrise()
//Lisbon, Portugal:
//Latitude: 38.4 North, Longitude: 9 West
//Zenith ~=90, offset: +1 GMT
echo("Lisbon, Portugal: Date: " .date("D M d Y")). "<br />";
echo("<br />Sunrise time: ");
echo(date_sunrise(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1))."<br />";

//date_sunset()
//Lisbon, Portugal:
//Latitude: 38.4 North, Longitude: 9 West
//Zenith ~= 90, offset: +1 GMT
echo("Lisbon, Portugal: Date: ".date("D M d Y"));
echo("<br />Sunset time: ");
echo(date_sunset(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1));

