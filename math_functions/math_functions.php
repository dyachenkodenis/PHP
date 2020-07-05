<?php

//abs()
echo abs(5). "<br />"; //output 5
echo abs(-6). "<br />"; //output 6
echo abs(3.4). "<br />"; //output 3.4
echo abs(-3.4). "<br />"; //output 3.4

//exp()
echo exp(0). "<br />";
echo exp(2). "<br />";
echo exp(3.5). "<br />";
echo exp(16). "<br />";

//fmod()
$num = 15;
$num1 = 4;
$result = fmod($num, $num1). "<br />";
echo $result. "<br />"; //result equals 3, 4 * 3 + 3 = 15

//log10()
echo log10(3). "<br />";
echo log10(8). "<br />";
echo log10(3.4). "<br />";
echo log10(0). "<br />";

//log()
echo log(3). "<br />";
echo log(2.4584). "<br />";
echo log(0). "<br />";

//max()
echo max(1,3,8,10). "<br />";
echo max(4,9,14,72). "<br />";
echo max(1.3,1.5,1.8,1.9). "<br />";

//min()
echo min(1,4,6,9). "<br />";
echo min(32,45,87,90). "<br />";
echo min(1.4,1.6,19.7). "<br />";

//pi()
echo pi(). "<br />";
echo M_PI. "<br />";
echo M_PI_2. "<br />"; //output pi/2

//pow()
echo pow(2,4). "<br />";
echo pow(3,5). "<br />";
echo pow(-3,-2). "<br />";

//sqrt()
echo sqrt(0). "<br />";
echo sqrt(3). "<br />";
echo sqrt(7). "<br />";
echo sqrt(0.3). "<br />";
echo sqrt(-3). "<br />";

//is_finite()
echo is_finite(2). "<br />";
echo is_finite(log(0)). "<br />";
echo is_finite(2000). "<br />";

//is_infinite()
echo is_infinite(0). "<br />";
echo is_infinite(3). "<br />";
echo is_infinite(2000). "<br />";

//is_nan()
echo is_nan("45"). "<br />";
echo is_nan(2.4). "<br />";
echo is_nan('45'). "<br />";

//base_convert()
$hex = "E196";
echo base_convert($hex, 16,8). "<br />";

//decbin()
echo decbin("2"). "<br />";
echo decbin("6"). "<br />";
echo decbin("1266"). "<br />";

//bindec()
echo bindec(11010101). "<br />";
echo bindec(11011). "<br />";
echo bindec(1001). "<br />";

//dechex()
echo dechex(20). "<br />";
echo dechex(30). "<br />";
echo dechex(34). "<br />";
echo dechex(10). "<br />";

//hexdec()
echo hexdec("1e"). "<br />";
echo hexdec("a"). "<br />";
echo hexdec("11ff"). "<br />";
echo hexdec("cceeff"). "<br />";

//decoct()
echo decoct("20"). "<br />";
echo decoct("32"). "<br />";
echo decoct("3"). "<br />";
echo decoct("1234"). "<br />";

//octdec()
echo octdec("24"). "<br />";
echo octdec("40"). "<br />";
echo octdec("3"). "<br />";
echo octdec("2322"). "<br />";

//deg2rad()
echo deg2rad("45"). "<br />";
echo deg2rad("90"). "<br />";
echo deg2rad("360"). "<br />";

//rad2deg()
echo rad2deg("0.78539816339745"). "<br />";
echo rad2deg("1.5707963267949"). "<br />";
echo rad2deg("6.2831853071796"). "<br />";

//getrandmax()
echo(getrandmax()). "<br />";;

//mt_getrandmax()
echo(mt_getrandmax()). "<br />";;

//rand()
echo(rand()."<br />");
echo(rand(10,100)). "<br />";

//mt_rand()
echo(mt_rand()."<br />");
echo(mt_rand(10,100)). "<br />";

//srand()
srand(mktime());
echo(rand()). "<br />";

//mt_srand()
mt_srand(mktime());
echo(rand()). "<br />";

//lcg_value()
echo lcg_value(). "<br />";

//ceil()
echo ceil(2.5). "<br />";
echo ceil(2.1). "<br />";
echo ceil(3.4). "<br />";

//floor()
echo floor(2.4). "<br />";
echo floor(3.7). "<br />";
echo floor(1.4). "<br />";

//round()
echo round(2.4). "<br />";
echo round(3.6). "<br />";
echo round(0.60). "<br />";

//sin()
echo(sin(3)). "<br />";
echo(sin(-3)). "<br />";
echo(sin(M_PI)). "<br />";
echo(sin(M_PI_2)). "<br />";

//sinh()
echo(sinh(3)). "<br />";
echo(sinh(-3)). "<br />";
echo(sinh(M_PI)). "<br />";
echo(sinh(M_PI_2)). "<br />";

//asin()
echo(asin(0.64)). "<br />";
echo(asin(-0.3)). "<br />";
echo(asin(3.4)). "<br />";

//asinh()
echo(asinh(0.4)). "<br />";
echo(asinh(0.67)). "<br />";
echo(asin(3)). "<br />";

//cos()
echo(cos(3)). "<br />";
echo(cos(-2)). "<br />";
echo(cos(M_PI)). "<br />";
echo(cos(2*M_PI)). "<br />";

//cosh()
echo(cosh(3)). "<br />";
echo(cosh(-2)). "<br />";
echo(cosh(M_PI)). "<br />";
echo(cos(2*M_PI)). "<br />";

//acos()
echo(acos(2)). "<br />";
echo(acos(1)). "<br />";
echo(acos(-1)). "<br />";

//acosh()
echo(acosh(2)). "<br />";
echo(acosh(56)). "<br />";
echo(acosh(5.6)). "<br />";
echo(acosh(-3)). "<br />";

//tan()
echo(tan(3)). "<br />";
echo(tan(5)). "<br />";
echo(tan(-5)). "<br />";
echo(tan(M_PI)). "<br />";
echo(tan(M_PI_4)). "<br />";

//tanh()
echo(tan(4)). "<br />";
echo(tan(M_PI)). "<br />";
echo(tan(M_PI_4)). "<br />";
echo(tan(10)). "<br />";

//atan()
echo(atan(0.50)). "<br />";
echo(atan(3)). "<br />";
echo(atan(-1)). "<br />";

//atanh()
echo(atanh(0.1)). "<br />";
echo(atanh(-1)). "<br />";
echo(atanh(0)). "<br />";
echo(atanh(M_PI_4)). "<br />";

//atan2()
echo(atan2(0.5, 0.5)). "<br />";
echo(atan2(-0.2, -0.2)). "<br />";
echo(atan2(10, 20)). "<br />";
echo(atan2(-5, -5)). "<br />";

//hypot()
echo hypot(5, 3). "<br />";
echo hypot(4, 6). "<br />";
echo hypot(3*2, 2*5). "<br />";




