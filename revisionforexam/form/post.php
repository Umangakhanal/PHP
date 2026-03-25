<?php 
//POST
    // if(isset($_POST['name'])){
    //     $name=$_POST['name'];
    //     echo "Your name is $name";
    // }

// SERVER
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $name=$_POST['name'];
            echo "Your name is $name";
            echo "File name:". $_SERVER['PHP_SELF']."<br>";
            echo "File name:". $_SERVER['SERVER_NAME']."<br>";
            echo "File name:". $_SERVER['REQUEST_METHOD']."<br>";
        }
?>
<form  method="post">
    Full Name: <input type="text" name="name">
    <input type="submit" value="submit">
</form>