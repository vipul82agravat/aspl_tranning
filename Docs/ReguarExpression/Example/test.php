<?php
 //class use
//     preg_match('/([:alpha:]+)\s+\1/', 'Paris in the the spring', $m);
//     echo $m;
$val="fd";

$arr=[];
$arr1=[];

$str="test;newtest;addtest;test1;newt1est;addtest12;test12;newtest12;addtest12;test123;newtest123;addtest123";
$pattern = "/\;/";

$stroutput = preg_split ($pattern, $str);

foreach($stroutput as $k=>$val){

    preg_match('/[0-9]+/',$val) ? $arr[$k]=$val : $arr1[$k]=$val;
}

echo "string";
echo "\n";
print_r($arr1);
echo "number";
 echo "\n";
print_r($arr);

print_r($stroutput);


echo "url";

// $url="https://example.com";
$url="www.example.com";
// $url="example.com";
$p="/^((https|http|ftp)\:\/\/)?([a-z0-9A-Z]+\.[a-z0-9A-Z]+\.[a-z0-9A-Z]+\.[a-zA-Z]{2,4}|[a-z0-9A-Z]+\.[a-z0-9A-Z]+\.[a-zA-Z]{2,4}|[a-z0-9A-Z]+\.[a-zA-Z]{2,4})$/i";

preg_match($p, $url) ? echo "\n"; echo $url; echo "\n"; : echo "no";


echo "string and name";
$str="1dsfsf-2dsfs-23";

    //string
   $pattern="/[A-Za-z]+/";
    preg_match_all($pattern, $str, $string);
    print_r($string);

    //number
    $pattern="/[0-9]/";
    preg_match_all($pattern, $str, $matches);
	$thisCount=count($matches[0]);
   print_r($thisCount);
   echo "<br>";




    //date check
$date="2012-09-12";
$re="/^[0-9]{4}-(0[1-9]|1[1-9])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
if(preg_match($re,$date)){
    echo "yes";
}else{
    echo "No";
}

//email check

echo "email";

$date="vipul@gmail.com";
$res="/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";
if(preg_match($res,$date)){
    echo "yes";
}else{
    echo "No";
}
echo "<br>";

// string check

// Declare a regular expression
    $regex = "/[^A-Z]+/";

// Declare a string
    $original = "Completed Graduation in 2004";
    $replaceWith = "2002";

// Use preg_match_all() function to perform
// a global regular expression match
preg_match_all($regex, $original, $output);

print_r($output);
?>
