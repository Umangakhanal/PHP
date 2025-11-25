<?php 
// $x=1;
// echo "$x <br>";
// echo '$x <br>';
// //above 3 lines are to show difference between "" and '' 
$a=array(1,'2','3','4','5');
// print_r($a);
// echo "<br>";
// var_dump($a);
// //types of array
// // indexed array
// // associative array
// // multidimensional array

// //associative array
// $student =array("name"=>"umanga", "age"=>20,"address"=>"kathmandu");
// print_r($student);
// echo"<br>";
// var_dump($student);

// //multidimensional array
// $staff_details = array(
//  "staff1"=>  array("name"=>"Ram","salary"=>10000),
//  "staff2"=> array( "name"=>"Hari","salary"=>20000)
// );

// echo $staff_details["staff1"]["name"];
// echo "<br";

// // echo $staff_details;
// echo "<br>";
// print_r($staff_details);
// var_dump($staff_details);

//using array functions 

//explode()

$str= 'Bhaskar is a bad boy';
$arr = explode(' ',$str);
$str = implode('', $arr);
var_dump($arr);
echo $str;

print_r($arr);
$str1= 'abcdabcdabcd';
$arr1= explode('b',$str1);
var_dump($arr1);
$arr2= array("1","2","3");
$str2= implode(' ',$arr2);
echo $str2;

$arr = range(9,5);
// echo $arr;
print_r($arr);
var_dump($arr);

$movies=array('The Lion King','Cars','A Bug\'s Life');
var_dump($movies);
array_shift($movies);
var_dump($movies);
array_unshift($movies,"DDLJ");
var_dump($movies);
array_pop($movies);
var_dump($movies);
array_push($movies,"Aama");
var_dump($movies);
 
//shuffle and reverse
$color = array("red","blue","yellow","orange","green","black");
// shuffle($color);
var_dump($color);
array_reverse($color);
var_dump($color);

//in_array()
var_dump(in_array('red',$color));

//array_key_exist()
$cities = array("Nepal"=>"Kathmandu", "US"=>"california");
// echo array_key_exists('Nepal',$cities);

//sort()
//sort($a);
//print_r($a);

//var_dump(asort($cities));
//var_dump ($cities);
$a = sort ($cities);
echo $a;
print_r(asort($cities));
//merge
$dark =array('black','brown','blue');
$light = array('white','yellow','green','blue');
var_dump(array_merge($dark,$light));
//intersect and diff
$common=array_intersect($dark,$light);
var_dump($common);
$unique = array_diff($dark,$light);
var_dump($unique);

// list function
list($x,,$y,$z)=$light;
echo "here I only need $x, $y and $z";

?>