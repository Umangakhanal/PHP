<?php
$i=1;
$a=1;
// While loop
while($i<=5){
    echo $i;
    $i++;
    break;
}

//Do loop
do{
    echo $a;
    $a++;
} while($a<=5);

//for loop
for($a=1; $a<=5;$a++){
    echo  $a;
}

//break and continue
 echo"<br>";
for($x=0;$x<10;$x++){
    if($x== 4){
        break;
    }
    echo "The number is: $x <br>";
}
 echo"<br>";
for($x=0;$x<10;$x++){
    if($x== 4){
        continue;
    }
    echo "The number is: $x <br>";
}
for ($y=0;$y<10;$y++){
    if($y%2==0){
        continue;
    }
    echo "$y is ODD <br>";
}

//foreach loop
 echo"<br>";
    $colors = array("red","green","blue","yellow");
    foreach($colors as $color){
        echo "$color <br>";
        
    }
    var_dump($colors);
?>