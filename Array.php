<?php 
$x=1;
echo "$x <br>";
echo '$x <br>';
//above 3 lines are to show difference between "" and '' 
$a=array(1,'2','3','4','5');
print_r($a);
echo "<br>";
var_dump($a);
//types of array
// indexed array
// associative array
// multidimensional array

//associative array
$student =array("name"=>"umanga", "age"=>20,"address"=>"kathmandu");
print_r($student);
echo"<br>";
var_dump($student);

//multidimensional array
$staff_details = array(
 "staff1"=>  array("name"=>"Ram","salary"=>10000),
  "staff2"=> array( "name"=>"Hari","salary"=>20000)
);

echo $staff_details["staff1"]["name"];
echo "<br";

// echo $staff_details;
echo "<br>";
print_r($staff_details);
var_dump($staff_details);


?>