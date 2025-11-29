<?php
//multidimensional Array

$students=array(
    array("name"=>"Ram", "marks"=>array(80,75,90)),
    array("name"=>"Sita", "marks"=>array(82,78,92)),
    array("name"=>"Hari", "marks"=>array(98,72,65))

);

function calculateAverage($marks){
    $sum= 0;
    $count=count($marks);

    for ($i=0; $i<$count;$i++){
        $sum+=$marks[$i];
    }
    return $sum/$count;
}
foreach($students as $student){
    $avg= calculateAverage($student["marks"]);
    print_r( $student["name"]."-Average: ". $avg);
    echo "<br>";
}
$i=0;
echo "<br>";
while($i< count($students)){
    print_r( $students[$i]["name"]);
    echo "<br>";
    $i++;
}
$j=0;
do{
    var_dump( $students[$j]["name"]."Marks:");
    for($k=0; $k<count($students[$j]["marks"]); $k++){
        print_r($students[$j]["marks"][$k]." ");

    }
    echo "<br>";
    $j++;
}
while($j<count($students));
?>