<?php
function add($a, $b){
    
    // echo $a;
    // echo $b;
    // echo $a+$b;
    $c=$a+$b;
    return $c;
} 

if(isset ($_POST['number'])){
    $a= ($_POST["number"]);
    $b= ($_POST["roll"]);
    add($a,$b);
    $c = add($a,$b);
    $d =add($c,$a);
    echo $d;
}
?>
<html>
    <body>
        <form action="functions.php" method="post">
            <label for="name">Number:</label>
            <input type="text" name="number" >
            <label for="roll">Roll:</label>
            <input type="text" name="roll">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>