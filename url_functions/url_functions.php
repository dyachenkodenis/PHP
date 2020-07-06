<?php

//base64_encode()
$test = "Hello, World!";
echo base64_encode($test)."<br />";

//base64_decode()
$test1 = "SGVsbG8sIFdvcmxkIQ==";
echo base64_decode($test1)."<br />";

//parse_str()
$test2 = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($test2, $output);
echo $output['first']."<br />";
echo $output['arr'][0]."<br />";
echo $output['arr'][1]."<br />";

//get_headers()
$test3 = 'https://google.com/';
print_r(get_headers($test3));

//get_meta_tags()
$test4 = get_meta_tags("https://google.com/");
//echo $test4['author']."<br />";
//echo $test4['keywords']."<br />";
//echo $test4['description']."<br />";
//echo $test4['geo_position']."<br />";

//http_build_query()
$test5 = array(
	'coffe_1' => 'Cappuccino',
	'coffe_2' => 'Espresso',
	'coffe_3' => 'Flat White'
);
echo http_build_query($test5). "<br />";
echo http_build_query($test5, " ", '&amp')."<br />";

//parse_url()
$test6 = 'https://www.google.com/';
var_dump(parse_url($test6));
echo "<br />";
var_dump(parse_url($test6, PHP_URL_PATH));
echo "<br />";

//rawurlencode()
echo '<a href="ftp://user: '. rawurlencode('foo @+%/') .'" >Test link</a>';
/* <a href="ftp://user: foo%20%40%2B%25%2F" >Test link</a> */
echo "<br />";

//rawurldecode()
echo rawurldecode('foo%20bar%40baz')."<br />";
echo "<br />";

//urlencode()
$userinput= "test text";
echo '<a href="mucgi?foo='. urlencode($userinput).'">Test link</a>';
/*href="mucgi?foo=test+text">Test link</a>*/
echo "<br />";

//urldecode()
$test7 = 'my=apples&are=green+and+red';
foreach(explode('&', $test7) as $test8){
	$param = explode("=", $test8);
	if($param){
		printf('Значение параметра \"%s\" - \"%s\"<br />\n', urldecode($param[0]), urldecode($param[1]));
	}
}




