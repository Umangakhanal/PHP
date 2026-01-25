<?php
// echo readfile("text.txt");
$a=fopen("text.txt","r");
// var_dump($a);
// while(!feof($a)){
//     echo fread($a,filesize("text.txt"));

// } 
// $b="hello bhaskar\n";
// fwrite($a,$b);
// echo readfile("text.txt");
echo fgetc($a);
fclose($a);
?>