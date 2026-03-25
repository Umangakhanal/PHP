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
        }
?>
<form  method="post">
    Full Name: <input type="text" name="name">
    <input type="submit" value="submit">
</form>