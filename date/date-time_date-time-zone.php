<?php

//data_create()
$test = date_create("2020-07-06");
echo date_format($test, "Y/m/d"). "<br />";

//date_date_set()
$test1 = date_create();
date_date_set($test1, 2020,07,06);
echo(date_format($test1, "Y/m/d")). "<br />";

//date_format()
$test2 = date_create("2020-07-06");
echo date_format($test2, "Y/m/d H:i:s"). "<br />";

//date_isodate_set()
$test3 = date_create();
date_isodate_set($test3, 2020,07);
echo date_format($test3, "Y-m-d"). "<br />";

//date_modify()
$test4 = date_create("2020-07-06");
date_modify($test4, "+15 days");
echo date_format($test4, "Y-m-d")."<br />";

//date_offset_get()
$winter = date_create("2020-01-01", timezone_open("Europe/Oslo"));
$summer = date_create("2020-06-01", timezone_open("Europe/Oslo"));
echo date_offset_get($winter)."<br />";
echo date_offset_get($summer)."<br />";

//date_time_set()
$test5 = date_create("2020-07-06");
date_time_set($test4, 13, 24);
echo date_format($test5, "Y-m-d H:i:s"). "<br />";

//date_timezone_get()
$test6 = date_create(null, timezone_open("Europe/Paris"));
$tz = date_timezone_get($test6);
echo timezone_name_get($tz)."<br />";

//date_timezone_set()
$test7 = date_create("2020-07-06", timezone_open("Indian/Kerguelen"));
echo date_format($test7, "Y-m-d H-i-s")."<br />";

//timezone_abbreviations_list()
$test8 = DateTimeZone::listAbbreviations();
print_r($test8['acst'])."<br />";

//timezone_identifiers_list()
print_r(timezone_identifiers_list(1)). "<br />";

//timezone_name_get()
$test9 = timezone_open("Europe/Paris");
echo(timezone_name_get($test9))."<br />";

//timezone_offset_get()
$test10 = timezone_open("Asia/Taipei");
$dateTimeOslo = date_create("now", timezone_open("Europe/Oslo"));
echo timezone_offset_get($test10, $dateTimeOslo)."<br />";

//timezone_open()
$test11 = timezone_open("Europe/Paris");
echo timezone_name_get($test11)."<br />";

//timezone_transitions_get()
$test12 = new DateTimeZone("Europe/Paris");
//Procedural style
print_r(reset(timezone_transitions_get($test12)));
echo "<br />";
//Object oriented style
print_r(reset($test12->getTransitions()));
echo "<br />";

//timezone_name_from_abbr()
echo timezone_name_from_abbr("EST")."<br />";
echo timezone_name_from_abbr("", 7200,0)."<br />";
