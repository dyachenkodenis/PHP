<?php

//bin2hex()
$test = bin2hex("Hello, Word!");
echo $test;

//pack()
$test1 = "Hello, World!";
echo pack("H*", bin2hex($test1));

//chr()
echo chr(52);
echo chr(052);
echo chr(0x52);

//ord()
echo ord("h");
echo ord("hello");

//convert_cyr_string()
$test2 = "Hello, World!  æøå";
echo $test2;
echo convert_cyr_string($test2, 'w', 'a');
/*  w - windows-1251 
	i - iso8859-5 
	a - x-cp866
	d - x-cp866
	m - x-mac-cyrillic
*/

//convert_uuencode()
$test3 = "Hello, World!";
echo convert_uuencode($test3);

//convert_uudecode()
$test4 = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($test4);

//crc32
$test5 = crc32("Hello, World!");
printf("%u\n", $test5);

//crypt()
$mypassword = 'mypassword';
$hashcrypt = crypt($mypassword, 'salt');
echo $hashcrypt;

//hebrev()
echo hebrev("á çùåï äúùñâ");

//hebrevc()
echo hebrevc("� ���� �����\n� ���� �����");

//localeconv()
$localeinfo = localeconv();
print_r($localeinfo);

//setlocale()
setlocale(LC_ALL, "US");
$localeinfo1 = localeconv();
print_r($localeinfo1);
if(false !== setlocale(LC_ALL, 'ru_RU.UTF-8')){
	$locale_info = localeconv();
	print_r($locale_info);
}

//md5_file()
$file = '../files/inc3.php';
echo "MD5 file: ". $file . " = " . md5_file($file);

//md5()
$test6 = "Hello, World!";
echo md5($test6);

//sha1_file()
echo "SHA1 file: ". $file . " = " . sha1_file($file);

//sha1()
echo sha1($test6);

//money_format() old
$test7 = 1234.56;
setlocale(LC_MONETARY, "en_US");
echo 'The price is i ', $test7;

//number_format(); new
echo number_format(1000000);
echo number_format(1000000, 2);
echo number_format(1000000, 2, ",", ".");

//nl_langinfo()
echo nl_langinfo(MON_2);

